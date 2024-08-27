@extends('admin.layout')

@section('title', 'Add New Program')

@section('content')
<!-- Breadcrumbs Start -->
<nav class="flex" aria-label="Breadcrumb">
    <!-- Breadcrumbs content -->
</nav>
<!-- Breadcrumbs End -->

<h1 class="text-2xl font-bold mb-4 text-gray-700 dark:text-gray-400">Tambah Program</h1>

<div class="container">
    <form action="{{ route('admin.program.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Program</label>
            <input type="text" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2"
                required>
            @error('nama')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Program</label>
            <textarea name="deskripsi" id="deskripsi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2"
                ></textarea>
            @error('deskripsi')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="tujuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tujuan</label>
            <textarea name="tujuan" id="tujuan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2"></textarea>
            @error('tujuan')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="jadwal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jadwal</label>
            <input type="datetime-local" name="jadwal"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2">
            @error('jadwal')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
            <input type="file" name="gambar"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2">
            @error('gambar')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-2">Submit</button>
        <a href="{{ route('admin.program.index') }}"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Back</a>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#tujuan'))
        .catch(error => {
            console.error(error);
        });
</script>


@endsection