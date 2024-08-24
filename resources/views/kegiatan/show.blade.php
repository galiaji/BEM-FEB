@extends('layouts.app')

@section('title', $kegiatan->judul)

@section('content')
<!-- Kegiatan Details Section Start -->
<section class="kegiatan-details py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold leading-tight text-gray-900 dark:text-white">{{ $kegiatan->nama_kegiatan }}</h2>
        <p class="mt-4 text-lg leading-relaxed text-gray-700 dark:text-gray-300">{{ $kegiatan->deskripsi_kegiatan }}</p>

        <!-- Location Section -->
        <div class="mt-8">
            <!-- <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">Lokasi Kegiatan</h3> -->
            @if(!empty($kegiatan->foto_kegiatan))
            <img src="{{ asset('storage/' . $kegiatan->foto_kegiatan) }}" alt="{{ $kegiatan->nama_kegiatan }}" class="mt-2 max-w-full h-auto">
            @else
            <p class="mt-2 text-lg text-gray-700 dark:text-gray-300">Foto kegiatan tidak tersedia.</p>
            @endif
        </div>

        <!-- Additional Information (Optional) -->
        <!-- Add any other details like date, time, etc. if needed -->
    </div>
</section>
<!-- Kegiatan Details Section End -->
@endsection