@extends('admin.layout')

@section('title', 'Manage Berita')

@section('content')
<!-- Breadcrumbs Start -->
<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse mb-2">
        <li class="inline-flex items-center">
            <a href="/admin/berita"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                Home
            </a>
        </li>
        {{-- <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <a href="#"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Users</a>
            </div>
        </li> --}}
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Berita</span>
            </div>
        </li>
    </ol>
</nav>
<!-- Breadcrumbs End -->
@if (session('success'))
<div id="floating-alert" class="fixed bottom-0 right-0 z-50 mr-4">
    <div class="alert alert-success">
        <div id="alert-1"
            class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg dark:bg-gray-700 dark:text-green-400 border border-green-800">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            {{ session('success') }}
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-transparent dark:text-green-400 dark:hover:bg-gray-600"
                data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var floatingAlert = document.getElementById("floating-alert");
        var alert1 = document.getElementById("alert-1");

        alert1.addEventListener("click", function() {
            floatingAlert.style.display = "none";
        });
    });
</script>
@endif
<h1 class="text-2xl font-bold mb-4 text-gray-700 dark:text-gray-400">Berita</h1>
<div class="mb-6 mt-2">
    <a href="{{ route('admin.berita.create') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
        New Berita</a>
</div>

<table
    class="text-gray-500 text-sm rounded-lg focus:ring-blue-500 dark:bg-transparent dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 w-full p-2.5 mt-3">
    <thead>
        <tr>
            <th
                class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                No</th>
            <th
                class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                Judul</th>
            <th
                class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                Isi Berita</th>
            <th
                class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                Program</th>
            <th
                class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                Slug</th>
            <th
                class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                Gambar</th>
            <th
                class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($beritas as $index => $berita)
        <tr class="dark:hover:bg-gray-700 hover:bg-gray-100">
            <td
                class="py-6 px-4 mb-2 text-center border-b dark:border-gray-600 border-gray-300 bg-transparent dark:text-gray-400 text-gray-700">
                {{ $index + 1 }}
            </td>
            <td
                class="py-6 px-4 mb-2 text-center border-b dark:border-gray-600 border-gray-300 bg-transparent dark:text-gray-400 text-gray-700">
                {{ $berita->judul }}
            </td>
            <td
                class="py-6 px-4 mb-2 text-center border-b dark:border-gray-600 border-gray-300 bg-transparent dark:text-gray-400 text-gray-700">
                {!! Str::limit($berita->isi_berita, 50) !!}
            </td> <!-- Limit content preview -->
            <td
                class="py-6 px-4 mb-2 text-center border-b dark:border-gray-600 border-gray-300 bg-transparent dark:text-gray-400 text-gray-700">
                {{ $berita->program->nama }}
            </td> <!-- Assuming program relation is loaded -->
            <td
                class="py-6 px-4 mb-2 text-center border-b dark:border-gray-600 border-gray-300 bg-transparent dark:text-gray-400 text-gray-700">
                {{ $berita->slug }}
            </td>
            <td
                class="py-2 px-4 mb-2 text-center border-b dark:border-gray-600 border-gray-300 bg-transparent dark:text-gray-400 text-gray-700">
                <div x-data="{ open: false }">
                    <!-- Tombol untuk membuka detail tugas -->
                    <button @click="open = true"
                        class="flex items-center justify-center bg-blue-500 text-white rounded-full w-6 h-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>

                    {{-- Popover untuk detail tugas --}}
                    <div x-show="open" @click.away="open = false"
                        class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
                        <div class="bg-slate-700 p-8 rounded-lg shadow-lg items-left text-left w-148">
                            <!-- Tampilkan catatan tugas -->
                            <p class="mb-4"><strong>Gambar:</strong>
                            </p>
                            @if ($berita->input_gambar)
                            <img src="{{ url('images/' . $berita->input_gambar) }}" alt="Gambar Berita"
                                width="400">
                            @else
                            Tidak ada gambar
                            @endif
                            <!-- Tombol untuk menutup detail tugas -->
                            <button @click="open = false"
                                class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-900 mt-4">Tutup</button>
                        </div>
                    </div>
                </div>
            </td>
            <td
                class="py-2 px-4 mb-2 text-center border-b dark:border-gray-600 border-gray-300 bg-transparent dark:text-gray-400 text-gray-700">
                <a href="{{ route('admin.berita.edit', $berita->id) }}" class="inline-block mr-2 text-blue-500"><svg
                        class="w-6 h-6 inline align-middle" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z" />
                    </svg></a>
                <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST"
                    style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')"
                        class="text-red-500"><svg class="w-6 h-6 inline align-middle" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                        </svg></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<script>
    var showNavigationBtn = document.getElementById('showNavigationBtn');
    var drawer = document.getElementById('drawer-navigation');

    showNavigationBtn.addEventListener('click', function() {
        if (drawer.style.transform === 'translateX(0%)') {
            drawer.style.transform = 'translateX(-100%)';
        } else {
            drawer.style.transform = 'translateX(0%)';
        }
    });

    var exitBtn = document.querySelector('#drawer-navigation button[data-drawer-hide="drawer-navigation"]');
    exitBtn.addEventListener('click', function() {
        drawer.style.transform = 'translateX(-100%)';
    });
</script>