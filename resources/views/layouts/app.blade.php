<!-- resources/views/layouts/base.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Landing Page')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="public/favicon.ico">
    <style>
        .animate {
            animation-name: fade-right;
            animation-duration: 1s;
            animation-timing-function: ease-linear;
        }
    </style>
</head>

<body class="bg-white">
    @include('layouts.header')

    <!-- Content Section -->
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    <script>
        const carousel = document.getElementById('carousel');
        let isAutoScrolling = true;

        function autoScroll() {
            if (isAutoScrolling) {
                carousel.scrollBy({
                    left: carousel.offsetWidth,
                    behavior: 'smooth'
                });
            }
        }

        let autoScrollInterval = setInterval(autoScroll, 10000); // Scroll setiap 3 detik

        // Pause auto-scroll saat pengguna mulai menggulir secara manual
        carousel.addEventListener('mouseover', () => {
            isAutoScrolling = false;
            clearInterval(autoScrollInterval);
        });

        // Lanjutkan auto-scroll saat mouse keluar
        carousel.addEventListener('mouseout', () => {
            isAutoScrolling = true;
            autoScrollInterval = setInterval(autoScroll, 10000);
        });

        // Restart auto-scroll saat akhir konten tercapai
        carousel.addEventListener('scroll', () => {
            if (carousel.scrollLeft + carousel.offsetWidth >= carousel.scrollWidth) {
                carousel.scrollTo({
                    left: 0,
                    behavior: 'smooth'
                });
            }
        });
    </script>

</body>

</html>