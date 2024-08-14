<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'nama' => 'required|string|max:255',  // Updated from 'nama_program'
            'deskripsi' => 'required|string',  // Updated from 'deskripsi_program'
            'jadwal' => 'nullable|date',
            'tujuan' => 'nullable|string',
        ]);

        $program = new Program;
        $program->nama = $request->nama;  // Updated from 'nama_program'
        $program->deskripsi = $request->deskripsi;  // Updated from 'deskripsi_program'
        $program->jadwal = $request->jadwal;
        $program->tujuan = $request->tujuan;
        $program->slug = Str::slug($request->nama);  // Generate slug based on 'nama'
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
            'nama' => 'required|string|max:255',  // Updated from 'nama_program'
            'deskripsi' => 'required|string',  // Updated from 'deskripsi_program'
            'jadwal' => 'nullable|date',  // Updated to nullable
            'tujuan' => 'nullable|string',  // Updated to nullable
        ]);

        $program = Program::findOrFail($id);
        $program->nama = $request->nama;  // Updated from 'nama_program'
        $program->deskripsi = $request->deskripsi;  // Updated from 'deskripsi_program'
        $program->jadwal = $request->jadwal;
        $program->tujuan = $request->tujuan;
        $program->slug = Str::slug($request->nama);  // Generate slug based on 'nama'
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
