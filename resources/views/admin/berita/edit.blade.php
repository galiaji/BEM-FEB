<!DOCTYPE html>
<html>

<head>
    <title>Edit Berita</title>
</head>

<body>
    <h1>Edit Berita</h1>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label>Judul:</label>
            <input type="text" name="judul" value="{{ $berita->judul }}" required>
        </div>
        <div>
            <label>Isi Berita:</label>
            <textarea name="isi_berita" required>{{ $berita->isi_berita }}</textarea>
        </div>
        <div>
            <label>Gambar:</label>
            <input type="file" name="input_gambar">
            @if ($berita->input_gambar)
            <img src="{{ url('images/'.$berita->input_gambar) }}" alt="Gambar Berita" width="100">
            @endif
        </div>
        <div>
            <label>Program:</label>
            <select name="program_id" required>
                @foreach ($programs as $program)
                <option value="{{ $program->id }}" {{ $berita->program_id == $program->id ? 'selected' : '' }}>
                    {{ $program->nama_program }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Update Berita</button>
    </form>
</body>

</html>