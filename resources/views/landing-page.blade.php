@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<!-- Hero Section Start -->
<div class="bg-white">
    <section class="py-10 sm:py-16 lg:py-6">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                <div>
                    <h1
                        class="text-4xl font-bold text-black sm:text-5xl lg:text-5xl animate-fade-up animate-delay-[100ms]">
                        Explor Desa Munding Cerdas dan Berdaya melalui
                        <div class="relative inline-flex">
                            <span
                                class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#b785cc] animate-fade-up animate-delay-[200ms]"></span>
                            <h1
                                class="relative text-4xl font-bold text-black sm:text-5xl lg:text-5xl animate-fade-up animate-delay-[300ms]">
                                Pendampingan Inovatif.
                            </h1>
                        </div>
                    </h1>
                    <p class="mt-8 text-base text-black sm:text-xl animate-fade-right animate-delay-[600ms]">Kembangkan,
                        tumbuhkan, dan kelola berbagai sumber daya yang ada dengan RUCITA dalam pengembangan potensi
                        Desa
                        Munding.</p>
                    <div class="mt-10 sm:flex sm:items-center sm:space-x-2">
                        <button onclick="window.location.href='/programs'"
                            class="text-white bg-violet-400 hover:bg-violet-500 focus:ring-4 focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-3.5 me-2 mb-2 focus:outline-none transition-transform transform hover:scale-105 duration-200">
                            Lihat Program</button>
                        <button
                            class="text-white bg-violet-400 hover:bg-violet-500 focus:ring-4 focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-3.5 me-2 mb-2 focus:outline-none transition-transform transform hover:scale-105 duration-200">
                            Hubungi Kami</button>
                    </div>
                </div>
                <div>
                    <img class="w-full rounded-full transition-transform transform hover:scale-105 duration-300"
                        src="public/img/landing.jpg" alt="Hero Image" />
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Hero Section End -->

<!-- About Section Start -->
<section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-5 gap-x-12 xl:gap-x-24 gap-y-12">
            <div class="relative lg:mb-12 lg:col-span-2 animate-fade-right animate-delay-[200ms]">
                <img class="absolute -right-0 -bottom-4 xl:-bottom-8 xl:-right-4"
                    src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg"
                    alt="Dots Pattern" />
                <div class="pl-12 pr-12">
                    <img class="relative rounded-xl transition-transform transform hover:scale-105 duration-300"
                        src="public/img/about.jpg" alt="About Image" />
                </div>
            </div>
            <div class="2xl:pl-16 lg:col-span-3 animate-fade-right animate-delay-[400ms]">
                <h2
                    class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl">
                    About <mark class="px-2 text-white bg-violet-400 rounded">RUCITA</mark></h2>
                <p class="text-lg leading-relaxed text-black-400 mt-9">Rumah Cerdas Kita (RUCITA) hadir sebagai sebuah
                    wadah yang bertujuan untuk meningkatkan kualitas sumber daya manusia (SDM) melalui pendidikan formal
                    dan nonformal yang mudah diakses. Website kami mencakup berbagai aspek literasi, mulai dari metode
                    pembelajaran, produk UMKM dari program Srawung Wirausaha, hingga dokumentasi acara budaya dan MoU
                    terkait.</p>
                <p class="mt-6 text-lg leading-relaxed text-black-400">Kami juga memberikan informasi terkait kafe kami,
                    yang menyajikan menu beragam, serta panduan pemesanan homestay atau camping ground untuk kelompok.
                    Selain itu, kami fokus pada edukasi pengelolaan limbah dan kepedulian terhadap lingkungan melalui
                    program RUBIK. Semua upaya ini bertujuan untuk memberikan kontribusi positif dalam memajukan SDM dan
                    menjunjung tinggi prinsip keberlanjutan.</p>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Programs Section Start -->
<section class="programs">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center">
            <h2
                class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl font-pj animate-fade-up animate-delay-[200ms]">
                Program
            </h2>
        </div>
        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 animate-fade-right animate-once animate-duration-1000 animate-delay-[300ms] animate-ease-linear">
            <div
                class="w-full bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                <div class="mt-2">
                    <img src="public/img/JAWIR 1.png" alt="Deskripsi Gambar"
                        class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                    <a href="{{ route('Program.jangwis') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                            JAWIR
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('program.jawir') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div
                class="w-full bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                <div class="mt-2">
                    <img src="public/img/Ukcit 1.png" alt="Deskripsi Gambar"
                        class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                    <a href="{{ route('program.ukcit') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                            UKCIT
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-center">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('program.ukcit') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div
                class="w-full bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                <div class="mt-2">
                    <img src="public/img/Adbud 1.png" alt="Deskripsi Gambar"
                        class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                    <a href="{{ route('Program.adbud') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            ADBUD
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('Program.adbud') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div
                class="w-full bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                <div class="mt-2">
                    <img src="public/img/Rumles 1.png" alt="Deskripsi Gambar"
                        class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                    <a href="{{ route('program.rumles') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            RUMLES
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('program.rumles') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div
                class="w-full bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                <div class="mt-2">
                    <img src="public/img/Jangwis 1.png" alt="Deskripsi Gambar"
                        class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                    <a href="{{ route('Program.jangwis') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            JANGWIS
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('Program.jangwis') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Programs Section End -->

<!-- News Section Start -->
<section class="news bg-gray-50">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 mb-16">
        <div class="text-center mt-12">
            <h2
                class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl font-pj animate-fade-up animate-delay-[200ms]">
                Berita Terbaru
            </h2>
        </div>

        @if ($beritas->isEmpty())
        <div class="text-center">
            <p class="text-lg text-gray-700">Belum ada berita</p>
        </div>
        @else
        <div id="carousel"
            class="flex overflow-x-auto max-w-md mx-auto lg:mt-6 lg:max-w-full scroll-smooth pb-6 pt-6 space-x-6">
            @foreach ($beritas as $berita)
            <div
                class="flex-shrink-0 w-full lg:w-1/3 bg-white border border-gray-200 rounded-lg shadow overflow-hidden p-4 transition-transform transform hover:scale-105 hover:bg-gray-100 hover:drop-shadow-xl duration-300">
                <a href="{{ route('berita.show', $berita->slug) }}">
                    <img class="w-full h-48 object-cover rounded-lg"
                        src="{{ asset('public/images/' . $berita->input_gambar) }}"
                        alt="{{ $berita->judul }}" />
                </a>
                <div class="mt-2">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                        {{ $berita->judul }}
                    </h5>
                    <p class="font-normal text-gray-700 mb-4">
                        {{ $berita->created_at->format('d M Y') }}
                    </p>
                    <a href="{{ route('berita.show', $berita->slug) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">
                        Baca Berita
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
<!-- News Section End -->
@endsection