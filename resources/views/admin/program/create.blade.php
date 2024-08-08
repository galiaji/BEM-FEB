@extends('admin.layout')

@section('title', 'Add New Program')

@section('content')
<form action="{{ route('admin.program.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Nama Program:</label>
        <input type="text" name="nama_program" required>
    </div>
    <div>
        <label>Deskripsi Program:</label>
        <textarea name="deskripsi_program" required></textarea>
    </div>
    <div>
        <label>Foto Kegiatan:</label>
        <input type="file" name="foto_kegiatan">
    </div>
    <div>
        <label>Kegiatan dalam Program:</label>
        <textarea name="kegiatan_dalam_program" required></textarea>
    </div>
    <div>
        <label>Jadwal:</label>
        <input type="datetime-local" name="jadwal" required>
    </div>
    <div>
        <label>Tujuan:</label>
        <textarea name="tujuan" required></textarea>
    </div>
    <button type="submit">Simpan Program</button>
</form>
@endsection