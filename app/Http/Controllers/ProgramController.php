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

    public function rumles()
    {
        $program = Program::where('nama', 'RUMLES')->firstOrFail();
        $relatedKegiatan = Kegiatan::all();
        $relatedNews = Berita::all();
        return view('program.rumles', compact('relatedKegiatan', 'relatedNews'));
    }

    public function Jangwis()
    {
        $program = Program::where('nama', 'JANGWIS')->firstOrFail();
        $relatedKegiatan = Kegiatan::all();
        $relatedNews = Berita::all();
        return view('program.jangwis', compact('program', 'relatedKegiatan', 'relatedNews'));
    }
    public function Adbud()
    {
        $program = Program::where('nama', 'ADBUD')->firstOrFail();
        $relatedKegiatan = Kegiatan::all();
        $relatedNews = Berita::all();
        return view('program.adbud', compact('program', 'relatedKegiatan', 'relatedNews'));
    }
    public function ukcit()
    {
        $program = Program::where('nama', 'UKCIT')->firstOrFail();
        $relatedKegiatan = Kegiatan::all();
        $relatedNews = Berita::all();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(5)->get();
        return view('program.ukcit', compact('program', 'relatedKegiatan', 'relatedNews', 'beritas'));
    }
    public function indexjawir()
    {
        $programs = Program::where('nama', 'JAWIR')->firstOrFail();
        return view('program.Jawir');
    }
}
