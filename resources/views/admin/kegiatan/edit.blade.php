@extends('admin.layout')

@section('title', 'Edit Kegiatan')

@section('content')
<div class="container">
    <h1>Edit Kegiatan</h1>
    <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" required>
        </div>
        <div class="form-group">
            <label for="foto_kegiatan">Foto Kegiatan</label>
            <input type="file" name="foto_kegiatan" class="form-control">
            @if($kegiatan->foto_kegiatan)
            <img src="{{ asset('storage/' . $kegiatan->foto_kegiatan) }}" alt="Foto Kegiatan" width="100" class="mt-2">
            @endif
        </div>
        <div class="form-group">
            <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
            <textarea name="deskripsi_kegiatan" class="form-control" required>{{ $kegiatan->deskripsi_kegiatan }}</textarea>
        </div>
        <div class="form-group">
            <label for="program_id">Program</label>
            <select name="program_id" class="form-control" required>
                <option value="">Select Program</option>
                @foreach($programs as $program)
                <option value="{{ $program->id }}" {{ $kegiatan->program_id == $program->id ? 'selected' : '' }}>
                    {{ $program->nama }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection