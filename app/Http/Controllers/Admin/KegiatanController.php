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
     * Display a listing of the kegiatan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::with('program')->get();
        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new kegiatan.
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
            $imageName = time() . '.' . $request->foto_kegiatan->extension();
            $request->foto_kegiatan->storeAs('public/images', $imageName);
            $data['foto_kegiatan'] = $imageName;
        }

        Kegiatan::create($data);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan created successfully.');
    }

    /**
     * Display the specified kegiatan.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified kegiatan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id); // Retrieve the model by ID
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

        $data = $request->except('foto_kegiatan');

        // Handle file upload
        if ($request->hasFile('foto_kegiatan')) {
            // Delete the old image
            if ($kegiatan->foto_kegiatan && Storage::exists('public/images/' . $kegiatan->foto_kegiatan)) {
                Storage::delete('public/images/' . $kegiatan->foto_kegiatan);
            }

            // Upload the new image
            $imageName = time() . '.' . $request->foto_kegiatan->extension();
            $request->foto_kegiatan->storeAs('public/images', $imageName);
            $data['foto_kegiatan'] = $imageName;
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
        if ($kegiatan->foto_kegiatan && Storage::exists('public/images/' . $kegiatan->foto_kegiatan)) {
            Storage::delete('public/images/' . $kegiatan->foto_kegiatan);
        }

        $kegiatan->delete();

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan deleted successfully.');
    }
}
