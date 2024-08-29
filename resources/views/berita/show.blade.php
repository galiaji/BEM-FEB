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

<body>
    <header>
        <nav class="bg-white border-gray-200 drop-shadow-md z-50">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('public/img/LOGO PPK BEM FEB 1.png') }}" class="h-8" alt="Logo PPK BEM FEB" />

                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                        <li><a href="/"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                                aria-current="page">Home</a></li>
                        <li><a href="/programs"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Programs</a>
                        </li>
                        <li><a href="/berita"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">News</a>
                        </li>
                        <li><a href="#Contact"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="program-details py-10 bg-gray-100 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row">
                    <!-- Main Content -->
                    <div class="lg:w-3/4">
                        <h2 class="text-4xl font-bold text-gray-900 mb-6">{{ $berita->judul }}</h2>
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-400 uppercase">
                            {{ $berita->created_at->format('F j, Y') }}
                        </span>
                        @if (!empty($berita->input_gambar))
                        <div class="relative w-full h-[300px] overflow-hidden rounded-lg shadow-lg mb-6">
                            <img src="{{ asset('public/images/' . $berita->input_gambar) }}" alt="{{ $berita->judul }}"
                                class="absolute inset-0 w-full h-full object-contain">
                        </div>
                        @else
                        <div class="relative w-full h-[300px] overflow-hidden rounded-lg shadow-lg mb-6">
                            <img src="{{ asset('public/images/placeholder.png') }}" alt="Placeholder Image"
                                class="absolute inset-0 w-full h-full object-contain">
                        </div>
                        @endif
                        <p class="text-lg leading-relaxed text-gray-700 mb-8 text-justify">
                            {!! $berita->isi_berita !!}
                    </div>
                    <!-- Sidebar or Additional Content -->
                    <div class="lg:w-1/4 lg:pl-8">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Berita Lainnya</h3>
                        @if ($beritas->isEmpty())
                        <p class="text-lg text-gray-700">Belum ada berita</p>
                        @else
                        <div class="space-y-6">
                            @foreach ($beritas as $beritaItem)
                            <a href="{{ route('berita.show', $beritaItem->slug) }}"
                                class="block bg-white border border-gray-200 rounded-lg shadow overflow-hidden hover:bg-gray-100 transition-colors duration-300 transition-transform transform hover:scale-105 hover:drop-shadow-xl duration-300">
                                <div class="relative w-full h-40 overflow-hidden rounded-md">
                                    <img class="absolute inset-0 w-full h-full object-contain"
                                        src="{{ asset('public/images/' . $beritaItem->input_gambar) }}"
                                        alt="{{ $beritaItem->judul }}" />
                                </div>
                                <div class="p-4">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">
                                        {{ $beritaItem->judul }}
                                    </h5>
                                    <p class="font-normal text-gray-700 mb-4">
                                        {{ $beritaItem->created_at->format('d M Y') }}
                                    </p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- resources/views/partials/footer.blade.php -->
    <footer id="Contact" class="bg-gray-800 shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex flex-col items-center mb-4 sm:mb-0 space-y-4 rtl:space-y-reverse">
                    <div class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">MUJUR</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-white font-semibold">Desa Kemambang</span>
                        <span class="block text-white mt-2 font-semibold">Tim BEM FEB UNDIP</span>
                    </div>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" class="hover:underline me-4 md:me-6">Instagram</a>
                    </li>
                    <li>
                        <a href="https://api.whatsapp.com/send/?phone=" class="hover:underline">WhatsApp</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">&copy; 2024 MUJUR. All Rights
                Reserved.</span>
        </div>
    </footer>

</body>