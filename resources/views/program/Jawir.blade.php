@extends('layouts.app')

@section('title', 'Tentang Pojok Lestari')

@section('content')
<!-- Hero Section Start -->
<div class="bg-gradient-to-b from-gray-500 to-gray-100">
    <section id="About" class="py-10 sm:py-16 lg:py-5 bg-green-200 rounded-lg">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 bg-yellow-100">
            <div class="grid grid-cols-2 md:col-1 sm:col-1 gap-x-2 bg-green-100">
                <div class="col-span-1">
                    <h2 class="mb-4 text-4xl font-bold leading-tight tracking-tight text-indigo-600 md:text-5xl lg:text-5xl">
                        Tentang Pojok Lestari
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-gray-700 ">
                        <!-- program pembinaan UMKM khususnya di Desa Munding yang ingin mengembangkan dan memajukan usahanya dengan baik dan sesuai dengan perkembangan teknologi -->

                    </p>
                    <p class="mt-4 text-lg leading-relaxed text-gray-700">
                        {!! $program->deskripsi !!}
                    </p>
                </div>
                <div class="flex">
                    <img src="public/img/gambarvec1.png" alt="Illustration" class="w-full max-w-md rounded-lg">
                </div>
            </div>
        </div>
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 bg-green-100">
            <!-- Container Baru -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('public/images/' . $program->gambar) }}" alt="{{ $program->gambar }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Hero Section End -->
@if($relatedKegiatan->isNotEmpty())
<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-8 relative inline-block kegiatan-title">Kegiatan Terkait</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($relatedKegiatan as $kegiatan)
            @if($kegiatan->program->nama == "JAWIR")
            <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                <img src="{{ asset('public/images/' . $kegiatan->foto_kegiatan) }}" alt="{{ $kegiatan->nama_kegiatan }}" class="mb-4 w-full h-48 object-cover rounded-lg">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $kegiatan->nama_kegiatan }}</h5>
                <p class="text-gray-600 text-justify">{!! Str::limit($kegiatan->deskripsi_kegiatan) !!}</p>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- About Section Start -->
<section id="CategorySection" class="py-10 bg-transparent sm:py-16 lg:py-6 pt-24 pb-24 rounded-lg bg-red-200">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-8">Produk MAKANAN</h2>
        <div class="flex justify-center space-x-4 mb-4">
            {{-- <button class="px-6 py-2 bg-gray-100 rounded-lg flex items-center justify-center space-x-2">
                <i class="fas fa-utensils"></i>
                <span>Makanan</span>
            </button> --}}
            {{-- <button class="px-6 py-2 bg-gray-100 rounded-lg flex items-center justify-center space-x-2">
                <i class="fas fa-tools"></i>
                <span>Kerajinan</span>
            </button> --}}
        </div>
        <div class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-lg">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-4">
                {{-- <div class="flex items-end justify-between bg-red-300">
                    <div class="hidden lg:flex lg:items-center lg:space-x-3">
                        <button id="prevBtn" type="button"
                            class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>

                        <button id="nextBtn" type="button"
                            class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div> --}}
                <div class="relative">
                    <div id="carousel" class="max-w-md mx-auto mt-8 lg:mt-1 lg:max-w-full bg-green-400">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 px-4 mb-6">
                            @foreach($products as $product)
                            <div class="overflow-hidden bg-white rounded shadow">
                                <div class="p-6">
                                    <!-- Display product image -->
                                    <img src="{{ asset('public/' . $product->foto_produk) }}" alt="{{ $product->nama_produk }}" class="w-full h-48 object-cover rounded">

                                    <!-- Product name -->
                                    <p class="mt-5 text-2xl font-semibold">
                                        <a href="#" title="" class="text-black">{{ $product->nama_produk }}</a>
                                    </p>

                                    <!-- Product description -->
                                    <p class="mt-4 text-base text-gray-600">{!! $product->deskripsi_produk !!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center mt-8 space-x-3 lg:hidden">
                    <button id="prevBtnMobile" type="button"
                        class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button id="nextBtnMobile" type="button"
                        class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- News Section Start -->
<section class="news py-24 bg-gray-50 dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold leading-tight dark:text-white text-gray-900 sm:text-4xl xl:text-5xl font-pj">
                Berita Terbaru
            </h2>
        </div>
        <!-- Related News Section Start -->
        @if ($relatedNews->isNotEmpty())
        <section class="related-news py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    @foreach ($relatedNews as $news)
                    @if ($news->program->nama == "JAWIR")
                    <div
                        class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                        <img src="{{ asset('public/images/' . $news->input_gambar) }}" alt="{{ $news->judul }}"
                            class="mb-4 w-full h-48 object-cover rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $news->judul }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                            {!! Str::limit($news->isi_berita, 100, '...') !!}
                        </p>
                        <a href="{{ route('berita.show', $news->slug) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Baca Berita
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        <!-- Related News Section End -->



        <script>
            const carousel = document.getElementById('carousel');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const prevBtnMobile = document.getElementById('prevBtnMobile');
            const nextBtnMobile = document.getElementById('nextBtnMobile');

            prevBtn.addEventListener('click', () => {
                carousel.scrollBy({
                    left: -carousel.clientWidth,
                    behavior: 'smooth'
                });
            });

            nextBtn.addEventListener('click', () => {
                carousel.scrollBy({
                    left: carousel.clientWidth,
                    behavior: 'smooth'
                });
            });

            prevBtnMobile.addEventListener('click', () => {
                carousel.scrollBy({
                    left: -carousel.clientWidth,
                    behavior: 'smooth'
                });
            });

            nextBtnMobile.addEventListener('click', () => {
                carousel.scrollBy({
                    left: carousel.clientWidth,
                    behavior: 'smooth'
                });
            });
        </script>
        @endsection