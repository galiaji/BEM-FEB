<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Program;
use App\Models\Kegiatan;
use App\Models\ProdukUMKM;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $program = Program::all();
        $program1 = Program::where('nama', 'RUMLES')->firstOrFail();
        $program2 = Program::where('nama', 'JANGWIS')->firstOrFail();
        $program3 = Program::where('nama', 'ADBUD')->firstOrFail();
        $program4 = Program::where('nama', 'UKCIT')->firstOrFail();
        $program5 = Program::where('nama', 'JAWIR')->firstOrFail();
        return view('program.Index', compact('program1', 'program2', 'program3', 'program4', 'program5'));
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
        $programs = Program::where('nama', 'RUMLES')->firstOrFail();
        $relatedKegiatan = Kegiatan::all();
        $relatedNews = Berita::all();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(5)->get();
        return view('program.rumles', compact('programs', 'program', 'relatedKegiatan', 'relatedNews', 'beritas'));
    }

    public function Jangwis()
    {
        $program = Program::where('nama', 'JANGWIS')->firstOrFail();
        $programs = Program::where('nama', 'JANGWIS')->firstOrFail();
        $relatedKegiatan = Kegiatan::all();
        $relatedNews = Berita::all();
        return view('program.jangwis', compact('programs', 'program', 'relatedKegiatan', 'relatedNews'));
    }
    public function Adbud()
    {
        $program = Program::where('nama', 'ADBUD')->firstOrFail();
        $programs = Program::where('nama', 'ADBUD')->firstOrFail();
        $relatedKegiatan = Kegiatan::all();
        $relatedNews = Berita::all();
        return view('program.adbud', compact('programs', 'program', 'relatedKegiatan', 'relatedNews'));
    }
    public function ukcit()
    {
        $program = Program::where('nama', 'UKCIT')->firstOrFail();
        $programs = Program::where('nama', 'UKCIT')->firstOrFail();
        $relatedKegiatan = Kegiatan::all();
        $relatedNews = Berita::all();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(5)->get();
        return view('program.ukcit', compact('programs', 'program', 'relatedKegiatan', 'relatedNews', 'beritas'));
    }
    public function indexjawir()
    {
        $program = Program::where('nama', 'JAWIR')->firstOrFail();
        $programs = Program::where('nama', 'JAWIR')->firstOrFail();
        $products = ProdukUMKM::all();  // Fetch all products
        $relatedKegiatan = Kegiatan::all();
        $relatedNews = Berita::all();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(5)->get();

        return view('program.Jawir', compact('products', 'programs', 'program', 'relatedKegiatan', 'relatedNews', 'beritas'));
    }
}
