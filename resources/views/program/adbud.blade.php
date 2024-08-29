@extends('layouts.app')

@section('title', 'ADIWANGSA BUDAYA')

@section('content')
<!-- About Section Start -->
<section id="About" class="py-16 bg-white lg:py-24 rounded-lg">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
            <div class="relative lg:mb-12">
                <div class="pl-12 pr-12 lg:pl-24">
                    <img class="relative rounded-xl shadow-lg" src="public/img/srawung-wirausaha.png" alt="Ukcit" />
                </div>
            </div>
            <div class="relative 2xl:pl-16">
                <div class="relative">
                    <img src="public/img/Vector.png" alt="Background Vector"
                        class="absolute w-[200%] h-[150%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-50 rounded-full mt-20">
                    <h2 class="mb-6 text-4xl font-bold tracking-tight text-gray-900 md:text-5xl lg:text-5xl z-50">
                        About <mark class="px-2 text-white bg-violet-600 rounded"> Adiwangsa Budaya</mark>
                    </h2>
                    <p class="text-lg leading-relaxed text-gray-600 mt-6 z-50">
                        {!! $program->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Related Activities Section Start -->
@if($relatedKegiatan->isNotEmpty())
<section class="py-16 bg-gray-50 lg:py-24">
    <div class="px-6 mx-auto max-w-7xl sm:px-8 lg:px-10">
        <h3 class="text-4xl font-extrabold leading-tight text-gray-900 mb-12 text-center">
            Kegiatan Terkait
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php $number = 1; @endphp
            @foreach($relatedKegiatan as $kegiatan)
            @if($kegiatan->program->nama == "ADBUD")
            <div
                class="relative bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <!-- Numbering -->
                <div
                    class="absolute top-4 left-4 bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold shadow-md">
                    {{ $number }}
                </div>
                <div class="w-full h-60">
                    <img src="{{ asset('public/images/' . $kegiatan->foto_kegiatan) }}" alt="{{ $kegiatan->nama_kegiatan }}" class="w-full h-full object-cover rounded-t-xl">
                </div>
                <div class="p-6">
                    <h5 class="text-2xl font-bold text-gray-900 mb-4">
                        {{ $kegiatan->nama_kegiatan }}
                    </h5>
                    <p class="text-gray-700 leading-relaxed">
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
<!-- Related Activities Section End -->

<!-- Sasaran Kegiatan Section Start -->
<section id="SasaranKegiatan" class="py-16 bg-gray-50 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-gray-900 mb-12 text-center">
            Sasaran Kegiatan
        </h2>
        <p class="text-lg leading-relaxed text-gray-600 text-center max-w-3xl mx-auto mb-12">
            Sasaran kegiatan program Khazanah Budaya adalah masyarakat desa baik dikalangan anak-anak maupun orang tua. Tujuannya adalah:
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
            'Memelihara dan melestarikan kekayaan budaya Desa Kemambang, seperti gamelan, tari keprajuritan, dan berbagai ekspresi seni lainnya.',
            'Mempromosikan dan mendukung keragaman seni dan budaya di setiap dusun Desa Kemambang yang memiliki ciri khas yang unik.',
            'Mengedukasi dan meningkatkan kesadaran masyarakat tentang pentingnya menjaga dan menghargai warisan budaya mereka.',
            'Meningkatkan partisipasi masyarakat dalam upaya melestarikan budaya Desa Kemambang.'
            ] as $index => $sasaran)
            <div class="p-6 bg-white rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg" style="background-color:rgb(255, 234, 197)">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-100 p-4 rounded-full">
                        <span class="text-xl font-bold text-gray-800">{{ sprintf('%02d', $index + 1) }}</span>
                    </div>
                </div>
                <p class="text-gray-800 leading-relaxed text-justify">
                    {{ $sasaran }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Sasaran Kegiatan Section End -->

<!-- Related News Section Start -->
@if ($relatedNews->isNotEmpty())
<section class="py-24 bg-white">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold leading-tight text-gray-900 sm:text-5xl">
                Berita Terbaru
            </h2>
        </div>
        <section class="related-news overflow-x-auto scroll-smooth pb-6 space-x-6">
            <div class="flex gap-6 max-w-full mx-auto">
                @foreach ($relatedNews as $news)
                @if ($news->program->nama == 'UKCIT')
                <div class="flex-shrink-0 w-full lg:w-1/3 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden p-4 transition-transform transform hover:scale-105 hover:shadow-xl">
                    <a href="{{ route('berita.show', $news->slug) }}">
                        <img src="{{ asset('public/images/' . $news->input_gambar) }}" alt="{{ $news->judul }}" class="w-full h-48 object-cover rounded-lg">
                    </a>
                    <div class="mt-4">
                        <a href="{{ route('berita.show', $news->slug) }}" class="block mb-2">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 truncate hover:text-blue-700">
                                {{ Str::limit($news->judul, 50, '...') }}
                            </h5>
                        </a>
                        <p class="mb-4 font-normal text-gray-700 leading-relaxed">
                            {!! Str::limit($news->isi_berita, 100, '...') !!}
                        </p>
                        <a href="{{ route('berita.show', $news->slug) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Baca Berita
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </section>
    </div>
</section>
@endif
<!-- Related News Section End -->
@endsection