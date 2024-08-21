@extends('admin.layout')

@section('title', 'Edit Program')

@section('content')
    <div class="container">
        <h1>Edit Program</h1>
        <form action="{{ route('admin.program.update', $program->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Program</label>
                <input type="text" name="nama" class="form-control" value="{{ $program->nama }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Program</label>
                <textarea name="deskripsi" class="form-control" required>{{ $program->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="jadwal">Jadwal</label>
                <input type="datetime-local" name="jadwal" class="form-control"
                    value="{{ $program->jadwal ? $program->jadwal->format('Y-m-d\TH:i') : '' }}">
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan</label>
                <textarea name="tujuan" class="form-control">{{ $program->tujuan }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.program.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
