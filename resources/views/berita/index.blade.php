@extends('layouts.app')

@section('title', 'Semua Berita')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Daftar Berita</h1>
    <div class="row">
        @foreach ($beritas as $berita)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if ($berita->input_gambar)
                <img src="{{ url('images/'.$berita->input_gambar) }}" class="card-img-top" alt="{{ $berita->judul }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $berita->judul }}</h5>
                    <p class="card-text">{{ Str::limit($berita->isi_berita, 100) }}</p>
                    <a href="{{ route('berita.show', $berita->slug) }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection