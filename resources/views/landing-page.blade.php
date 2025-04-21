@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')

    <!-- Hero Section Start -->
    <div class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('/img/bg-landing.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <section class="relative py-20 sm:py-32 lg:py-40 text-white text-center">
            <div class="max-w-screen-xl mx-auto px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div class="text-left">
                        <h1 class="text-4xl font-bold sm:text-5xl lg:text-6xl animate-fade-up">
                            Aplikasi Berbasis Website untuk <span class="text-violet-400">Mencegah Pola Makan Buruk</span>
                            pada Remaja.
                        </h1>
                        <p class="mt-6 text-lg animate-fade-right">
                            Solusi inovatif dalam meningkatkan kesadaran gizi dan kebiasaan makan sehat.
                        </p>
                        <div class="mt-8 sm:flex sm:space-x-4">
                            <button onclick="window.location.href='/programs'"
                                class="bg-violet-500 hover:bg-violet-600 text-white font-medium rounded-lg px-6 py-3 transition-transform transform hover:scale-105 duration-200">
                                Lihat Program
                            </button>
                            <button onclick="window.location.href='/contact'"
                                class="bg-white text-violet-500 hover:bg-gray-200 font-medium rounded-lg px-6 py-3 transition-transform transform hover:scale-105 duration-200">
                                Hubungi Kami
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img class="w-full max-w-md rounded-lg shadow-lg transition-transform transform hover:scale-105 duration-300"
                            src="#" alt="Hero Image">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="About" class="py-10 sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 lg:grid-cols-5 gap-x-12 xl:gap-x-24 gap-y-12">
                <div class="relative lg:mb-12 lg:col-span-2 animate-fade-right animate-delay-[200ms]">
                    <img class="absolute -right-0 -bottom-4 xl:-bottom-8 xl:-right-4"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg"
                        alt="Dots Pattern" />
                    <div class="pl-12 pr-12">
                        <img class="relative rounded-xl transition-transform transform hover:scale-105 duration-300"
                            src="#" alt="About Image" />
                    </div>
                </div>
                <div class="2xl:pl-16 lg:col-span-3 animate-fade-right animate-delay-[400ms]">
                    <h2
                        class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl">
                        Latar <mark class="px-2 text-white bg-violet-400 rounded">Belakang</mark>
                    </h2>
                    <p class="text-lg leading-relaxed text-black-400 mt-9 text-justify">
                        Pola makan yang buruk di kalangan remaja, khususnya pelajar SMA di Semarang, telah menjadi perhatian
                        serius dalam beberapa tahun terakhir.
                        Penelitian menunjukkan bahwa banyak remaja mengalami masalah terkait kebiasaan makan yang tidak
                        sehat, yang dapat berdampak negatif pada kesehatan mereka.
                    </p>
                    <p class="mt-6 text-lg leading-relaxed text-black-400 text-justify">
                        Faktor-faktor yang mempengaruhi pola makan buruk di kalangan remaja termasuk kurangnya pengetahuan
                        tentang gizi, tekanan akademis, dan kebiasaan sosial.
                        Penelitian lain menunjukkan bahwa 68,8% mahasiswa di Universitas Negeri Semarang memiliki kebiasaan
                        makan yang tidak teratur, dengan alasan seperti malas makan dan jadwal kuliah yang padat.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Program Section Start -->
    <section class="programs">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                <h2
                    class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl font-pj animate-fade-up animate-delay-[200ms]">
                    Program
                </h2>
            </div>
            <div
                class="mt-8 animate-fade-right animate-once animate-duration-1000 animate-delay-[300ms] animate-ease-linear">
                <!-- Baris Pertama: 3 Program -->
                <div class="flex justify-center space-x-6">
                    <div
                        class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src=" /img/JAWIR 1.png" alt="Deskripsi Gambar"
                                class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('Program.jangwis') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">Program 1</h5>
                            </a>
                            <a href="{{ route('program.jawir') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat
                                Program
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div
                        class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src=" /img/Ukcit 1.png" alt="Deskripsi Gambar"
                                class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('program.ukcit') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">Program 2</h5>
                            </a>
                            <a href="{{ route('program.ukcit') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat
                                Program
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div
                        class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src=" /img/Adbud 1.png" alt="Deskripsi Gambar"
                                class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('Program.adbud') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Program 3</h5>
                            </a>
                            <a href="{{ route('Program.adbud') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat
                                Program
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Baris Kedua: 2 Program -->
                <div class="flex justify-center space-x-6 mt-6">
                    <div
                        class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src=" /img/Rumles 1.png" alt="Deskripsi Gambar"
                                class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('program.rumles') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Program 4</h5>
                            </a>
                            <a href="{{ route('program.rumles') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat
                                Program
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div
                        class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow p-5 text-center transition-transform transform hover:scale-105 duration-300 hover:bg-gray-100 hover:drop-shadow-xl">
                        <div class="mt-2">
                            <img src=" /img/Jangwis 1.png" alt="Deskripsi Gambar"
                                class="w-24 h-24 mx-auto rounded-full object-cover transition-transform transform hover:scale-105 duration-300">
                            <a href="{{ route('Program.jangwis') }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Program 5</h5>
                            </a>
                            <a href="{{ route('Program.jangwis') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">Lihat
                                Program
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
        </div>
    </section>
    <!-- Program Section End -->

    <!-- Cek BMI Section Start -->
    <div class="relative bg-cover bg-center bg-no-repeat py-40 mt-24" style="background-image: url('/img/IMT.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <section class="relative max-w-screen-xl mx-auto px-6 lg:px-8 text-center text-white">
            <h2 class="text-4xl font-bold sm:text-5xl lg:text-6xl">Cek BMI Anda</h2>
            <p class="mt-4 text-lg max-w-2xl mx-auto">
                Ketahui status kesehatan tubuh Anda dengan menghitung Indeks Massa Tubuh (BMI).
                BMI adalah ukuran standar yang membantu menentukan apakah berat badan Anda ideal, kurang, atau berlebih.
            </p>
            <div class="mt-8">
                <button onclick="window.location.href='/bmi'"
                    class="bg-gray-800 hover:bg-gray-900 text-white font-medium rounded-lg px-6 py-3 transition-transform transform hover:scale-105 duration-200">
                    Cek BMI Sekarang
                </button>
            </div>
        </section>
    </div>
    <!-- Cek BMI Section End -->

    <!-- Meet Our team leader Start -->
    <section class="pt-10 overflow-hidden bg-gray-50 md:pt-0 sm:pt-16 2xl:pt-16">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid items-center grid-cols-1 md:grid-cols-2">
                <div>
                    <h1 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl mb-4">Profil Pengembang
                    </h1>
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Hey 👋 I am <br
                            class="block sm:hidden" />Jenny Carter</h2>
                    <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-600 md:mt-8">Amet minim mollit non deserunt
                        ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                        Exercitation veniam consequat sunt nostrud amet.</p>

                    <p class="mt-4 text-xl text-gray-600 md:mt-8">
                        <span class="relative inline-block">
                            <span class="absolute inline-block w-full bottom-0.5 h-2 bg-yellow-300"></span>
                            <span class="relative"> Have a question? </span>
                        </span>
                        <br class="block sm:hidden" />Ask me on <a href="#" title=""
                            class="transition-all duration-200 text-sky-500 hover:text-sky-600 hover:underline">Twitter</a>
                    </p>
                </div>

                <div class="relative">
                    <img class="absolute inset-x-0 bottom-0 -mb-48 -translate-x-1/2 left-1/2"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/blob-shape.svg"
                        alt="" />

                    <img class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/business-woman.png"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Meet Our team leader End -->

    <!-- Our Team Start -->
    {{-- <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Meet Our Team</h2>
                <p class="max-w-md mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt
                    ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>

            <div class="grid grid-cols-2 mt-8 text-center sm:mt-16 lg:mt-20 sm:grid-cols-4 gap-y-8 lg:grid-cols-9 gap-x-0">
                <div>
                    <img class="object-cover mx-auto rounded-lg w-28 h-28"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/3/team-avatar-1.jpg"
                        alt="" />
                    <p class="mt-8 text-lg font-semibold leading-tight text-black">Jenny Wilson</p>
                    <p class="mt-1 text-base leading-tight text-gray-600">Founder</p>
                </div>

                <div class="hidden lg:block"></div>

                <div>
                    <img class="object-cover mx-auto rounded-lg w-28 h-28"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/3/team-avatar-2.jpg"
                        alt="" />
                    <p class="mt-8 text-lg font-semibold leading-tight text-black">Darrell Steward</p>
                    <p class="mt-1 text-base leading-tight text-gray-600">CTO</p>
                </div>

                <div class="hidden lg:block"></div>

                <div>
                    <img class="object-cover mx-auto rounded-lg w-28 h-28"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/3/team-avatar-3.jpg"
                        alt="" />
                    <p class="mt-8 text-lg font-semibold leading-tight text-black">Bessie Cooper</p>
                    <p class="mt-1 text-base leading-tight text-gray-600">CMO</p>
                </div>

                <div class="hidden lg:block"></div>

                <div>
                    <img class="object-cover mx-auto rounded-lg w-28 h-28"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/3/team-avatar-4.jpg"
                        alt="" />
                    <p class="mt-8 text-lg font-semibold leading-tight text-black">Arlene McCoy</p>
                    <p class="mt-1 text-base leading-tight text-gray-600">Senior Developer</p>
                </div>

                <div class="hidden lg:block"></div>

                <div>
                    <img class="object-cover mx-auto rounded-lg w-28 h-28"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/3/team-avatar-5.jpg"
                        alt="" />
                    <p class="mt-8 text-lg font-semibold leading-tight text-black">Brooklyn Simmons</p>
                    <p class="mt-1 text-base leading-tight text-gray-600">Product Designer</p>
                </div>

                <div class="hidden lg:block"></div>

                <div>
                    <img class="object-cover mx-auto rounded-lg w-28 h-28"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/3/team-avatar-6.jpg"
                        alt="" />
                    <p class="mt-8 text-lg font-semibold leading-tight text-black">Jerome Bell</p>
                    <p class="mt-1 text-base leading-tight text-gray-600">Customer Success</p>
                </div>

                <div class="hidden lg:block"></div>

                <div>
                    <img class="object-cover mx-auto rounded-lg w-28 h-28"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/3/team-avatar-7.jpg"
                        alt="" />
                    <p class="mt-8 text-lg font-semibold leading-tight text-black">Dianne Russell</p>
                    <p class="mt-1 text-base leading-tight text-gray-600">Front-end Developer</p>
                </div>

                <div class="hidden lg:block"></div>

                <div>
                    <img class="object-cover mx-auto rounded-lg w-28 h-28"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/3/team-avatar-8.jpg"
                        alt="" />
                    <p class="mt-8 text-lg font-semibold leading-tight text-black">Kristin Watson</p>
                    <p class="mt-1 text-base leading-tight text-gray-600">H.R</p>
                </div>

                <div class="hidden lg:block"></div>

                <div>
                    <img class="object-cover mx-auto rounded-lg w-28 h-28"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/3/team-avatar-9.jpg"
                        alt="" />
                    <p class="mt-8 text-lg font-semibold leading-tight text-black">Eleanor Pena</p>
                    <p class="mt-1 text-base leading-tight text-gray-600">UI Designer</p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Our Team End -->


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
                                    src="{{ asset(' /images/' . $berita->input_gambar) }}" alt="{{ $berita->judul }}" />
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
