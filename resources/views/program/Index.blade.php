@extends('layouts.app')

@section('title', 'Semua Program')

@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Daftar Program</h1>
    <div class="row">
        @foreach ($programs as $program)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $program->nama }}</h5>
                    <p class="card-text">{{ Str::limit($program->deskripsi, 100) }}</p>
                    <a href="{{ route('program.show', $program->slug) }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection