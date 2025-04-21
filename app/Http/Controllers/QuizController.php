<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Option;
use App\Models\UserQuiz;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    // 📌 ADMIN: Tampilkan daftar semua quiz
    public function index()
    {
        $quizzes = Quiz::with('category')->get();
        return view('admin.quizzes.index', compact('quizzes'));
    }
    // 📌 ADMIN: Form buat quiz baru
    public function create()
    {
        $categories = Category::all();
        return view('admin.quizzes.create', compact('categories'));
    }

    // 📌 ADMIN: Simpan quiz baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Quiz::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('quizzes.index')->with('success', 'Quiz berhasil dibuat!');
    }


    public function storeQuestion(Request $request, $quizId)
    {
        $request->validate([
            'question_text' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('questions', 'public');
        }

        Question::create([
            'quiz_id' => $quizId,
            'question_text' => $request->question_text,
            'image' => $imagePath,
        ]);

        return redirect()->route('quizzes.show', $quizId)->with('success', 'Pertanyaan berhasil ditambahkan!');
    }


    // 📌 USER: Tampilkan quiz untuk dikerjakan
    public function show($id)
    {
        $quiz = Quiz::with('questions.options')->findOrFail($id);
        return view('user.quizzes.show', compact('quiz'));
    }

    // 📌 USER: Simpan hasil quiz yang dikerjakan
    public function submit(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        $score = 0;

        foreach ($request->answers as $question_id => $option_id) {
            $option = Option::find($option_id);
            if ($option && $option->is_correct) {
                $score += 10; // Setiap jawaban benar mendapat 10 poin
            }
        }

        // Simpan skor user
        UserQuiz::create([
            'user_id' => Auth::id(),
            'quiz_id' => $quiz->id,
            'score' => $score,
            'completed_at' => now(),
        ]);

        // Tambahkan poin ke user
        $user = Auth::user();
        $user->points += $score;
        $user->save();

        return redirect()->route('leaderboard.index')->with('success', 'Quiz selesai! Skor Anda: ' . $score);
    }

    public function quizzesByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $quizzes = Quiz::where('category_id', $categoryId)->get();

        return view('user.quizzes.index', compact('category', 'quizzes'));
    }

}