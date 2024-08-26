@extends('layouts.app')

@section('title', "ANJANGSANA WISATA ")

@section('content')
<!-- Program Details Section Start -->
<section class="program-details py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold leading-tight text-gray-900 dark:text-white">ANJANGSANA WISATA (Program pengembangan dan pengelolaan Wisata di Desa Munding) </h2>
        <p class="mt-4 text-lg leading-relaxed text-gray-700 dark:text-gray-300">Program pembinaan kader Kelompok Sadar Wisata Desa Munding terkait peningkatan manajemen organisasi dan digitalisasi wisata untuk menuju visi desa wisata Desa Munding.</p>
    </div>
</section>
<!-- Program Details Section End -->

<!-- Related Activities Section Start -->
@if($relatedKegiatan->isNotEmpty())
<section class="related-kegiatan py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white">Kegiatan Terkait</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @foreach($relatedKegiatan as $kegiatan)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                @if(!empty($kegiatan->foto_kegiatan))
                <img src="{{ asset('storage/' . $kegiatan->foto_kegiatan) }}" alt="{{ $kegiatan->nama_kegiatan }}" class="mb-4 w-full h-48 object-cover rounded-lg">
                @else
                <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder Image" class="mb-4 w-full h-48 object-cover rounded-lg">
                @endif
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $kegiatan->nama_kegiatan }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">{{ Str::limit($kegiatan->deskripsi, 100, '...') }}</p>
                <a href="{{ route('acara.show', $kegiatan->slug) }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Lihat Kegiatan
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Related Activities Section End -->

<!-- Related News Section Start -->
@if($relatedNews->isNotEmpty())







<section class="related-news py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white">Berita Terkait</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @foreach($relatedNews as $news)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                @if(!empty($news->input_gambar))
                ahsvbhbadnidjnvffejnuieahfb
                <img src="{{ asset('images/' . $news->input_gambar) }}" alt="{{ $news->judul }}" class="mb-4 w-full h-48 object-cover rounded-lg">
                @else
                <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder Image" class="mb-4 w-full h-48 object-cover rounded-lg">
                @endif
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $news->judul }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">{{ Str::limit($news->isi_berita, 100, '...') }}</p>
                <a href="{{ route('berita.show', $news->slug) }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Baca Berita
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Related News Section End -->
@endsection