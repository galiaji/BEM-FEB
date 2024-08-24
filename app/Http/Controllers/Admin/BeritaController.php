<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Program;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        $programs = Program::all();
        return view('admin.berita.create', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'input_gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'program_id' => 'required|exists:programs,id',
        ]);

        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->isi_berita;

        if ($request->hasFile('input_gambar')) {
            $imageName = time() . '.' . $request->input_gambar->extension();
            $request->input_gambar->move(public_path('images'), $imageName);
            $berita->input_gambar = $imageName;
        }

        $berita->program_id = $request->program_id;
        $berita->slug = \Illuminate\Support\Str::slug($request->judul);
        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil disimpan.');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $programs = Program::all();
        return view('admin.berita.edit', compact('berita', 'programs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'input_gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'program_id' => 'required|exists:programs,id',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->isi_berita;

        if ($request->hasFile('input_gambar')) {
            $imageName = time() . '.' . $request->input_gambar->extension();
            $request->input_gambar->move(public_path('images'), $imageName);
            $berita->input_gambar = $imageName;
        }

        $berita->program_id = $request->program_id;
        $berita->slug = \Illuminate\Support\Str::slug($request->judul);
        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
