@extends('layouts.app')

@section('title', 'Tentang Pojok Lestari')

@section('content')
<!-- Hero Section Start -->
<section id="About" class="py-16 lg:py-24 bg-transparent rounded-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-y-12 lg:gap-x-12 xl:gap-x-24 items-center">

            <!-- Image Section -->
            <div class="lg:w-2/5 w-full flex justify-center lg:justify-start">
                <img class="w-full max-w-lg h-auto object-cover rounded-xl" src="{{ asset('public/img/UKCIT new.png') }}" alt="Ukcit" />
            </div>

            <!-- Text Section -->
            <div class="lg:w-3/5 flex-1 relative">
                <div class="relative">
                    <img src="{{ asset('public/img/Vector.png') }}" alt="Background Vector" class="absolute w-[150%] h-full left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-50 rounded-full mt-20">

                    <!-- Heading -->
                    <h2 class="mb-4 text-4xl font-bold text-gray-900 md:text-5xl lg:text-5xl z-50 animate-fade-up animate-delay-[100ms]">
                        About <mark class="px-2 text-white bg-blue-400 rounded">Jalin Wirausaha</mark>
                    </h2>

                    <!-- Description -->
                    <p class="text-lg text-gray-400 mt-9 z-50 animate-fade-right animate-delay-[500ms]">
                        {!! $program->deskripsi !!}
                    </p>
                </div>

                <!-- Additional Image -->
                <img src="{{ asset('public/images/' . $program->gambar) }}" alt="{{ $program->gambar }}" class="w-full h-48 object-cover rounded-lg mt-6">
            </div>

        </div>
    </div>
</section>
<!-- Hero Section End -->

@if ($relatedKegiatan->isNotEmpty())
<section class="py-16 lg:py-24 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
        <h3 class="text-4xl font-extrabold text-gray-900 mb-12 text-center">Kegiatan Terkait</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php $number = 1; @endphp
            @foreach ($relatedKegiatan as $kegiatan)
            @if ($kegiatan->program->nama == 'JAWIR')
            <div class="relative bg-white border border-gray-300 rounded-xl shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <!-- Numbering -->
                <div class="absolute top-4 left-4 bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold">
                    {{ $number }}
                </div>

                <div class="w-full h-60">
                    <img src="{{ asset('public/storage/images/' . $kegiatan->foto_kegiatan) }}" alt="{{ $kegiatan->nama_kegiatan }} - {{ $kegiatan->deskripsi_kegiatan }}" class="w-full h-full object-cover rounded-t-xl">
                </div>
                <div class="p-6">
                    <h5 class="text-2xl font-bold text-gray-900 mb-4">{{ $kegiatan->nama_kegiatan }}</h5>
                    <p class="text-gray-800 leading-relaxed">
                        {!! $kegiatan->deskripsi_kegiatan !!}
                    </p>
                </div>
            </div>
            @php $number++; @endphp
            @endif
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- About Section Start -->
<section id="CategorySection" class="py-16 lg:py-24 bg-red-200 rounded-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-4xl font-extrabold text-gray-900 mb-12 text-center">Produk MAKANAN</h3>
        <div class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-lg">
            <div class="max-w-full mx-auto bg-gray-100 py-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($products as $product)
                    <div class="relative bg-white border border-gray-300 rounded-xl shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <!-- Display product image -->
                        <div class="w-full h-60">
                            <img src="{{ asset('public/images/' . $product->foto_produk) }}" alt="{{ $product->nama_produk }}" class="w-full h-full object-cover rounded-t-xl">
                        </div>
                        <div class="p-6">
                            <!-- Product name -->
                            <h5 class="text-2xl font-bold text-gray-900 mb-4 hover:underline">
                                <a href="#">{{ $product->nama_produk }}</a>
                            </h5>
                            <!-- Product description -->
                            <p class="text-gray-800 leading-relaxed">
                                {!! $product->deskripsi_produk !!}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- News Section Start -->
<section class="news py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl xl:text-5xl">Berita Terbaru</h2>
        </div>

        @if ($relatedNews->isNotEmpty())
        <section class="related-news py-10 sm:py-16 lg:py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                @foreach ($relatedNews as $news)
                @if ($news->program->nama == 'UKCIT')
                <div class="bg-white border border-gray-200 rounded-lg shadow p-5">
                    <img src="{{ asset('public/images/' . $news->input_gambar) }}" alt="{{ $news->judul }}" class="mb-4 w-full h-48 object-cover rounded-lg">

                    <a href="{{ route('berita.show', $news->slug) }}" class="block mb-2">
                        <h5 class="text-2xl font-bold text-gray-900 truncate hover:text-blue-700">{{ Str::limit($news->judul, 50, '...') }}</h5>
                        <span class="hidden hover:block absolute bg-gray-900 text-white text-sm p-2 rounded-lg z-10">
                            {{ $news->judul }}
                        </span>
                    </a>

                    <p class="mb-3 text-gray-700 leading-relaxed">
                        {!! Str::limit($news->isi_berita, 100, '...') !!}
                    </p>

                    <a href="{{ route('berita.show', $news->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                        Baca Berita
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </section>
        @endif
    </div>
</section>

<script>
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtnMobile = document.getElementById('prevBtnMobile');
    const nextBtnMobile = document.getElementById('nextBtnMobile');

    const scrollCarousel = (direction) => {
        carousel.scrollBy({
            left: direction * carousel.clientWidth,
            behavior: 'smooth'
        });
    };

    prevBtn?.addEventListener('click', () => scrollCarousel(-1));
    nextBtn?.addEventListener('click', () => scrollCarousel(1));
    prevBtnMobile?.addEventListener('click', () => scrollCarousel(-1));
    nextBtnMobile?.addEventListener('click', () => scrollCarousel(1));
</script>
@endsection