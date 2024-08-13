<!DOCTYPE html>
<html lang="en">
<!-- Tampilan Untuk Detail Program -->

<body>

    <header>
        <h1>{{ $program->nama_program }}</h1>
        <nav>
            <a href="{{ route('landing.page') }}">Home</a>
            <a href="{{ route('program.show', $program->slug) }}">Programs</a>
            <a href="#">News</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section class="program-details">
        <h2>{{ $program->nama_program }}</h2>
        <p>{{ $program->deskripsi_program }}</p>
        <img src="{{ asset('storage/' . $program->foto_kegiatan) }}" alt="{{ $program->nama_program }}">
        <!-- Add other program details here -->
    </section>

    <footer>
        <p>&copy; 2024 RUCITA. All Rights Reserved.</p>
    </footer>

</body>

</html>