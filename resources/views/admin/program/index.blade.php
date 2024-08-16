@extends('admin.layout')

@section('title', 'Manage Programs')

@section('content')
    <div class="mb-4 mt-2">
        <a href="{{ route('admin.program.create') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
            New Program</a>
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
                    Nama</th>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    Deskripsi</th>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    Jadwal</th>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    Tujuan</th>
                <th
                    class="py-4 px-4 border-b dark:border-gray-500 border-gray-400 dark:bg-gray-700 bg-gray-100 dark:text-gray-400 text-gray-700">
                    Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $program)
                <tr>
                    <td>{{ $program->id }}</td>
                    <td>{{ $program->nama }}</td>
                    <td>{{ Str::limit($program->deskripsi, 50) }}</td>
                    <td>{{ $program->jadwal ? $program->jadwal->format('d-m-Y H:i') : 'Tidak ditentukan' }}</td>
                    <td>{{ $program->tujuan ?? 'Tidak ditentukan' }}</td>
                    <td>
                        <a href="{{ route('admin.program.edit', $program->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus program ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
