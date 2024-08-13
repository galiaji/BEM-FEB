<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function show($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();

        return view('program.show', compact('program'));
    }
}
