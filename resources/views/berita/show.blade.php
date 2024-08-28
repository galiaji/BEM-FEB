@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
    <section class="program-details py-10 bg-gray-100 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row">
                <!-- Main Content -->
                <div class="lg:w-3/4">
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">{{ $berita->judul }}</h2>
                    <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-400 uppercase">
                        {{ $berita->created_at->format('F j, Y') }}
                    </span>
                    @if (!empty($berita->input_gambar))
                        <div class="relative w-full h-[300px] overflow-hidden rounded-lg shadow-lg mb-6">
                            <img src="{{ asset('images/' . $berita->input_gambar) }}" alt="{{ $berita->judul }}"
                                class="absolute inset-0 w-full h-full object-contain">
                        </div>
                    @else
                        <div class="relative w-full h-[300px] overflow-hidden rounded-lg shadow-lg mb-6">
                            <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder Image"
                                class="absolute inset-0 w-full h-full object-contain">
                        </div>
                    @endif
                    <p class="text-lg leading-relaxed text-gray-700 mb-8 text-justify">
                        {{ $berita->isi_berita }}
                </div>
                <!-- Sidebar or Additional Content -->
                <div class="lg:w-1/4 lg:pl-8">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Berita Lainnya</h3>
                    @if ($beritas->isEmpty())
                        <p class="text-lg text-gray-700">Belum ada berita</p>
                    @else
                        <div class="space-y-6">
                            @foreach ($beritas as $beritaItem)
                                <a href="{{ route('berita.show', $beritaItem->slug) }}"
                                    class="block bg-white border border-gray-200 rounded-lg shadow overflow-hidden hover:bg-gray-100 transition-colors duration-300 transition-transform transform hover:scale-105 hover:drop-shadow-xl duration-300">
                                    <div class="relative w-full h-40 overflow-hidden rounded-md">
                                        <img class="absolute inset-0 w-full h-full object-contain"
                                            src="{{ asset('images/' . $beritaItem->input_gambar) }}"
                                            alt="{{ $beritaItem->judul }}" />
                                    </div>
                                    <div class="p-4">
                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">
                                            {{ $beritaItem->judul }}</h5>
                                        <p class="font-normal text-gray-700 mb-4">
                                            {{ $beritaItem->created_at->format('d M Y') }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
