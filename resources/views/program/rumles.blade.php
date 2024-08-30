@extends('layouts.app')

@section('title', 'RUMAH LESTARI ')

@section('content')

    <!-- About Section Start -->
    <section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:gap-x-12 xl:gap-x-24 gap-y-12">

                <!-- Image Section -->
                <div class="flex-shrink-0 lg:w-1/3 relative lg:mb-12">
                    <img class="w-full h-auto object-cover rounded-xl" src="public/img/RUMLES.png" alt="Ukcit" />
                </div>

                <!-- Text Section -->
                <div class="flex-1 lg:w-2/3 relative">
                    <!-- Wrapper for text and circle background -->
                    <div class="relative">
                        <img src="public/img/Vector.png" alt="Background Vector"
                            class="absolute w-[150%] h-[100%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-50 rounded-full mt-20">

                        <!-- Heading -->
                        <h2
                            class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl z-50 animate-fade-up animate-delay-[100ms]">
                            About <mark class="px-2 text-white bg-violet-400 rounded">RUMAH LESTARI</mark>
                        </h2>

                        <!-- Description -->
                        <p class="text-lg leading-relaxed text-gray-900 mt-9 z-50 animate-fade-right animate-delay-[500ms]">
                            {!! $program->deskripsi !!}
                        </p>
                    </div>

                    <!-- Additional Image -->
                    <img src="{{ asset('public/images/' . $program->gambar) }}" alt="{{ $program->gambar }}"
                        class="w-full h-48 object-cover rounded-lg mt-6">
                </div>

            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Tujuan Kegiatan Section Start -->
    <section class="goals-section py-10 bg-gray-100 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h3 class="text-3xl font-bold leading-tight text-gray-900">Tujuan Kegiatan</h3>
            <div class="mt-4 relative"> <!-- Mengurangi jarak margin top di sini -->
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-4 md:mb-0 md:order-2">
                        <img src="{{ asset('public/img/tujuan-2.png') }}" alt="Gambar Tujuan 2" class="w-full h-auto rounded-lg">
                    </div>
                    <div class="md:w-1/2 md:pr-6 text-black md:order-1">
                        <p class="text-lg leading-relaxed">{!! $program->tujuan !!}</p>
                        <!-- Mengurangi margin top di sini -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tujuan Kegiatan Section End -->

@if ($relatedKegiatan->isNotEmpty())
<section class="py-12 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-6 mx-auto max-w-7xl sm:px-8 lg:px-10">
        <h3 class="text-4xl font-extrabold leading-tight text-gray-900 mb-12 text-center">
            Kegiatan Terkait
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php $number = 1; @endphp
            @foreach ($relatedKegiatan as $kegiatan)
            @if ($kegiatan->program->nama == 'RUMLES')
            <div
                class="relative bg-white border border-gray-300 rounded-xl shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:bg-gray-100 shadow-2xl">
                <!-- Numbering -->
                <div
                    class="absolute top-4 left-4 bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold shadow-md">
                    {{ $number }}
                </div>

                                <div class="w-full h-60">
                                    <img src="{{ asset('public//storage/images/' . $kegiatan->foto_kegiatan) }}"
                                        alt="{{ $kegiatan->nama_kegiatan }} - {{ $kegiatan->deskripsi_kegiatan }}"
                                        class="w-full h-full object-cover rounded-t-xl border-b border-gray-200">
                                </div>
                                <div class="p-6">
                                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 mb-4">
                                        {{ $kegiatan->nama_kegiatan }}
                                    </h5>
                                    <p class="text-gray-800 text-justify leading-relaxed">
                                        {!! $kegiatan->deskripsi_kegiatan !!}
                                    </p>
                                </div>
                            </div>
                            @php $number++; @endphp
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Sasaran Kegiatan Section Start -->

    <!-- Sasaran Kegiatan Section End -->

    <!-- News Section Start -->
    <section class="news bg-gray-50">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 mb-16">
            <div class="text-center mt-12">
                <h2
                    class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl font-pj animate-fade-up animate-delay-[200ms]">
                    Berita Terkait
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
                        @if ($berita->program->nama == 'RUMLES')
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
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <!-- News Section End -->

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
