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
        $query = Berita::query();

        // Apply program filter if program_id exists
        if ($request->has('program_id') && !empty($request->input('program_id'))) {
            $query->where('program_id', $request->input('program_id'));
        }

        // Apply search filter if search term exists
        if ($request->has('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $query->where('judul', 'like', "%$search%");
        }

        // Paginate the results
        $beritas = $query->paginate(9);

        // Get all programs for the filter buttons
        $programs = Program::all();

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
