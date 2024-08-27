<?php
namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Program;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Method to display all news articles
    public function index(Request $request)
    {
        $beritas = Berita::when($request->program_id, function ($query) use ($request) {
            return $query->where('program_id', $request->program_id);
        })
        ->paginate(9);
        $programs = Program::all(); // Mendapatkan semua program
        $query = Berita::query();
        if ($request->has('program_id')) {
            $query->where('program_id', $request->get('program_id'));
        }
        return view('berita.index', compact('beritas', 'programs'));
        
    }

    // Method to display a single news article by its slug
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        
        // Ambil 3 berita terbaru selain yang ditampilkan
        $beritas = Berita::where('slug', '!=', $slug)
                         ->latest() // Urutkan berita terbaru
                         ->take(3)  // Batasi hanya 3 berita
                         ->get();

        return view('berita.show', compact('berita', 'beritas'));
    }
    
}
