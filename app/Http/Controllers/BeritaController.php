<?php
namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Method to display all news articles
    public function index()
    {
        $beritas = Berita::all();
        return view('berita.index', compact('beritas'));
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
