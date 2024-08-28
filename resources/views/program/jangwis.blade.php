@extends('layouts.app')

@section('title', 'ANJANGSANA WISATA')

@section('content')
<section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:gap-x-12 xl:gap-x-24 gap-y-12">

            <!-- Image Section -->
            <div class="flex-shrink-0 lg:w-1/3 relative lg:mb-12">
                <img class="w-full h-auto object-cover rounded-xl" src="public/img/srawung-wirausaha.png" alt="jangwisgit" />
            </div>

            <!-- Text Section -->
            <div class="flex-1 lg:w-2/3 relative">
                <!-- Wrapper for text and circle background -->
                <div class="relative">
                    <img src="public/img/Vector.png" alt="Background Vector"
                        class="absolute w-[150%] h-[100%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-50 rounded-full mt-20">

                    <!-- Heading -->
                    <h2
                        class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl z-50 animate-fade-up animate-delay-[100ms]">
                        About <mark class="px-2 text-white bg-violet-400 rounded">ANJANGSANA WISATA</mark>
                    </h2>

                    <!-- Description -->
                    <p class="text-lg leading-relaxed text-gray-400 mt-9 z-50 animate-fade-right animate-delay-[500ms]">
                        {!! $program->deskripsi !!}
                    </p>
                </div>

                <!-- Additional Image -->
                <img src="{{ asset('public/images/' . $program->gambar) }}" alt="{{ $program->gambar }}"
                    class="w-full h-48 object-cover rounded-lg mt-6">
            </div>

        </div>
    </div>
</section>
<!-- About Section End -->
@if ($relatedKegiatan->isNotEmpty())
<section class="py-12 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-6 mx-auto max-w-7xl sm:px-8 lg:px-10">
        <h3 class="text-4xl font-extrabold leading-tight text-gray-900 mb-12 text-center">
            Kegiatan Terkait
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php $number = 1; @endphp
            @foreach ($relatedKegiatan as $kegiatan)
            @if ($kegiatan->program->nama == 'JANGWIS')
            <div
                class="relative bg-white border border-gray-300 rounded-xl shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:bg-gray-100 shadow-2xl">
                <!-- Numbering -->
                <div
                    class="absolute top-4 left-4 bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold shadow-md">
                    {{ $number }}
                </div>

                <div class="w-full h-60">
                    <img src="{{ asset('public/storage/images/' . $kegiatan->foto_kegiatan) }}"
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

<!-- Map Section Start -->
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Title -->
        <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-8">
            Curuk Tirto Wening
        </h3>
        
        <!-- Map Embed -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.414809517203!2d110.37379551132543!3d-7.193420392781872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70871d08b3ed03%3A0x28b1ccd395dae5f8!2sTirto%20Wening%20Waterfall!5e0!3m2!1sen!2sid!4v1724645591169!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>
<!-- Map Section End -->

<!-- Instagram Section Start -->
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Instagram Card -->
        <div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <a href="https://www.instagram.com/kkn.zhulfaniadam?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" 
               target="_blank" 
               class="block">
                <img src="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png" 
                     alt="Instagram Icon" 
                     class="w-16 h-16 mx-auto mt-4">
                <div class="text-center py-4">
                    <p class="text-xl font-semibold text-gray-800">
                        Follow @kkn.zhulfaniadam
                    </p>
                    <p class="text-gray-600 mt-2">
                        Click to view profile
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- Instagram Section End -->
<!-- News Section Start -->
<section class="news py-24 bg-gray-50">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl font-pj">
                Berita Terbaru
            </h2>
        </div>

        <!-- Related News Section Start -->
        @if ($relatedNews->isNotEmpty())
        <section class="related-news py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    @foreach ($relatedNews as $news)
                    @if ($news->program->nama == 'JANGWIS')
                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow p-5">
                        <img src="{{ asset('public/images/' . $news->input_gambar) }}" alt="{{ $news->judul }}"
                            class="mb-4 w-full h-48 object-cover rounded-lg">
                        
                        <!-- Clickable and Hoverable Title -->
                        <a href="{{ route('berita.show', $news->slug) }}" class="block mb-2">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 truncate hover:text-blue-700">
                                {{ Str::limit($news->judul, 50, '...') }}
                            </h5>
                            <span class="hidden hover:block absolute bg-gray-900 text-white text-sm p-2 rounded-lg z-10">
                                {{ $news->judul }}
                            </span>
                        </a>

                        <p class="mb-3 font-normal text-gray-700 text-justify">
                            {!! Str::limit($news->isi_berita, 100, '...') !!}
                        </p>
                        <a href="{{ route('berita.show', $news->slug) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
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
    </div>
</section>
<!-- News Section End -->
@endsection
