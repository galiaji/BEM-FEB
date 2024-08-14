@extends('admin.layout')

@section('content')
<h1>Tambah Produk UMKM</h1>
<form action="{{ route('admin.produk_umkm.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nama_produk">Nama Produk:</label>
    <input type="text" name="nama_produk" id="nama_produk" required>
    <label for="deskripsi_produk">Deskripsi Produk:</label>
    <textarea name="deskripsi_produk" id="deskripsi_produk" required></textarea>
    <label for="foto_produk">Foto Produk:</label>
    <input type="file" name="foto_produk" id="foto_produk">
    <button type="submit">Simpan</button>
</form>
@endsection