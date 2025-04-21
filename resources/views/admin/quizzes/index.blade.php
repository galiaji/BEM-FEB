@extends('admin.layout')

@section('content')
    <div class="container">
        <h2>Manajemen Quiz</h2>
        <a href="{{ route('quizzes.create') }}" class="btn btn-primary mb-3">Tambah Quiz</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Judul Quiz</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quizzes as $quiz)
                    <tr>
                        <td>{{ $quiz->title }}</td>
                        <td>{{ $quiz->category->name ?? 'Tanpa Kategori' }}</td>
                        <td>
                            <a href="{{ route('quizzes.edit', $quiz->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('quizzes.destroy', $quiz->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Hapus quiz ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
