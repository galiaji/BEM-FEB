@extends('admin.layout')

@section('title', 'Create New Kegiatan')

@section('content')
<div class="container">
    <h1>Create New Kegiatan</h1>
    <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="foto_kegiatan">Foto Kegiatan</label>
            <input type="file" name="foto_kegiatan" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
            <textarea name="deskripsi_kegiatan" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="program_id">Program</label>
            <select name="program_id" class="form-control" required>
                <option value="">Select Program</option>
                @foreach($programs as $program)
                <option value="{{ $program->id }}">{{ $program->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection