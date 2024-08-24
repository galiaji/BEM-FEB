<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function show($slug)
    {
        // Retrieve the activity by its slug
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();

        // Pass data to the view
        return view('kegiatan.show', compact('kegiatan'));
    }
}
