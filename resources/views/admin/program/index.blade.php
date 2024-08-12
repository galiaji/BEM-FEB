@extends('admin.layout')

@section('title', 'Manage Programs')

@section('content')
<a href="{{ route('admin.program.create') }}" class="btn btn-primary">Add New Program</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Program</th>
            <th>Deskripsi</th>
            <th>Jadwal</th>
            <th>Tujuan</th>
            <th>Slug</th>
            <th>Foto Kegiatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($programs as $program)
        <tr>
            <td>{{ $program->id }}</td>
            <td>{{ $program->nama_program }}</td>
            <td>{{ $program->deskripsi_program }}</td>
            <td>{{ $program->jadwal }}</td>
            <td>{{ $program->tujuan }}</td>
            <td>{{ $program->slug }}</td>
            <td>
                @if ($program->foto_kegiatan)
                <img src="{{ url('images/'.$program->foto_kegiatan) }}" alt="Foto Kegiatan" width="100">
                @else
                Tidak ada foto
                @endif
            </td>
            <td>
                <a href="{{ route('admin.program.edit', $program->id) }}">Edit</a>
                <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus program ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection