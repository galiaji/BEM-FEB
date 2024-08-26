@extends('layouts.app')

@section('title', "UKIR CITA")

@section('content')
<!-- About Section Start -->
<section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">

            <div class="relative lg:mb-12">
                <div class="pl-24 pr-12">
                    <img class="relative rounded-xl" src="img/srawung-wirausaha.png" alt="Ukcit" />
                </div>
            </div>

            <div class="relative 2xl:pl-16">
                <!-- Wrapper for text and circle background -->
                <div class="relative">
                    <img src="img/Vector.png" alt="Background Vector"
                        class="absolute w-[200%] h-[150%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-50 rounded-full mt-20">
                    <h2
                        class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white z-50">
                        About Ukir Cita
                    </h2>
                    <p class="text-lg leading-relaxed text-gray-400 mt-9 z-50">
                        {{ $program->deskripsi }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Related Activities Section Start -->
@if($relatedKegiatan->isNotEmpty())
<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-8 relative inline-block kegiatan-title">Kegiatan Terkait</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($relatedKegiatan as $kegiatan)
            <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                @if(!empty($kegiatan->foto_kegiatan))
                <img src="{{ asset('storage/' . $kegiatan->foto_kegiatan) }}" alt="{{ $kegiatan->nama_kegiatan }}" class="mb-4 w-full h-48 object-cover rounded-lg">
                @else
                <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder Image" class="mb-4 w-full h-48 object-cover rounded-lg">
                @endif
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $kegiatan->nama_kegiatan }}</h5>
                <p class="text-gray-600 text-justify">{{ Str::limit($kegiatan->deskripsi_kegiatan) }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- Related Activities Section End -->

 
<!-- Tempat, Waktu, dan Tanggal Section Start -->
<section class="info-section py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white">Tempat, Waktu, dan Tanggal</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="info-item bg-gray-50 border border-gray-200 rounded-lg p-6 flex">
                <div class="col-3 left mr-4 flex items-center justify-center">
                    <img src="{{ asset('img/logo rucita.png') }}" class="w-full h-auto object-cover rounded-lg">
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Kegiatan</h4>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">Kegiatan Ukir Cita dilaksanakan rutin setiap hari minggu</p>
                </div>
            </div>                       
            <div class="info-item bg-gray-50 border border-gray-200 rounded-lg p-6 flex">
                <div class="col-3 left mr-4 flex items-center justify-center">
                    <img src="{{ asset('img/logo rucita.png') }}" class="w-full h-auto object-cover rounded-lg">
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Tempat</h4>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">Aula MHM Dusun Krajan, Desa Munding</p>
                </div>
            </div>    
            <div class="info-item bg-gray-50 border border-gray-200 rounded-lg p-6 flex">
                <div class="col-3 left mr-4 flex items-center justify-center">
                    <img src="{{ asset('img/logo rucita.png') }}" class="w-full h-auto object-cover rounded-lg">
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Waktu</h4>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">Pukul 10.00 - 12.00</p>
                </div>
            </div>    
        </div>
    </div>
</section>
<!-- Tempat, Waktu, dan Tanggal Section End -->

<!-- Tujuan Kegiatan Section Start -->
<section class="goals-section py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white">Tujuan Kegiatan</h3>
        <div class="mt-8">
            {{-- <div class="flex flex-col md:flex-row items-center mb-8">
                <div class="md:w-1/2 mb-4 md:mb-0">
                    <img src="{{ asset('img/tujuan-1.png') }}" alt="Gambar Tujuan 1" class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 md:pl-6 text-gray-700 dark:text-gray-300">
                    <p class="text-lg leading-relaxed">{{ $program->tujuan }} </p>
                </div>
            </div> --}}
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-4 md:mb-0 md:order-2">
                    <img src="{{ asset('img/tujuan-2.png') }}" alt="Gambar Tujuan 2" class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 md:pr-6 text-gray-700 dark:text-gray-300 md:order-1">
                    <p class="text-lg leading-relaxed">{{ $program->tujuan }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tujuan Kegiatan Section End -->
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
