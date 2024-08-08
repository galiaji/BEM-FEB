<!DOCTYPE html>
<html>

<head>
    <title>Daftar Berita</title>
</head>

<body>
    <h1>Daftar Berita</h1>
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
                <td>{{ $berita->isi_berita }}</td>
                <td>{{ $berita->program->nama_program }}</td>
                <td>{{ $berita->slug }}</td>
                <td>
                    @if ($berita->input_gambar)
                    <img src="{{ url('images/'.$berita->input_gambar) }}" alt="Gambar Berita" width="100">
                    @else
                    Tidak ada gambar
                    @endif
                </td>
                <td>
                    <a href="{{ route('berita.edit', $berita->id) }}">Edit</a>
                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>