@extends('admin.layout')

@section('content')
    <div class="container">
        <h2>Manajemen Kategori Quiz</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Tambah Kategori</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
