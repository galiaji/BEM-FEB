<!DOCTYPE html>
<html lang="en">

<!-- Tampilan untuk detail Berita -->

<body>

    <header>
        <h1>{{ $berita->judul }}</h1>
        <nav>
            <a href="{{ route('landing.page') }}">Home</a>
            <a href="{{ route('program.show', $berita->slug) }}">Programs</a>
            <a href="#">News</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section class="program-details">
        <h2>{{ $berita->judul }}</h2>
        <p>{{ $berita->isi_berita }}</p>
        <img src="{{ url('images/' . $berita->input_gambar) }}" alt="{{ $berita->judul }}">
        <!-- Add other program details here -->
    </section>

    <footer>
        <p>&copy; 2024 RUCITA. All Rights Reserved.</p>
    </footer>

</body>

</html>
