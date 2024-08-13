@extends('admin.layout')

@section('title', 'Manage Produk UMKM')

@section('content')
<a href="{{ route('admin.produk_umkm.create') }}" class="btn btn-primary">Tambah Produk UMKM</a>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Deskripsi Produk</th>
            <th>Foto Produk</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produk_umkms as $produk)
        <tr>
            <td>{{ $produk->id }}</td>
            <td>{{ $produk->nama_produk }}</td>
            <td>{{ Str::limit($produk->deskripsi_produk, 50) }}</td>
            <td>
                @if($produk->foto_produk)
                <img src="{{ asset('storage/' . $produk->foto_produk) }}" alt="{{ $produk->nama_produk }}" width="100">
                @else
                <p>Foto tidak tersedia</p>
                @endif
            </td>
            <td>
                <a href="{{ route('admin.produk_umkm.edit', $produk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.produk_umkm.destroy', $produk->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection