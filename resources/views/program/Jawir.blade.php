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
                        program pembinaan UMKM khususnya di Desa Munding yang ingin mengembangkan dan memajukan usahanya dengan baik dan sesuai dengan perkembangan teknologi
                    </p>
                    <p class="mt-4 text-lg leading-relaxed text-gray-700">
                        Kegiatan yang akan di selenggarakan diantaranya berupa pelatihan, pengembangan terhadap produk dan hal pendukung usaha seperti pengurusan perizinan usaha dan produk, rebranding produk, desain produk dan branding melalui sosial media.
                        dikasi space buat masukin foto kegiatan nya
                    </p>
                </div>
                <div class="flex">
                    <img src="img/gambarvec1.png" alt="Illustration" class="w-full max-w-md rounded-lg">
                </div>
            </div>
        </div>
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 bg-green-100">
            <!-- Container Baru -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="img/Q73HytZ_d.png" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="img/Q73HytZ_d.png" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="img/Q73HytZ_d.png" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="img/Q73HytZ_d.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Hero Section End -->
<!-- About Section Start -->
<section id="CategorySection" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg bg-red-200">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-8">KATEGORI MAKANAN</h2>
        <div class="flex justify-center space-x-4 mb-4">
            <button class="px-6 py-2 bg-gray-100 rounded-lg flex items-center justify-center space-x-2">
                <i class="fas fa-utensils"></i>
                <span>Makanan</span>
            </button>
            <button class="px-6 py-2 bg-gray-100 rounded-lg flex items-center justify-center space-x-2">
                <i class="fas fa-tools"></i>
                <span>Kerajinan</span>
            </button>
        </div>
        <div class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-lg">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-4">
        <div class="flex items-end justify-between bg-red-300">
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
        </div>
        <div class="relative">
            <div id="carousel" class="flex overflow-x-auto max-w-md mx-auto mt-8 lg:mt-1 lg:max-w-full scroll-smooth pb-6 bg-green-400">
                <div class="flex-none w-full lg:w-1/3 px-4 mb-6">
                    <div class="overflow-hidden bg-white rounded shadow ">
                        <div class="p-6">
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black">martabak</a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquam voluptatum possimus, tempora, repudiandae sequi necessitatibus quia dolore repellendus totam aspernatur.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-full lg:w-1/3 px-4 mb-6">
                    <div class="overflow-hidden bg-white rounded shadow ">
                        <div class="p-6">
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black">martabak</a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquam voluptatum possimus, tempora, repudiandae sequi necessitatibus quia dolore repellendus totam aspernatur.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-full lg:w-1/3 px-4 mb-6">
                    <div class="overflow-hidden bg-white rounded shadow ">
                        <div class="p-6">
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black">martabak</a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquam voluptatum possimus, tempora, repudiandae sequi necessitatibus quia dolore repellendus totam aspernatur.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-full lg:w-1/3 px-4 mb-6">
                    <div class="overflow-hidden bg-white rounded shadow ">
                        <div class="p-6">
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black">martabak</a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquam voluptatum possimus, tempora, repudiandae sequi necessitatibus quia dolore repellendus totam aspernatur.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
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