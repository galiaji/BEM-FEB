@extends('layouts.app')

@section('title', 'Semua Berita')

@section('content')
    <section class="pb-16">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-4">
            <div class="text-center lg:text-left">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Daftar Berita</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600 lg:mx-0">Amet minim mollit non
                    deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-3">
                @foreach ($beritas as $berita)
                    <div class="overflow-hidden bg-white rounded shadow">
                        <a href="{{ route('berita.show', $berita->slug) }}" class="block">
                            <div class="relative">
                                @if ($berita->input_gambar)
                                    <img class="object-cover w-full h-64" src="{{ url('images/' . $berita->input_gambar) }}"
                                        alt="{{ $berita->judul }}" />
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-30"></div>
                            </div>
                            <div class="p-5">
                                <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-400 uppercase">
                                    {{ $berita->created_at->format('F j, Y') }}
                                </span>
                                <p class="mt-5 text-2xl font-semibold text-gray-900">
                                    {{ $berita->judul }}
                                </p>
                                <p class="mt-4 text-base text-gray-700">{{ Str::limit($berita->isi_berita, 100) }}</p>
                                <span class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                    Continue Reading
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
