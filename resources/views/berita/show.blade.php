@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<section class="program-details py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">{{ $berita->judul }}</h2>
        <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-300 mb-8">{{ $berita->isi_berita }}</p>
        @if(!empty($berita->input_gambar))
        <img src="{{ asset('images/' . $berita->input_gambar) }}" alt="{{ $berita->judul }}" class="w-full h-auto rounded-lg shadow-lg">
        @else
        <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder Image" class="w-full h-auto rounded-lg shadow-lg">
        @endif
        <!-- Add other program details here -->
    </div>
</section>
@endsection