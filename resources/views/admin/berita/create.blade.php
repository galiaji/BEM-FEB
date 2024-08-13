@extends('admin.layout')

@section('title', 'Create Berita')

@section('content')
<h1>Create Berita</h1>

<form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul') }}" required>
    </div>

    <div class="form-group">
        <label for="isi_berita">Isi Berita:</label>
        <textarea id="isi_berita" name="isi_berita" class="form-control" required>{{ old('isi_berita') }}</textarea>
    </div>

    <div class="form-group">
        <label for="program_id">Program Terkait:</label>
        <select id="program_id" name="program_id" class="form-control" required>
            <option value="">Select Program</option>
            @foreach($programs as $program)
            <option value="{{ $program->id }}">{{ $program->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="input_gambar">Gambar:</label>
        <input type="file" id="input_gambar" name="input_gambar" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Simpan Berita</button>
</form>

<a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
@endsection