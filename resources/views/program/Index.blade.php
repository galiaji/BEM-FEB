@extends('layouts.app')

@section('title', 'Semua Program')

@section('content')
<!-- Programs Section Start -->
<section class="programs py-16 bg-gray-50 dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold leading-tight text-gray-900 dark:text-white sm:text-5xl xl:text-6xl animate-fade-up">
                Program
            </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 p-6 text-center transition-transform transform hover:scale-105 duration-300 animate-fade-right animate-once animate-duration-1000 animate-delay-[100ms] animate-ease-linear">
                <div class="mb-4">
                    <!-- Tambahkan gambar di sini -->
                    <img src="public/img/about.jpg" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover">
                </div>
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        JAWIR
                    </h5>
                </a>
                <a href="{{ route('program.jawir') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">
                    Lihat Program
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 p-6 text-center transition-transform transform hover:scale-105 duration-300 animate-fade-right animate-once animate-duration-1000 animate-delay-[500ms] animate-ease-linear">
                <div class="mb-4">
                    <!-- Tambahkan gambar di sini -->
                    <img src="public/img/about.jpg" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover">
                </div>
                <a href="{{ route('program.ukcit') }}">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        UKCIT
                    </h5>
                </a>
                <a href="{{ route('program.ukcit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">
                    Lihat Program
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 p-6 text-center transition-transform transform hover:scale-105 duration-300 animate-fade-right animate-once animate-duration-1000 animate-delay-[1000ms] animate-ease-linear">
                <div class="mb-4">
                    <!-- Tambahkan gambar di sini -->
                    <img src="public/img/about.jpg" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover">
                </div>
                <a href="{{ route('Program.adbud') }}">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        ADBUD
                    </h5>
                </a>
                <a href="{{ route('Program.adbud') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">
                    Lihat Program
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 p-6 text-center transition-transform transform hover:scale-105 duration-300 animate-fade-right animate-once animate-duration-1000 animate-delay-[1500ms] animate-ease-linear">
                <div class="mb-4">
                    <!-- Tambahkan gambar di sini -->
                    <img src="public/img/about.jpg" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover">
                </div>
                <a href="{{ route('program.rumles') }}">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        RUMLES
                    </h5>
                </a>
                <a href="{{ route('program.rumles') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">
                    Lihat Program
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 p-6 text-center transition-transform transform hover:scale-105 duration-300 animate-fade-right animate-once animate-duration-1000 animate-delay-[2000ms] animate-ease-linear">
                <div class="mb-4">
                    <!-- Tambahkan gambar di sini -->
                    <img src="public/img/about.jpg" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover">
                </div>
                <a href="{{ route('Program.jangwis') }}">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        JANGWIS
                    </h5>
                </a>
                <a href="{{ route('Program.jangwis') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">
                    Lihat Program
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Programs Section End -->

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
