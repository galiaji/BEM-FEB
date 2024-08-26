@extends('layouts.app')

@section('title', 'Semua Berita')

@section('content')
<section class="pt-16">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-4">
        <div class="flex items-end justify-between">
            <div class="text-center lg:text-left">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Daftar Berita</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600 lg:mx-0">Amet minim mollit non
                    deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>

            {{-- bagian filter drop down --}}
            <div class="flex items-center justify-end mt-4">
                <select id="programFilter" class="w-full lg:w-1/3 p-2 border border-gray-300 rounded">
                    <option value="">Semua Program</option>
                    @foreach($programs as $program)
                        <option value="{{ $program->id }}" {{ request('program_id') == $program->id ? 'selected' : '' }}>
                            {{ $program->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            {{-- end section bagian filter drop down --}}
            
            <div class="hidden lg:flex lg:items-center lg:space-x-3">
                <button id="prevBtn" type="button"
                    class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button id="nextBtn" type="button"
                    class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>


        <div class="relative">
            <div id="carousel"
                class="flex overflow-x-auto max-w-md mx-auto mt-8 lg:mt-16 lg:max-w-full scroll-smooth pb-6">
                @foreach ($beritas as $berita)
                <div class="flex-none w-full lg:w-1/3 px-4 mb-6">
                    <div class="overflow-hidden bg-white rounded shadow">
                        <a href="{{ route('berita.show', $berita->slug) }}" class="block">
                            <div class="relative">
                                @if ($berita->input_gambar)
                                <img class="object-cover w-full h-64"
                                    src="{{ url('images/' . $berita->input_gambar) }}"
                                    alt="{{ $berita->judul }}" />
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-30">
                                </div>
                            </div>
                            <div class="p-5">
                                <p class="mt-5 text-2xl font-semibold text-gray-900">
                                    {{ Str::limit($berita->judul, 50) }}
                                </p>
                                <span
                                    class="block mt-6 text-sm font-semibold tracking-widest text-gray-400 uppercase">
                                    {{ $berita->created_at->format('F j, Y') }}
                                </span>
                                <p class="mt-4 text-base text-gray-700">{{ Str::limit($berita->isi_berita, 100) }}
                                </p>
                                <span
                                    class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                    Lanjut Membaca
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
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center mt-8 space-x-3 lg:hidden">
        <button id="prevBtnMobile" type="button"
            class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button id="nextBtnMobile" type="button"
            class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

</section>
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

<script>
    const programFilter = document.getElementById('programFilter');

    programFilter.addEventListener('change', function() {
        const selectedProgram = this.value;
        const url = new URL(window.location.href);
        if (selectedProgram) {
            url.searchParams.set('program_id', selectedProgram);
        } else {
            url.searchParams.delete('program_id');
        }
        window.location.href = url.toString();
    });
</script>
@endsection