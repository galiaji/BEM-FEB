@extends('layouts.app')

@section('title', 'Semua Berita')

@section('content')
<section class="pt-16">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-4">
        <div class="flex items-end justify-between">
            <div class="text-center lg:text-left">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Daftar Berita</h2>
            </div>
            {{-- Bagian filter button --}}
            <div class="flex items-center justify-end mt-4 space-x-2">
                <button id="allProgramBtn" onclick="filterByProgram('')"
                    class="p-2 bg-gray-300 hover:bg-gray-400 text-black rounded">
                    Semua Program
                </button>
                @foreach ($programs as $program)
                    <button id="programBtn{{ $program->id }}" onclick="filterByProgram('{{ $program->id }}')"
                        class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                        {{ $program->nama }}
                    </button>
                @endforeach
            </div>
            {{-- End Bagian filter button --}}
        </div>

        {{-- Grid 3x3 untuk berita --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @foreach ($beritas as $berita)
            <div class="bg-white rounded shadow">
                <a href="{{ route('berita.show', $berita->slug) }}" class="block">
                    <div class="relative">
                        @if ($berita->input_gambar)
                        <img class="object-cover w-full h-64" src="{{ url('images/' . $berita->input_gambar) }}"
                            alt="{{ $berita->judul }}" />
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-30">
                        </div>
                    </div>
                    <div class="p-5">
                        <p class="mt-5 text-2xl font-semibold text-gray-900">
                            {{ Str::limit($berita->judul, 50) }}
                        </p>
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-400 uppercase">
                            {{ $berita->created_at->format('F j, Y') }}
                        </span>
                        <p class="mt-4 text-base text-gray-700">{!! Str::limit($berita->isi_berita, 100) !!}</p>
                        <span class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
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
            @endforeach
        </div>

        {{-- Paginasi --}}
        <div class="mt-8">
            {{ $beritas->links() }}
        </div>
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
<script>
    function filterByProgram(programId) {
        const urlParams = new URLSearchParams(window.location.search);
        if (programId) {
            urlParams.set('program_id', programId);
        } else {
            urlParams.delete('program_id');
        }
        window.location.search = urlParams.toString();
    }

    function setActiveButton() {
        const urlParams = new URLSearchParams(window.location.search);
        const programId = urlParams.get('program_id');

        if (!programId) {
            document.getElementById('allProgramBtn').classList.add('bg-gray-400');
            document.getElementById('allProgramBtn').classList.remove('bg-gray-300');
        } else {
            document.getElementById('programBtn' + programId).classList.add('bg-blue-700');
            document.getElementById('programBtn' + programId).classList.remove('bg-blue-500');
        }
    }

    // Set active button on page load
    window.onload = setActiveButton;
</script>
@endsection