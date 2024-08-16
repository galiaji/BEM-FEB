@extends('admin.layout')

@section('title', 'Kegiatan List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
        {{-- <h1>Kegiatan List</h1> --}}
        <a href="{{ route('admin.kegiatan.create') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
            New Kegiatan</a>
    </div>

    <table
        class="text-gray-500 text-sm rounded-lg focus:ring-blue-500 dark:bg-transparent dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 w-full p-2.5 mt-3">
        <thead>
            <tr>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    ID</th>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    Nama Kegiatan</th>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    Foto Kegiatan</th>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    Deskripsi Kegiatan</th>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    Program</th>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kegiatan as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_kegiatan }}</td>
                    <td>
                        @if ($item->foto_kegiatan)
                            <img src="{{ asset('storage/' . $item->foto_kegiatan) }}" alt="Foto Kegiatan" width="100">
                        @endif
                    </td>
                    <td>{{ Str::limit($item->deskripsi_kegiatan, 50) }}</td>
                    <td>{{ $item->program->nama ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('admin.kegiatan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.kegiatan.destroy', $item->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
