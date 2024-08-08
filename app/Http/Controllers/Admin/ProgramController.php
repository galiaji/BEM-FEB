<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

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
            'nama_program' => 'required|string|max:255',
            'deskripsi_program' => 'required|string',
            'foto_kegiatan' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kegiatan_dalam_program' => 'required|string',
            'jadwal' => 'required|date',
            'tujuan' => 'required|string',
        ]);

        $program = new Program;
        $program->nama_program = $request->nama_program;
        $program->deskripsi_program = $request->deskripsi_program;

        if ($request->hasFile('foto_kegiatan')) {
            $imageName = time() . '.' . $request->foto_kegiatan->extension();
            $request->foto_kegiatan->move(public_path('images'), $imageName);
            $program->foto_kegiatan = $imageName;
        }

        $program->kegiatan_dalam_program = $request->kegiatan_dalam_program;
        $program->jadwal = $request->jadwal;
        $program->tujuan = $request->tujuan;
        $program->slug = \Illuminate\Support\Str::slug($request->nama_program);
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
            'nama_program' => 'required|string|max:255',
            'deskripsi_program' => 'required|string',
            'foto_kegiatan' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kegiatan_dalam_program' => 'required|string',
            'jadwal' => 'required|date',
            'tujuan' => 'required|string',
        ]);

        $program = Program::findOrFail($id);
        $program->nama_program = $request->nama_program;
        $program->deskripsi_program = $request->deskripsi_program;

        if ($request->hasFile('foto_kegiatan')) {
            $imageName = time() . '.' . $request->foto_kegiatan->extension();
            $request->foto_kegiatan->move(public_path('images'), $imageName);
            $program->foto_kegiatan = $imageName;
        }

        $program->kegiatan_dalam_program = $request->kegiatan_dalam_program;
        $program->jadwal = $request->jadwal;
        $program->tujuan = $request->tujuan;
        $program->slug = \Illuminate\Support\Str::slug($request->nama_program);
        $program->save();

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();
        return redirect()->route('admin.program.index')->with('success', 'Program berhasil dihapus.');
    }
}
