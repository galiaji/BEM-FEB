@extends('admin.layout')

@section('title', 'Edit Program')

@section('content')
<form action="{{ route('admin.program.update', $program->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label>Nama Program:</label>
        <input type="text" name="nama_program" value="{{ $program->nama_program }}" required>
    </div>
    <div>
        <label>Deskripsi Program:</label>
        <textarea name="deskripsi_program" required>{{ $program->deskripsi_program }}</textarea>
    </div>
    <div>
        <label>Foto Kegiatan:</label>
        <input type="file" name="foto_kegiatan">
        @if ($program->foto_kegiatan)
        <img src="{{ url('images/'.$program->foto_kegiatan) }}" alt="Foto Kegiatan" width="100">
        @endif
    </div>
    <div>
        <label>Kegiatan dalam Program:</label>
        <textarea name="kegiatan_dalam_program" required>{{ $program->kegiatan_dalam_program }}</textarea>
    </div>
    <div>
        <label>Jadwal:</label>
        <input type="datetime-local" name="jadwal" value="{{ $program->jadwal }}" required>
    </div>
    <div>
        <label>Tujuan:</label>
        <textarea name="tujuan" required>{{ $program->tujuan }}</textarea>
    </div>
    <button type="submit">Update Program</button>
</form>
@endsection