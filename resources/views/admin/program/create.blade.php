@extends('admin.layout')

@section('title', 'Add New Program')

@section('content')
<div class="container">
    <h1>Add New Program</h1>
    <form action="{{ route('admin.program.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Program</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Program</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="jadwal">Jadwal</label>
            <input type="datetime-local" name="jadwal" class="form-control">
        </div>
        <div class="form-group">
            <label for="tujuan">Tujuan</label>
            <textarea name="tujuan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('admin.program.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection