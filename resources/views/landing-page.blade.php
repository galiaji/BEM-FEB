@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<!-- Hero Section Start -->
<div class="bg-gradient-to-b from-gray-50 to-gray-100">
    <section class="py-10 sm:py-16 lg:py-24">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                <div>
                    <h1 class="text-4xl font-bold text-black sm:text-5xl lg:text-5xl">
                        Explor Desa Kemambang Cerdas dan Berdaya melalui
                        <div class="relative inline-flex">
                            <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#4ADE80]"></span>
                            <h1 class="relative text-4xl font-bold text-black sm:text-5xl lg:text-5xl">Pendampingan
                                Inovatif.
                            </h1>
                        </div>
                    </h1>
                    <p class="mt-8 text-base text-black sm:text-xl">Kembangkan, tumbuhkan, dan kelola berbagai
                        sumber daya yang ada dengan RUCITA dalam pengembangan potensi Desa Kemambang.</p>
                    <div class="mt-10 sm:flex sm:items-center sm:space-x-4">
                        <button onclick="window.location.href='/programs'"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat
                            Program</button>
                        <button
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hubungi
                            Kami</button>
                    </div>
                </div>
                <div>
                    <img class="w-full"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/2/hero-img.png"
                        alt="Hero Image" />
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Hero Section End -->

<!-- About Section Start -->
<section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
            <div class="relative lg:mb-12">
                <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4"
                    src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg"
                    alt="Dots Pattern" />
                <div class="pl-24 pr-12">
                    <img class="relative rounded-xl"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/girl-working-on-laptop.jpg"
                        alt="Girl Working on Laptop" />
                </div>
                <div class="absolute left-0 pr-12 bottom-8 xl:bottom-20">
                    <div class="max-w-xs bg-blue-600 rounded-lg sm:max-w-md xl:max-w-md">
                        <div class="px-3 py-4 sm:px-5 sm:py-8">
                            <div class="flex items-start">
                                <p class="text-3xl sm:text-4xl">👋</p>
                                <blockquote class="ml-5">
                                    <p class="text-sm font-medium text-white sm:text-lg">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Aperiam unde sint aliquid reprehenderit culpa
                                        corrupti ut esse eligendi.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="2xl:pl-16">
                <h2 class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">
                    About <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">RUCITA</mark>
                </h2>
                <p class="text-lg leading-relaxed text-black-400 mt-9">Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Dignissimos a libero in velit, explicabo molestias totam deleniti quibusdam
                    odio obcaecati incidunt.</p>
                <p class="mt-6 text-lg leading-relaxed text-black-400">Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Dignissimos a libero in velit, explicabo molestias totam deleniti quibusdam
                    odio obcaecati incidunt.</p>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Programs Section Start -->
<section class="programs">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold leading-tight dark:text-white text-gray-900 sm:text-4xl xl:text-5xl font-pj">
                Program
            </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <!-- @foreach ($programs as $program)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                <div class="mt-2">
                    <a href="{{route('Program.jangwis') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $program->nama }}
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                        {{ Str::limit($program->tujuan, 100, '...') }}
                    </p>
                    <a href="{{route('Program.jangwis') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach -->
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                <div class="mt-2">
                    <a href="{{route('Program.jangwis') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            JAWIR
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('Program.jangwis') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                <div class="mt-2">
                    <a href="{{route('Program.jangwis') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            UKCIT
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('Program.jangwis') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                <div class="mt-2">
                    <a href="{{route('Program.jangwis') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            ADBUD
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('Program.jangwis') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                <div class="mt-2">
                    <a href="{{route('Program.jangwis') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            RUMLES
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('Program.jangwis') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Program
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                <div class="mt-2">
                    <a href="{{route('Program.jangwis') }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            JANGWIS
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                        Ini deskripsi panjang
                    </p>
                    <a href="{{ route('Program.jangwis') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
<section class="news py-24 bg-gray-50 dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold leading-tight dark:text-white text-gray-900 sm:text-4xl xl:text-5xl font-pj">
                Berita Terbaru
            </h2>
        </div>

        @if ($beritas->isEmpty())
        <div class="text-center">
            <p class="text-lg text-gray-700 dark:text-gray-300">Belum ada berita</p>
        </div>
        @else
        <div id="carousel" class="flex overflow-x-auto max-w-md mx-auto mt-8 lg:mt-16 lg:max-w-full scroll-smooth pb-6 space-x-6">
            @foreach ($beritas as $berita)
            <div class="flex-shrink-0 w-full lg:w-1/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                <a href="{{ route('berita.show', $berita->slug) }}">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/' . $berita->input_gambar) }}" alt="{{ $berita->judul }}" />
                </a>
                <div class="p-6">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $berita->judul }}</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400 mb-4">{{ $berita->created_at->format('d M Y') }}</p>
                    <a href="{{ route('berita.show', $berita->slug) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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