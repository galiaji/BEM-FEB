@extends('admin.layout')

@section('title', 'Manage Berita')

@section('content')
<a href="{{ route('admin.berita.create') }}" class="btn btn-primary">Add New Berita</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Isi Berita</th>
            <th>Program</th>
            <th>Slug</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($beritas as $berita)
        <tr>
            <td>{{ $berita->id }}</td>
            <td>{{ $berita->judul }}</td>
            <td>{{ Str::limit($berita->isi_berita, 100) }}</td> <!-- Limit content preview -->
            <td>{{ $berita->program->nama}}</td> <!-- Assuming program relation is loaded -->
            <td>{{ $berita->slug }}</td>
            <td>
                @if ($berita->input_gambar)
                <img src="{{ url('images/'.$berita->input_gambar) }}" alt="Gambar Berita" width="100">
                @else
                Tidak ada gambar
                @endif
            </td>
            <td>
                <a href="{{ route('admin.berita.edit', $berita->id) }}">Edit</a>
                <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection