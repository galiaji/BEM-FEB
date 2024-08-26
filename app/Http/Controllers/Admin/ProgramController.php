<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; // To handle file deletion

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('admin.program.index', compact('programs'));
    }



    public function create()
    {
        return view('admin.program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jadwal' => 'nullable|date',
            'tujuan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $program = new Program;
        $program->nama = $request->nama;
        $program->deskripsi = $request->deskripsi;
        $program->jadwal = $request->jadwal;
        $program->tujuan = $request->tujuan;

        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $program->gambar = $imageName;
        }

        $program->slug = Str::slug($request->nama);
        $program->save();

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil disimpan.');
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        return view('admin.program.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jadwal' => 'nullable|date',
            'tujuan' => 'nullable|string-',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $program = Program::findOrFail($id);
        $program->nama = $request->nama;
        $program->deskripsi = $request->deskripsi;
        $program->jadwal = $request->jadwal;
        $program->tujuan = $request->tujuan;

        if ($request->hasFile('gambar')) {
            // Delete the old image
            if ($program->gambar && file_exists(public_path('images/' . $program->gambar))) {
                unlink(public_path('images/' . $program->gambar));
            }

            // Upload the new image
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $program->gambar = $imageName;
        }

        $program->save();

        return redirect()->route('admin.program.index')
            ->with('success', 'Program updated successfully.');
    }


    public function destroy($id)
    {
        $program = Program::findOrFail($id);

        // Delete the associated image if it exists
        if ($program->gambar && File::exists(public_path('images/' . $program->gambar))) {
            File::delete(public_path('images/' . $program->gambar));
        }

        $program->delete();
        return redirect()->route('admin.program.index')->with('success', 'Program berhasil dihapus.');
    }
}
