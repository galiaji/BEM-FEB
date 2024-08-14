@extends('admin.layout')

@section('title', 'Manage Programs')

@section('content')
<a href="{{ route('admin.program.create') }}" class="btn btn-primary">Add New Program</a>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Jadwal</th>
            <th>Tujuan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($programs as $program)
        <tr>
            <td>{{ $program->id }}</td>
            <td>{{ $program->nama }}</td>
            <td>{{ Str::limit($program->deskripsi, 50) }}</td>
            <td>{{ $program->jadwal ? $program->jadwal->format('d-m-Y H:i') : 'Tidak ditentukan' }}</td>
            <td>{{ $program->tujuan ?? 'Tidak ditentukan' }}</td>
            <td>
                <a href="{{ route('admin.program.edit', $program->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus program ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection