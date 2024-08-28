<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProdukUMKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukUMKMController extends Controller
{
    public function index()
    {
        $produk_umkms = ProdukUMKM::all();
        return view('admin.produk_umkm.index', compact('produk_umkms'));
    }

    public function create()
    {
        return view('admin.produk_umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi_produk' => 'required|string',
            'foto_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create a new instance of ProdukUMKM
        $produk = new ProdukUMKM();
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;

        // Handle file upload
        if ($request->hasFile('foto_produk')) {


            if ($produk->foto_produk && file_exists(public_path('images/' . $produk->foto_produk))) {
                unlink(public_path('images/' . $produk->foto_produk));
            }

            // Upload the new image
            $imageName = time() . '.' . $request->foto_produk->extension();
            $request->foto_produk->move(public_path('images'), $imageName);
            $produk->foto_produk = $imageName;
        }

        // Save the new produk to the database
        $produk->save();

        return redirect()->route('admin.produk_umkm.index')
            ->with('success', 'Produk UMKM berhasil disimpan.');
    }


    public function edit($id)
    {
        $produk_umkm = ProdukUMKM::findOrFail($id);
        return view('admin.produk_umkm.edit', compact('produk_umkm'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi_produk' => 'required|string',
            'foto_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $produk_umkm = ProdukUMKM::findOrFail($id);

        // Get all input data except 'foto_produk'
        $data = $request->except('foto_produk');

        if ($request->hasFile('foto_produk')) {
            // Check if there's an existing image and delete it
            if ($produk_umkm->foto_produk && file_exists(public_path('images/' . $produk_umkm->foto_produk))) {
                unlink(public_path('images/' . $produk_umkm->foto_produk));
            }

            // Upload the new image
            $imageName = time() . '.' . $request->foto_produk->extension();
            $request->foto_produk->move(public_path('images'), $imageName);
            $data['foto_produk'] = $imageName; // Update the image in the data array
        }

        // Update the record with the new data
        $produk_umkm->update($data);

        return redirect()->route('admin.produk_umkm.index')->with('success', 'Produk UMKM berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $produk_umkm = ProdukUMKM::findOrFail($id);

        if ($produk_umkm->foto_produk && Storage::exists('public/' . $produk_umkm->foto_produk)) {
            Storage::delete('public/' . $produk_umkm->foto_produk);
        }

        $produk_umkm->delete();

        return redirect()->route('admin.produk_umkm.index')->with('success', 'Produk UMKM berhasil dihapus.');
    }
}
