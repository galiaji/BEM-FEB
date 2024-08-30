@extends('layouts.app')

@section('title', 'Semua Berita')

@section('content')
    <section class="pt-16">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-4">
            <div class="flex items-end justify-between">
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Daftar Berita</h2>
                </div>
            </div>

            {{-- Search Bar and Filter Buttons --}}
            <div class="flex flex-col lg:flex-row items-center justify-between mt-4 space-y-4 lg:space-y-0 lg:space-x-4">
                <!-- Search Bar and Button -->
                <div class="w-full lg:w-1/2 flex relative">
                    <input type="text" id="searchInput" placeholder="Cari berita..."
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    <button onclick="filterNews()"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ml-2">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </button>
                </div>

                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <button id="allProgramBtn" onclick="filterByProgram('')" class="px-4 py-1 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                        Semua Program
                    </button>
                    @foreach ($programs as $program)
                        <button id="programBtn{{ $program->id }}" onclick="filterByProgram('{{ $program->id }}')" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                            {{ $program->nama }}
                        </button>
                    @endforeach
                </div>
                

                {{-- End Bagian filter button --}}
            </div>

            {{-- Grid 3x3 untuk berita --}}
            <div id="newsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                @foreach ($beritas as $index => $berita)
                    <div class="bg-white rounded shadow berita-item transition-transform transform hover:scale-105 hover:bg-gray-100 hover:drop-shadow-xl duration-300"
                        data-title="{{ strtolower($berita->judul) }}">
                        <a href="{{ route('berita.show', $berita->slug) }}" class="block p-4">
                            <div class="relative">
                                @if ($berita->input_gambar)
                                    <img class="object-cover w-full h-64 rounded-lg"
                                        src="{{ url('public/images/' . $berita->input_gambar) }}"
                                        alt="{{ $berita->judul }}" />
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-30"></div>
                            </div>
                            <div class="">
                                <p class="mt-5 text-2xl font-semibold text-gray-900">
                                    {{ Str::limit($berita->judul, 50) }}
                                </p>
                                <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-400 uppercase">
                                    {{ $berita->created_at->format('F j, Y') }}
                                </span>
                                <p class="mt-4 text-base text-gray-700">{!! Str::limit($berita->isi_berita, 100) !!}</p>
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
                @endforeach
            </div>


            {{-- Paginasi --}}
            <div class="mt-8 mb-4">
                {{ $beritas->links() }}
            </div>
        </div>
    </section>

    <script>
        function filterByProgram(programId) {
            // Update URL parameters
            const urlParams = new URLSearchParams(window.location.search);
            if (programId) {
                urlParams.set('program_id', programId);
            } else {
                urlParams.delete('program_id');
            }
            window.location.search = urlParams.toString();

            // Update button styles
            document.querySelectorAll('.inline-flex button').forEach(button => {
                button.classList.remove('bg-gray-300', 'text-blue-700', 'border-blue-700');
                button.classList.add('bg-white', 'text-gray-900', 'border-gray-200');
            });

            // Add 'active' styles to the clicked button
            if (programId) {
                const activeButton = document.getElementById('programBtn' + programId);
                activeButton.classList.add('bg-gray-200', 'text-blue-700', 'border-blue-700');
                activeButton.classList.remove('bg-white', 'text-gray-900', 'border-gray-200');
            } else {
                const activeButton = document.getElementById('allProgramBtn');
                activeButton.classList.add('bg-gray-200', 'text-blue-700', 'border-blue-700');
                activeButton.classList.remove('bg-white', 'text-gray-900', 'border-gray-200');
            }
        }

        // Automatically set the active button on page load based on URL params
        window.addEventListener('DOMContentLoaded', (event) => {
            const urlParams = new URLSearchParams(window.location.search);
            const programId = urlParams.get('program_id');
            if (programId) {
                document.getElementById('programBtn' + programId).classList.add('bg-gray-200', 'text-blue-700', 'border-blue-700');
            } else {
                document.getElementById('allProgramBtn').classList.add('bg-gray-200', 'text-blue-700', 'border-blue-700');
            }
        });

        function filterNews() {
            const searchInput = document.getElementById('searchInput').value;
            const urlParams = new URLSearchParams(window.location.search);
            if (searchInput) {
                urlParams.set('search', searchInput);
            } else {
                urlParams.delete('search');
            }
            window.location.search = urlParams.toString(); // Redirect to updated URL
        }

        // Filter by Program Functionality
        // function filterByProgram(programId) {
        //     const urlParams = new URLSearchParams(window.location.search);
        //     if (programId) {
        //         urlParams.set('program_id', programId);
        //     } else {
        //         urlParams.delete('program_id');
        //     }
        //     window.location.search = urlParams.toString();
        // }

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

        // Add event listener for Enter key on search input
        document.getElementById('searchInput').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Prevent default form submission
                filterNews(); // Call the search function
            }
        });
    </script>
@endsection
