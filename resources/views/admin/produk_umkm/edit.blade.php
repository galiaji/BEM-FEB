@extends('admin.layout')
@section('content')
<h1>Edit Produk UMKM</h1>
<form action="{{ route('admin.produk_umkm.update', $produk_umkm->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="nama_produk">Nama Produk:</label>
    <input type="text" name="nama_produk" id="nama_produk" value="{{ $produk_umkm->nama_produk }}" required>
    <label for="deskripsi_produk">Deskripsi Produk:</label>
    <textarea name="deskripsi_produk" id="deskripsi_produk" required>{{ $produk_umkm->deskripsi_produk }}</textarea>
    <label for="foto_produk">Foto Produk:</label>
    <input type="file" name="foto_produk" id="foto_produk">
    @if($produk_umkm->foto_produk)
    <img src="{{ asset('storage/' . $produk_umkm->foto_produk) }}" alt="{{ $produk_umkm->nama_produk }}" width="100">
    @endif
    <button type="submit">Perbarui</button>
</form>
@endsection