<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Program;

class LandingPageController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(5)->get();

        return view('landing-page', compact('programs', 'beritas'));
    }
}
