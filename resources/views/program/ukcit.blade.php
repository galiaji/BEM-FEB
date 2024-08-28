@extends('layouts.app')

@section('title', "UKIR CITA")

@section('content')
<!-- About Section Start -->
<section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">

            <div class="relative lg:mb-12">
                <div class="pl-24 pr-12">
                    <img class="relative rounded-xl" src="public/img/srawung-wirausaha.png" alt="Ukcit" />
                </div>
            </div>

            <div class="relative 2xl:pl-16">
                <!-- Wrapper for text and circle background -->
                <div class="relative">
                    <img src="public/img/Vector.png" alt="Background Vector"
                        class="absolute w-[200%] h-[150%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-50 rounded-full mt-20">
                    <h2
                        class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white z-50">
                        About Ukir Cita
                    </h2>
                    <p class="text-lg leading-relaxed text-gray-400 mt-9 z-50">
                        {!! $program->deskripsi !!}
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Section End -->

@if($relatedKegiatan->isNotEmpty())
<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-8 relative inline-block kegiatan-title">Kegiatan Terkait</h3>
        <div class="space-y-8">
            @foreach($relatedKegiatan as $index => $kegiatan)
            @if($kegiatan->program->nama == "UKCIT")
            @php
            $isImageLeft = $index % 2 == 0;
            @endphp
            <div class="relative flex flex-col md:flex-row {{ $isImageLeft ? 'md:flex-row' : 'md:flex-row-reverse' }} bg-white rounded-lg shadow-md p-6" style="background-color:rgb(255, 234, 197)">
                <!-- Numbering -->
                <div class="absolute top-2 {{ $isImageLeft ? 'left-2' : 'right-2' }} bg-gray-900 text-white rounded-full w-8 h-8 flex items-center justify-center text-lg font-bold">
                    {{ $index + 1 }}
                </div>

                <div class="md:w-1/2 {{ $isImageLeft ? 'mb-4 md:mb-0' : 'md:mb-0' }}">
                    <img src="{{ asset('public/images/' . $kegiatan->foto_kegiatan) }}" alt="{{ $kegiatan->nama_kegiatan }}" class="w-full h-48 object-cover rounded-lg">
                </div>
                <div class="md:w-1/2 {{ $isImageLeft ? 'md:pl-6' : 'md:pr-6' }}">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-2">{{ $kegiatan->nama_kegiatan }}</h5>
                    <p class="text-gray-600 text-justify">{!! Str::limit($kegiatan->deskripsi_kegiatan, 150) !!}</p>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endif






<!-- Tempat, Waktu, dan Tanggal Section Start -->
<section class="info-section py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white">Tempat, Waktu, dan Tanggal</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="info-item bg-gray-50 border border-gray-200 rounded-lg p-6 flex">
                <div class="col-3 left mr-4 flex items-center justify-center">
                    <img src="{{ asset('public/img/logo rucita.png') }}" class="w-full h-auto object-cover rounded-lg">
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Kegiatan</h4>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">Kegiatan Ukir Cita dilaksanakan rutin setiap hari minggu</p>
                </div>
            </div>
            <div class="info-item bg-gray-50 border border-gray-200 rounded-lg p-6 flex">
                <div class="col-3 left mr-4 flex items-center justify-center">
                    <img src="{{ asset('public/img/logo rucita.png') }}" class="w-full h-auto object-cover rounded-lg">
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Tempat</h4>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">Aula MHM Dusun Krajan, Desa Munding</p>
                </div>
            </div>
            <div class="info-item bg-gray-50 border border-gray-200 rounded-lg p-6 flex">
                <div class="col-3 left mr-4 flex items-center justify-center">
                    <img src="{{ asset('public/img/logo rucita.png') }}" class="w-full h-auto object-cover rounded-lg">
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
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <!-- Heading for Tujuan Kegiatan -->
                <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-4">
                    Tujuan Kegiatan
                </h3>

                <!-- Content for Tujuan -->
                <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-300">
                    {{ $program->tujuan }}
                </p>
            </div>
            <div class="md:w-1/2 mb-4 md:mb-0 md:pr-6">
                <img src="{{ asset('public/img/tujuan-2.png') }}" alt="Gambar Tujuan 2" class="w-full h-auto rounded-lg shadow-lg">
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

        <!-- Related News Section Start -->
        @if ($relatedNews->isNotEmpty())
        <section class="related-news py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    @foreach ($relatedNews as $news)
                    @if ($news->program->nama == "UKCIT")
                    <div
                        class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                        <img src="{{ asset('public/images/' . $news->input_gambar) }}" alt="{{ $news->judul }}"
                            class="mb-4 w-full h-48 object-cover rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $news->judul }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                            {!! Str::limit($news->isi_berita, 100, '...') !!}</p>
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
    </div>
</section>
<!-- News Section End -->
@endsection