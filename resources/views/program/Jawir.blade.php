@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<!-- Hero Section Start -->
<div class="bg-gradient-to-b from-gray-50 to-gray-100">
    <section class="py-10 sm:py-16 lg:py-24">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                <div>
                    <h1 class="text-4xl font-bold text-black sm:text-5xl lg:text-5xl">
                        About
                        <div class="relative inline-flex">
                            <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#4ADE80]"></span>
                        </div>
                    </h1>
                    <p class="mt-8 text-base text-black sm:text-xl">Program Pembinaan UMKM khususnya di Desa Kemambang yang ingin mengembangkan dan memajukan usahanya dengan baik dan sesuai dengan perkembangan teknologi.

                        Kegiatan yang akan diselenggarakan diantaranya berupa pelatihan, pengembangan & inovasi terhadap produk dan hal pendukung usaha, seperti rebranding produk, pengurusan perizinan usaha dan perizinan produk, desain produk dan branding produk melalui media sosial, pembukuan keuangan yang baik, financial planning, supply chain management, digital marketing & pembuatan galeri produk.

                    </p>
                    <div class="mt-10 sm:flex sm:items-center sm:space-x-4">
                        <button onclick="window.location.href='/programs'"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat
                            Program</button>
                        <button
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hubungi
                            Kami</button>
                    </div>
                </div>
                <div>
                    <img class="w-full"
                        src="img/Vector.png"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Hero Section End -->

<!-- About Section Start -->
<section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
            <div class="relative lg:mb-12">
                <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4"
                    src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg"
                    alt="Dots Pattern" />
                <div class="pl-24 pr-12">
                    <img class="relative rounded-xl"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/girl-working-on-laptop.jpg"
                        alt="Girl Working on Laptop" />
                </div>
                <div class="absolute left-0 pr-12 bottom-8 xl:bottom-20">
                    <div class="max-w-xs bg-blue-600 rounded-lg sm:max-w-md xl:max-w-md">
                        <div class="px-3 py-4 sm:px-5 sm:py-8">
                            <div class="flex items-start">
                                <p class="text-3xl sm:text-4xl">👋</p>
                                <blockquote class="ml-5">
                                    <p class="text-sm font-medium text-white sm:text-lg">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Aperiam unde sint aliquid reprehenderit culpa
                                        corrupti ut esse eligendi.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="2xl:pl-16">
                <h2 class="mb-4 text-4xl font-bold leading-tight leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">
                    About <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">RUCITA</mark>
                </h2>
                <p class="text-lg leading-relaxed text-gray-400 mt-9">Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Dignissimos a libero in velit, explicabo molestias totam deleniti quibusdam
                    odio obcaecati incidunt.</p>
                <p class="mt-6 text-lg leading-relaxed text-gray-400">Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Dignissimos a libero in velit, explicabo molestias totam deleniti quibusdam
                    odio obcaecati incidunt.</p>
            </div>
        </div>
    </div>
</section>

@endsection