<!DOCTYPE html>
<html lang="en">
<!-- Tampilan Untuk Detail Program -->
<!-- disini juga ada tampilan untuk berita terkait program -->
<!-- ada juga panel untuk penjelasan Terkait Program kegiatan-->

<body>

    <header>
        <h1>{{ $program->nama }}</h1> <!-- Updated from 'nama_program' to 'nama' -->
        <nav>
            <a href="{{ route('landing.page') }}">Home</a>
            <a href="{{ route('program.show', $program->slug) }}">Programs</a>
            <a href="#">News</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section class="program-details">
        <h2>{{ $program->nama }}</h2> <!-- Updated from 'nama_program' to 'nama' -->
        <p>{{ $program->deskripsi }}</p> <!-- Updated from 'deskripsi_program' to 'deskripsi' -->
        <!-- Removed the image section as 'foto_kegiatan' no longer exists -->
        <!-- Add other program details here -->
    </section>

    <footer>
        <p>&copy; 2024 RUCITA. All Rights Reserved.</p>
    </footer>

</body>

</html>
