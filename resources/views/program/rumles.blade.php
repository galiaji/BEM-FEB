@extends('layouts.app')

@section('title', 'RUMAH LESTARI ')

@section('content')

<!-- About Section Start -->
<section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:gap-x-12 xl:gap-x-24 gap-y-12">

            <!-- Image Section -->
            <div class="flex-shrink-0 lg:w-1/3 relative lg:mb-12">
                <img class="w-full h-auto object-cover rounded-xl" src="img/srawung-wirausaha.png" alt="Ukcit" />
            </div>

            <!-- Text Section -->
            <div class="flex-1 lg:w-2/3 relative">
                <!-- Wrapper for text and circle background -->
                <div class="relative">
                    <img src="img/Vector.png" alt="Background Vector"
                        class="absolute w-[150%] h-[100%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-50 rounded-full mt-20">

                    <!-- Heading -->
                    <h2
                        class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl z-50 animate-fade-up animate-delay-[100ms]">
                        About <mark class="px-2 text-white bg-violet-400 rounded">RUMAH LESTARI</mark>
                    </h2>

                    <!-- Description -->
                    <p class="text-lg leading-relaxed text-gray-900 mt-9 z-50 animate-fade-right animate-delay-[500ms]">
                        {!! $program->deskripsi !!}
                    </p>
                </div>

                <!-- Additional Image -->
                <img src="{{ asset('images/' . $program->gambar) }}" alt="{{ $program->gambar }}"
                    class="w-full h-48 object-cover rounded-lg mt-6">
            </div>

        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Tujuan Kegiatan Section Start -->
<section class="goals-section py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold leading-tight text-gray-900">Tujuan Kegiatan</h3>
        <div class="mt-4 relative"> <!-- Mengurangi jarak margin top di sini -->
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-4 md:mb-0 md:order-2">
                    <img src="{{ asset('img/tujuan-2.png') }}" alt="Gambar Tujuan 2" class="w-full h-auto rounded-lg">
                </div>
                <div class="md:w-1/2 md:pr-6 text-black md:order-1">
                    <p class="text-lg leading-relaxed">{!! $program->tujuan !!}</p> <!-- Mengurangi margin top di sini -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tujuan Kegiatan Section End -->

@if ($relatedKegiatan->isNotEmpty())
<section class="py-12 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-6 mx-auto max-w-7xl sm:px-8 lg:px-10">
        <h3 class="text-4xl font-extrabold leading-tight text-gray-900 mb-12 text-center">
            Kegiatan Terkait
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php $number = 1; @endphp
            @foreach ($relatedKegiatan as $kegiatan)
            @if ($kegiatan->program->nama == 'UKCIT')
            <div
                class="relative bg-white border border-gray-300 rounded-xl shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:bg-gray-100 shadow-2xl">
                <!-- Numbering -->
                <div
                    class="absolute top-4 left-4 bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold shadow-md">
                    {{ $number }}
                </div>

                <div class="w-full h-60">
                    <img src="{{ asset('/storage/images/' . $kegiatan->foto_kegiatan) }}"
                        alt="{{ $kegiatan->nama_kegiatan }} - {{ $kegiatan->deskripsi_kegiatan }}"
                        class="w-full h-full object-cover rounded-t-xl border-b border-gray-200">
                </div>
                <div class="p-6">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 mb-4">
                        {{ $kegiatan->nama_kegiatan }}
                    </h5>
                    <p class="text-gray-800 text-justify leading-relaxed">
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

<!-- Sasaran Kegiatan Section Start -->
<section id="SasaranKegiatan" class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-8">
            Kelestarian Desa Munding
        </h2>
        <p class="mb-8 text-lg text-gray-600">
            Sasaran kegiatan program Rumah Lestari adalah masyarakat desa baik dikalangan anak-anak maupun orang tua.
            Tujuannya adalah :
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-100 p-4 rounded-full">
                        <span class="text-xl font-bold text-gray-800">01</span>
                    </div>
                </div>
                <p class="text-gray-600">
                    Memelihara dan melestarikan kekayaan budaya Desa Kemambang, seperti gamelan, tari keprajuritan, dan
                    berbagai ekspresi seni lainnya.
                </p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-100 p-4 rounded-full">
                        <span class="text-xl font-bold text-gray-800">02</span>
                    </div>
                </div>
                <p class="text-gray-600">
                    Mempromosikan dan mendukung keragaman seni dan budaya di setiap dusun Desa Kemambang yang memiliki
                    ciri khas yang unik.
                </p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-100 p-4 rounded-full">
                        <span class="text-xl font-bold text-gray-800">03</span>
                    </div>
                </div>
                <p class="text-gray-600">
                    Mengedukasi dan meningkatkan kesadaran masyarakat tentang pentingnya menjaga dan menghargai warisan
                    budaya mereka.
                </p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-100 p-4 rounded-full">
                        <span class="text-xl font-bold text-gray-800">04</span>
                    </div>
                </div>
                <p class="text-gray-600">
                    Meningkatkan partisipasi masyarakat dalam upaya melestarikan budaya Desa Kemambang.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Sasaran Kegiatan Section End -->

