@extends('admin.layout')

@section('title', 'Kegiatan List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Kegiatan List</h1>
    <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-primary">Create New Kegiatan</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kegiatan</th>
            <th>Foto Kegiatan</th>
            <th>Deskripsi Kegiatan</th>
            <th>Program</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kegiatan as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_kegiatan }}</td>
            <td>
                @if($item->foto_kegiatan)
                <img src="{{ asset('storage/' . $item->foto_kegiatan) }}" alt="Foto Kegiatan" width="100">
                @endif
            </td>
            <td>{{ Str::limit($item->deskripsi_kegiatan, 50) }}</td>
            <td>{{ $item->program->nama ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('admin.kegiatan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.kegiatan.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection