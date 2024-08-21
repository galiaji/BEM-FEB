<?php

namespace App\Http\Controllers\Admin;

use App\Models\Program;
use App\Models\Kegiatan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; // Importing the Storage facade

class KegiatanController extends Controller
{
    /**
     * Display a listing of the admin.kegiatan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::with('program')->get();
        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new admin.kegiatan.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::all();
        return view('admin.kegiatan.create', compact('programs'));
    }

    /**
     * Store a newly created kegiatan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'foto_kegiatan' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi_kegiatan' => 'required|string',
            'program_id' => 'required|exists:programs,id',

        ]);

        $data = $request->all();
        // Generate slug from 'nama_kegiatan'
        $data['slug'] = Str::slug($request->nama_kegiatan);

        // Handle file upload
        if ($request->hasFile('foto_kegiatan')) {
            $data['foto_kegiatan'] = $request->file('foto_kegiatan')->store('images/kegiatan', 'public');
        }

        Kegiatan::create($data);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan created successfully.');
    }

    /**
     * Display the specified admin.kegiatan.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified admin.kegiatan.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id); // Mengambil model tunggal berdasarkan ID
        $programs = Program::all();
        return view('admin.kegiatan.edit', compact('kegiatan', 'programs'));
    }


    /**
     * Update the specified kegiatan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'foto_kegiatan' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi_kegiatan' => 'required|string',
            'program_id' => 'required|exists:programs,id',
        ]);

        $data = $request->all();

        // Handle file upload
        if ($request->hasFile('foto_kegiatan')) {
            // Delete the old image
            if ($kegiatan->foto_kegiatan && Storage::exists('public/' . $kegiatan->foto_kegiatan)) {
                Storage::delete('public/' . $kegiatan->foto_kegiatan);
            }

            $data['foto_kegiatan'] = $request->file('foto_kegiatan')->store('images/kegiatan', 'public');
        }

        $kegiatan->update($data);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan updated successfully.');
    }

    /**
     * Remove the specified kegiatan from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        if ($kegiatan->foto_kegiatan && Storage::exists('public/' . $kegiatan->foto_kegiatan)) {
            Storage::delete('public/' . $kegiatan->foto_kegiatan);
        }

        $kegiatan->delete();

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan deleted successfully.');
    }
}
