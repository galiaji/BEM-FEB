@extends('layouts.app')

@section('title', 'RUMAH LESTARI ')

@section('content')
    <!-- About Section Start -->
    <section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">

                <div class="relative lg:mb-12">
                    <div class="pl-24 pr-12">
                        <img class="relative rounded-xl" src="img/gambarvec1.png" alt="Rumles" />
                    </div>
                </div>

                <div class="relative 2xl:pl-16">
                    <!-- Wrapper for text and circle background -->
                    <div class="relative">
                        <img src="img/Vector.png" alt="Background Vector"
                            class="absolute w-[200%] h-[150%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-50 rounded-full mt-20">
                        <h2
                            class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white z-50">
                            About Rumah Lestari
                        </h2>
                        <p class="text-lg leading-relaxed text-gray-400 mt-9 z-50">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos a libero in velit,
                            explicabo molestias totam deleniti quibusdam odio obcaecati incidunt.
                        </p>
                        <p class="mt-6 text-lg leading-relaxed text-gray-400 z-50">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos a libero in velit,
                            explicabo molestias totam deleniti quibusdam odio obcaecati incidunt.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Kegiatan Section Start -->
    <section id="Kegiatan" class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2
                class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-8 relative inline-block kegiatan-title">
                KEGIATAN
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                    <div class="flex items-center mb-4">
                        <div class="bg-gray-100 p-4 rounded-full">
                            <span class="text-xl font-bold text-gray-800">01</span>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                    <div class="flex items-center mb-4">
                        <div class="bg-gray-100 p-4 rounded-full">
                            <span class="text-xl font-bold text-gray-800">02</span>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md" style="background-color:rgb(255, 234, 197)">
                    <div class="flex items-center mb-4">
                        <div class="bg-gray-100 p-4 rounded-full">
                            <span class="text-xl font-bold text-gray-800">03</span>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Kegiatan Section End -->

    <!-- New Image Section Start -->
    <section id="RumlesKegiatan" class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 w-full sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <img class="rounded-lg shadow-lg w-full max-w-4xl rounded-lg" src="img/rumles.png"
                    alt="Kegiatan Rumah Lestari">
            </div>
        </div>
    </section>
    <!-- New Image Section End -->

    <!-- Sasaran Kegiatan Section Start -->
    <section id="SasaranKegiatan" class="py-10 bg-gray-100 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white mb-8">
                SASARAN KEGIATAN
            </h2>
            <p class="mb-8 text-lg text-gray-600">
                Sasaran kegiatan program Khazanah Budaya adalah masyarakat desa baik dikalangan anak-anak maupun orang tua.
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

    <!-- Related Activities Section Start -->
    @if ($relatedKegiatan->isNotEmpty())
        <section class="related-kegiatan py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white">Kegiatan Terkait</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    @foreach ($relatedKegiatan as $kegiatan)
                        <div
                            class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                            @if (!empty($kegiatan->foto_kegiatan))
                                <img src="{{ asset('storage/' . $kegiatan->foto_kegiatan) }}"
                                    alt="{{ $kegiatan->nama_kegiatan }}" class="mb-4 w-full h-48 object-cover rounded-lg">
                            @else
                                <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder Image"
                                    class="mb-4 w-full h-48 object-cover rounded-lg">
                            @endif
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $kegiatan->nama_kegiatan }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                                {{ Str::limit($kegiatan->deskripsi, 100, '...') }}</p>
                            <a href="{{ route('acara.show', $kegiatan->slug) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Lihat Kegiatan
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Related Activities Section End -->

    <!-- Related News Section Start -->
    @if ($relatedNews->isNotEmpty())
        <section class="related-news py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h3 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white">Berita Rumah Lestari</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    @foreach ($relatedNews as $news)
                        <div
                            class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                            @if (!empty($news->input_gambar))
                                <img src="{{ asset('images/' . $news->input_gambar) }}" alt="{{ $news->judul }}"
                                    class="mb-4 w-full h-48 object-cover rounded-lg">
                            @else
                                <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder Image"
                                    class="mb-4 w-full h-48 object-cover rounded-lg">
                            @endif
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $news->judul }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                                {{ Str::limit($news->isi_berita, 100, '...') }}</p>
                            <a href="{{ route('berita.show', $news->slug) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Baca Berita
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Related News Section End -->
@endsection
