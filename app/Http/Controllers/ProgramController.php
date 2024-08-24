<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Program;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('program.index', compact('programs'));
    }

    public function show($slug)
    {
        // Retrieve the program by its slug
        $program = Program::where('slug', $slug)->firstOrFail();

        // Retrieve related news based on the program (adjust the logic as needed)
        $relatedNews = Berita::where('program_id', $program->id)->get();

        $relatedKegiatan = Kegiatan::where('program_id', $program->id)->get();

        // Pass data to the view
        return view('program.show', compact('program', 'relatedNews', 'relatedKegiatan'));
    }
}
