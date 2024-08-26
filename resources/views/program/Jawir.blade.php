@extends('layouts.app')

@section('title', 'Tentang Pojok Lestari')

@section('content')
<!-- Hero Section Start -->
<div class="bg-gradient-to-b from-gray-500 to-gray-100">
    <section id="About" class="py-10 sm:py-16 lg:py-24 bg-white rounded-lg">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 bg-yellow-100">
            <div class="grid grid-cols-12 gap-x-12 bg-green-100">
                <div class="col-span-7">
                    <h2 class="mb-4 text-4xl font-bold leading-tight tracking-tight text-indigo-600 md:text-5xl lg:text-5xl">
                        Tentang Pojok Lestari
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-gray-700 ">
                        Rumah Cerdas Kita (RUCITA) hadir sebagai sebuah wadah yang bertujuan untuk meningkatkan kualitas sumber daya manusia (SDM) melalui pendidikan formal dan nonformal yang mudah diakses. Website kami mencakup berbagai aspek literasi, mulai dari metode pembelajaran, produk UMKM dari program Srawung Wirausaha, hingga dokumentasi acara budaya dan MoU terkait.
                    </p>
                    <p class="mt-4 text-lg leading-relaxed text-gray-700">
                        Kami juga memberikan informasi terkait kafe kami, yang menyajikan menu beragam, serta panduan pemesanan homestay atau camping ground untuk kelompok. Selain itu, kami fokus pada edukasi pengelolaan limbah dan kepedulian terhadap lingkungan melalui program RUBIK. Semua upaya ini bertujuan untuk memberikan kontribusi positif dalam memajukan SDM dan menjunjung tinggi prinsip keberlanjutan.
                    </p>
                </div>
                <div class="col-span-5 flex justify-center">
                    <img src="img/gambarvec1.png" alt="Illustration" class="w-full max-w-md rounded-lg">
                </div>
            </div>
        </div>
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 bg-green-100">
            <!-- Container Baru -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="img/Q73HytZ_d.png" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="img/Q73HytZ_d.png" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="img/Q73HytZ_d.png" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="img/Q73HytZ_d.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- Hero Section End -->

<!-- About Section Start -->
<section id="About" class="py-10 bg-transparent sm:py-16 lg:py-24 pt-24 pb-24 rounded-lg bg-red-300">
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