<!-- New Image Section Start -->
<section id="RumlesKegiatan" class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-8">
            Gambar Kelestarian Desa Munding
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-center">
            <img class="rounded-lg shadow-lg w-full h-auto" src="img/rumles.png" alt="Kegiatan Rumah Lestari 1">
            <img class="rounded-lg shadow-lg w-full h-auto" src="img/rumles.png" alt="Kegiatan Rumah Lestari 2">
            <img class="rounded-lg shadow-lg w-full h-auto" src="img/rumles.png" alt="Kegiatan Rumah Lestari 3">
            <img class="rounded-lg shadow-lg w-full h-auto" src="img/rumles.png" alt="Kegiatan Rumah Lestari 4">
            <img class="rounded-lg shadow-lg w-full h-auto" src="img/rumles.png" alt="Kegiatan Rumah Lestari 5">
            <img class="rounded-lg shadow-lg w-full h-auto" src="img/rumles.png" alt="Kegiatan Rumah Lestari 6">
        </div>
    </div>
</section>
<!-- New Image Section End -->


<!-- Related Activities Section Start -->
<section class="news py-24 bg-gray-50 dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold leading-tight dark:text-white text-gray-900 sm:text-4xl xl:text-5xl font-pj">
                Berita Terbaru
            </h2>
        </div>

        <!-- Related News Section Start -->
        @if ($relatedNews->isNotEmpty())
        <section class="related-news py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white">Berita Rumah Lestari</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    @foreach ($relatedNews as $news)
                    @if ($news->program->nama == "RUMLES")
                    <div
                        class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                        <img src="{{ asset('images/' . $news->input_gambar) }}" alt="{{ $news->judul }}"
                            class="mb-4 w-full h-48 object-cover rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $news->judul }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                            {!! Str::limit($news->isi_berita, 100, '...') !!}
                        </p>
                        <a href="{{ route('berita.show', $news->slug) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Baca Berita
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        <!-- Related News Section End -->
        <div id="carousel" class="flex overflow-x-auto max-w-md mx-auto mt-8 lg:mt-16 lg:max-w-full scroll-smooth pb-6 space-x-6">
            @if($relatedKegiatan->isNotEmpty())
            <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-8 relative inline-block kegiatan-title">Kegiatan Terkait</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($relatedKegiatan as $kegiatan)
                        @if($kegiatan->program->nama == "RUMLES")
                        <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                            <img src="{{ asset('images/' . $kegiatan->foto_kegiatan) }}" alt="{{ $kegiatan->nama_kegiatan }}" class="mb-4 w-full h-48 object-cover rounded-lg">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $kegiatan->nama_kegiatan }}</h5>
                            <p class="text-gray-600 text-justify">{!! Str::limit($kegiatan->deskripsi_kegiatan) !!}</p>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
        </div>
    </div>
</section>
<!-- Related News Section End -->

<script>
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtnMobile = document.getElementById('prevBtnMobile');
    const nextBtnMobile = document.getElementById('nextBtnMobile');

    prevBtn.addEventListener('click', () => {
        carousel.scrollBy({
            left: -carousel.clientWidth,
            behavior: 'smooth'
        });
    });

    nextBtn.addEventListener('click', () => {
        carousel.scrollBy({
            left: carousel.clientWidth,
            behavior: 'smooth'
        });
    });

    prevBtnMobile.addEventListener('click', () => {
        carousel.scrollBy({
            left: -carousel.clientWidth,
            behavior: 'smooth'
        });
    });

    nextBtnMobile.addEventListener('click', () => {
        carousel.scrollBy({
            left: carousel.clientWidth,
            behavior: 'smooth'
        });
    });
</script>
@endsection