<!DOCTYPE html>
<html>

<head>
    <title>Buat Berita Baru</title>
</head>

<body>
    <h1>Buat Berita Baru</h1>
    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Judul:</label>
            <input type="text" name="judul" required>
        </div>
        <div>
            <label>Isi Berita:</label>
            <textarea name="isi_berita" required></textarea>
        </div>
        <div>
            <label>Gambar:</label>
            <input type="file" name="input_gambar">
        </div>
        <div>
            <label>Program:</label>
            <select name="program_id" required>
                @foreach ($programs as $program)
                <option value="{{ $program->id }}">{{ $program->nama_program }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Simpan Berita</button>
    </form>
</body>

</html>