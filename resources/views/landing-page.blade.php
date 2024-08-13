<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f9fa;
        }

        header {
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        nav {
            float: right;
        }

        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }

        .hero {
            background-color: #ffffff;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero h2 {
            color: #FF9900;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .hero button {
            background-color: #0056b3;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .programs,
        .news {
            padding: 40px 20px;
        }

        .programs h2,
        .news h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .program-item,
        .news-item {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .program-item button,
        .news-item button {
            background-color: #FF9900;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1>RUCITA</h1>
        <nav>
            <a href="#">Home</a>
            <a href="/programs">Programs</a>
            <a href="/berita">News</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Explor Desa Kemambang Cerdas dan Berdaya melalui Pendampingan Inovatif</h2>
        <p>Kembangkan, tumbuhkan, dan kelola berbagai sumber daya yang ada dengan RUCITA dalam pengembangan potensi Desa Kemambang</p>
        <button onclick="window.location.href='/programs'" class="btn btn-primary">Lihat Program</button>

        <button>Hubungi Kami</button>
    </section>

    <section class="programs">
        <h2>Program Kami</h2>
        @foreach($programs as $program)
        <div class="program-item">
            <p>{{ $program->nama }}</p>
            <a href="{{ route('program.show', $program->slug) }}">
                <button>Lihat Program</button>
            </a>
        </div>
        @endforeach
    </section>

    <section class="news">
        <h2>Berita Terbaru</h2>
        @if($beritas->isEmpty())
        <div class="news-item">
            <p>Belum ada berita</p>
        </div>
        @else
        @foreach($beritas as $berita)
        <div class="news-item">
            <p>{{ $berita->judul }}</p>
            <p>{{ $berita->created_at->format('d M Y') }}</p>
            <a href="{{ route('berita.show', $berita->slug) }}">
                <button>Baca Berita</button>
            </a>
        </div>
        @endforeach
        @endif
    </section>

    <footer>
        <p>&copy; 2024 RUCITA. All Rights Reserved.</p>
    </footer>

</body>