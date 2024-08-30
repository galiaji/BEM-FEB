@extends('layouts.app')

@section('title', 'Semua Program')

@section('content')
    <!-- Program Section Start -->
    <section class="programs">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl font-pj animate-fade-up animate-delay-[200ms]">
                    Program
                </h2>
            </div>
            <div class="mt-8 animate-fade-right animate-once animate-duration-1000 animate-delay-[300ms] animate-ease-linear">
                <!-- Baris Pertama: 3 Program -->
                <div class="flex justify-center space-x-6">
                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src="public/img/JAWIR 1.png" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('Program.jangwis') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">JAWIR</h5>
                            </a>
                            <a href="{{ route('program.jawir') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat Program
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src="public/img/Ukcit 1.png" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('program.ukcit') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">UKCIT</h5>
                            </a>
                            <a href="{{ route('program.ukcit') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat Program
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src="public/img/Adbud 1.png" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('Program.adbud') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">ADBUD</h5>
                            </a>
                            <a href="{{ route('Program.adbud') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat Program
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Baris Kedua: 2 Program -->
                <div class="flex justify-center space-x-6 mt-6">
                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src="public/img/Rumles 1.png" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('program.rumles') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">RUMLES</h5>
                            </a>
                            <a href="{{ route('program.rumles') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat Program
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src="public/img/Jangwis 1.png" alt="Deskripsi Gambar" class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('Program.jangwis') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">JANGWIS</h5>
                            </a>
                            <a href="{{ route('Program.jangwis') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat Program
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Program Section End -->

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
