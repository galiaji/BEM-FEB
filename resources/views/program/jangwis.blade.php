@extends('layouts.app')

@section('title', 'ANJANGSANA WISATA')

@section('content')
    <section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:gap-x-12 xl:gap-x-24 gap-y-12">

                <!-- Image Section -->
                <div class="flex-shrink-0 lg:w-1/3 relative lg:mb-12">
                    <img class="w-full h-auto object-cover rounded-xl" src="public/img/JANGWIS.png" alt="jangwisgit" />
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
                            About <mark class="px-2 text-white bg-zinc-400 rounded">ANJANGSANA WISATA</mark>
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

    <!-- PARIWISATA SECTION START -->
    <!-- Text Section -->
    <div class="flex items-center justify-center min-h-[500px]">
        <h2
            class="text-4xl font-bold leading-tight tracking-tight text-gray-900 md:text-5xl lg:text-5xl z-50 animate-fade-up animate-delay-[100ms]">
            Pariwisata <mark class="px-2 text-white bg-violet-400 rounded">DESA MUNDING</mark>
        </h2>
    </div>


    <!-- Container with Background Image -->
    <div
        style="position: relative; width: 100%; max-width: 1200px; margin: 0 auto; padding: 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); margin-bottom: 20px;">
        <!-- Background Image -->
        <img src="public/img/curug.jpg" alt="Tirto Wening Waterfall"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; filter: brightness(0.7);">

        <!-- Right Side: Google Maps Embed -->
        <div style="width: 30%; float: right; background-color: rgba(0, 0, 0, 0.5); padding: 10px; border-radius: 10px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.414809517203!2d110.37379551132543!3d-7.193420392781872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70871d08b3ed03%3A0x28b1ccd395dae5f8!2sTirto%20Wening%20Waterfall!5e0!3m2!1sen!2sid!4v1724645591169!5m2!1sen!2sid"
                width="100%" height="350px" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Left Side: Description and Instagram Link -->
        <div style="width: 65%; float: left; color: #fff; padding-right: 20px; padding-top: 20px;">
            <h2
                class="text-4xl font-bold leading-tight tracking-tight text-white md:text-5xl lg:text-5xl z-50 animate-fade-up animate-delay-[100ms]">
                Tirto Wening Waterfall
            </h2>
            <p class="mt-5">Discover the beauty of Tirto Wening Waterfall, a serene location perfect for nature lovers.
                Nestled in lush greenery, this waterfall is a hidden gem that offers a peaceful retreat.</p>
            <p>Enjoy the cascading water, take a refreshing dip, or simply relax and soak in the tranquil surroundings.
                Perfect for a day trip or a quiet getaway.</p>
            <!-- Instagram Icon Link and Name -->
            <div style="display: flex; align-items: center; margin-top: 20px;">
                <a href="https://www.instagram.com/your-location-profile/" target="_blank"
                    style="display: inline-block; background-color: rgba(255, 255, 255, 0.8); border-radius: 50%; padding: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"
                        width="40" height="40">
                </a>
                <span style="margin-left: 10px; font-size: 18px;">@yourlocationprofile</span>
            </div>
        </div>

        <!-- Clear floats -->
        <div style="clear: both;"></div>
    </div>

    <!-- Container with Background Image -->
    <div
        style="position: relative; width: 100%; max-width: 1200px; margin: 0 auto; padding: 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); margin-bottom: 20px;">
        <!-- Background Image -->
        <img src="public/img/gardu_pandang.jpg" alt="Gardu Pandang"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; filter: brightness(0.7);">

        <!-- Left Side: Google Maps Embed -->
        <div style="width: 30%; float: left; background-color: rgba(0, 0, 0, 0.5); padding: 10px; border-radius: 10px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.4398327179456!2d110.37007361132552!3d-7.19055009278467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7087bedc9bd1a7%3A0x706242a99cd471d2!2sGardu%20Pandang!5e0!3m2!1sen!2sid!4v1724645735605!5m2!1sen!2sid"
                width="100%" height="350px" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Right Side: Description and Instagram Link -->
        <div style="width: 65%; float: right; color: #fff; padding-left: 20px; padding-top: 20px;">
            <h2
                class="text-4xl font-bold leading-tight tracking-tight text-white md:text-5xl lg:text-5xl z-50 animate-fade-up animate-delay-[100ms]">
                Gardu Pandang
            </h2>
            <p class="mt-5">Experience the stunning views from Gardu Pandang, a popular spot for sightseeing and capturing
                breathtaking photos. This location offers a panoramic view of the surrounding landscape.</p>
            <p>Ideal for nature lovers and photography enthusiasts, Gardu Pandang provides an unforgettable experience.
                Whether you visit during sunrise or sunset, the views are simply spectacular.</p>
            <!-- Instagram Icon Link and Name -->
            <div style="display: flex; align-items: center; margin-top: 20px;">
                <a href="https://www.instagram.com/your-location-profile/" target="_blank"
                    style="display: inline-block; background-color: rgba(255, 255, 255, 0.8); border-radius: 50%; padding: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"
                        width="40" height="40">
                </a>
                <span style="margin-left: 10px; font-size: 18px;">@yourlocationprofile</span>
            </div>
        </div>

        <!-- Clear floats -->
        <div style="clear: both;"></div>
    </div>

    <!-- Container with Background Image -->
    <div
        style="position: relative; width: 100%; max-width: 1200px; margin: 0 auto; padding: 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); margin-bottom: 20px;">
        <!-- Background Image -->
        <img src="public/img/cemanggal_farm.jpg" alt="Wisata Pertanian Cemanggal"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; filter: brightness(0.7);">

        <!-- Left Side: Description and Instagram Link -->
        <div style="width: 65%; float: left; color: #fff; padding-right: 20px; padding-top: 20px;">
            <h2
                class="text-4xl font-bold leading-tight tracking-tight text-white md:text-5xl lg:text-5xl z-50 animate-fade-up animate-delay-[100ms]">
                Pertanian Cemanggal
            </h2>
            <p class="mt-5">Explore Wisata Pertanian Cemanggal, a unique agricultural tourism spot where you can immerse
                yourself in the rural lifestyle. Experience hands-on farming activities and enjoy the fresh air and
                beautiful scenery.</p>
            <p>Perfect for families and educational trips, this destination offers a blend of learning and leisure, making
                it an ideal getaway for all ages.</p>
            <!-- Instagram Icon Link and Name -->
            <div style="display: flex; align-items: center; margin-top: 20px;">
                <a href="https://www.instagram.com/your-location-profile/" target="_blank"
                    style="display: inline-block; background-color: rgba(255, 255, 255, 0.8); border-radius: 50%; padding: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"
                        width="40" height="40">
                </a>
                <span style="margin-left: 10px; font-size: 18px;">@yourlocationprofile</span>
            </div>
        </div>

        <!-- Right Side: Google Maps Embed -->
        <div style="width: 30%; float: right; background-color: rgba(0, 0, 0, 0.5); padding: 10px; border-radius: 10px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.4331147509865!2d110.37367371132542!3d-7.191320792783944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7087ae0cc5d73d%3A0xe36b02a71d6e54d!2sWisata%20Pertanian%20Cemanggal!5e0!3m2!1sen!2sid!4v1724645840803!5m2!1sen!2sid"
                width="100%" height="350px" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Clear floats -->
        <div style="clear: both;"></div>
    </div>
    <!-- PARIWISATA SECTION END -->

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

    <!-- News Section Start -->
    <section class="news bg-gray-50">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 mb-16">
            <div class="text-center mt-12">
                <h2
                    class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl font-pj animate-fade-up animate-delay-[200ms]">
                    Berita Terkait
                </h2>
            </div>

            @if ($beritas->isEmpty())
                <div class="text-center">
                    <p class="text-lg text-gray-700">Belum ada berita</p>
                </div>
            @else
                <div id="carousel"
                    class="flex overflow-x-auto max-w-md mx-auto lg:mt-6 lg:max-w-full scroll-smooth pb-6 pt-6 space-x-6">
                    @foreach ($beritas as $berita)
                        @if ($berita->program->nama == 'JANGWIS')
                            <div
                                class="flex-shrink-0 w-full lg:w-1/3 bg-white border border-gray-200 rounded-lg shadow overflow-hidden p-4 transition-transform transform hover:scale-105 hover:bg-gray-100 hover:drop-shadow-xl duration-300">
                                <a href="{{ route('berita.show', $berita->slug) }}">
                                    <img class="w-full h-48 object-cover rounded-lg"
                                        src="{{ asset('public/images/' . $berita->input_gambar) }}"
                                        alt="{{ $berita->judul }}" />
                                </a>
                                <div class="mt-2">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                        {{ $berita->judul }}
                                    </h5>
                                    <p class="font-normal text-gray-700 mb-4">
                                        {{ $berita->created_at->format('d M Y') }}
                                    </p>
                                    <a href="{{ route('berita.show', $berita->slug) }}"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-transform transform hover:scale-105 duration-200">
                                        Baca Berita
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <!-- News Section End -->

@endsection
