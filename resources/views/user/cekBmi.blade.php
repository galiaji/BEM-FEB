<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="public/favicon.ico">
    <style>
        .animate {
            animation-name: fade-right;
            animation-duration: 1s;
            animation-timing-function: ease-linear;
        }
    </style>
    <title>Cek BMI</title>
</head>

<body
    class="bg-gray-900 m-auto bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-4 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="/img/bkpm.png" class="h-10 w-20" alt="">
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">GiziFun</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <div class="w-8 h-8 rounded-full overflow-hidden">
                                    {{-- @if ($officeBoy->foto_profil)
                                        <img src="{{ asset('storage/' . $officeBoy->foto_profil) }}" alt="Foto Profil"
                                            class="w-full h-full object-cover">
                                    @else
                                        <div
                                            class="w-full h-full flex items-center justify-center bg-gray-500 text-white">
                                            No Photo
                                        </div>
                                    @endif --}}
                                </div>
                            </button>
                        </div>
                        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse ml-4">
                            <p class="relative inline font-inter font-normal text-transparent text-18 leading-normal">
                                <span type="text-wrapper text-white"
                                    class="text-white font-medium rounded-lg text-sm text-center">Selamat datang
                                    {{ Auth::user()->name }}</span><br>
                            </p>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Profile</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="block px-4 py-2">
                                    @csrf
                                    <li>
                                        <button type="submit"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Log out</button>
                                    </li>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/user/dashboard"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example-1" data-collapse-toggle="dropdown-example-1">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Users</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example-1" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/office-boy/profile"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Profil</a>
                        </li>
                    </ul>
                </li>
                <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Fitur</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                            <li>
                                <a href=""
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Materi
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Quiz/Games
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Cek
                                    BMI
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Meal
                                    Planner
                                </a>
                            </li>
                        </ul>
                    </li>
                    <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                        <li>
                            <a href=""
                                class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="w-7 h-7 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path opacity="0.4"
                                        d="M20 8.25V18C20 21 18.21 22 16 22H8C5.79 22 4 21 4 18V8.25C4 5 5.79 4.25 8 4.25C8 4.87 8.24997 5.43 8.65997 5.84C9.06997 6.25 9.63 6.5 10.25 6.5H13.75C14.99 6.5 16 5.49 16 4.25C18.21 4.25 20 5 20 8.25Z"
                                        fill="#718096" />
                                    <!-- Warna disesuaikan dengan warna pada SVG di "Dashboard" -->
                                    <path
                                        d="M16 4.25C16 5.49 14.99 6.5 13.75 6.5H10.25C9.63 6.5 9.06997 6.25 8.65997 5.84C8.24997 5.43 8 4.87 8 4.25C8 3.01 9.01 2 10.25 2H13.75C14.37 2 14.93 2.25 15.34 2.66C15.75 3.07 16 3.63 16 4.25Z"
                                        fill="#718096" />
                                    <!-- Warna disesuaikan dengan warna pada SVG di "Dashboard" -->
                                    <path
                                        d="M12 13.75H8C7.59 13.75 7.25 13.41 7.25 13C7.25 12.59 7.59 12.25 8 12.25H12C12.41 12.25 12.75 12.59 12.75 13C12.75 13.41 12.41 13.75 12 13.75Z"
                                        fill="#718096" />
                                    <!-- Warna disesuaikan dengan warna pada SVG di "Dashboard" -->
                                    <path
                                        d="M16 17.75H8C7.59 17.75 7.25 17.41 7.25 17C7.25 16.59 7.59 16.25 8 16.25H16C16.41 16.25 16.75 16.59 16.75 17C16.75 17.41 16.41 17.75 16 17.75Z"
                                        fill="#718096" />
                                    <!-- Warna disesuaikan dengan warna pada SVG di "Dashboard" -->
                                </svg>
                                <span class="ms-2">Riwayat Quiz/Games</span>
                            </a>
                        </li>

                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                                <button type="submit"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full group">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 18 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap text-start">Keluar</span>
                                </button>
                            </form>
                        </li>
                    </ul>
        </div>
    </aside>

    <!-- BMI Calculator Start -->
    <div class="py-4 sm:ml-64">
        <div
            class="flex justify-center items-center bg-transparent max-w-screen-xl mx-auto px-6 lg:px-8 pt-20 pb-24 rounded-lg">
            <div class="w-full bg-gray-900 dark:bg-gray-900 border border-gray-700 rounded-lg p-8 md:p-12 shadow-lg">
                <h2 class="text-3xl font-bold leading-tight text-gray-200 sm:text-4xl lg:text-5xl text-center mb-8">BMI
                    Calculator</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Form Input -->
                    <div class="bg-gray-800 p-8 rounded-2xl">
                        <form action="{{ route('user.bmi.calculate') }}" method="POST" id="bmiForm">
                            @csrf
                            <div class="mb-3">
                                <label class="block text-gray-300 font-medium">Nama</label>
                                <input type="text" name="name" id="nameInput"
                                    class="w-full px-3 py-2 border rounded-lg bg-gray-700 text-white" required>
                            </div>

                            <div class="mb-3">
                                <label class="block text-gray-300 font-medium">Jenis Kelamin</label>
                                <select name="gender"
                                    class="w-full px-3 py-2 border rounded-lg bg-gray-700 text-white" required>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="block text-gray-300 font-medium">Tinggi Badan (cm)</label>
                                <input type="number" name="height"
                                    class="w-full px-3 py-2 border rounded-lg bg-gray-700 text-white" required>
                            </div>

                            <div class="mb-3">
                                <label class="block text-gray-300 font-medium">Berat Badan (kg)</label>
                                <input type="number" name="weight"
                                    class="w-full px-3 py-2 border rounded-lg bg-gray-700 text-white" required>
                            </div>

                            <button type="submit"
                                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition mt-4">
                                Hitung BMI
                            </button>
                            <button onclick="window.location.href='/user/dashboard'"
                                class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition mt-4">
                                Kembali
                            </button>
                        </form>
                    </div>

                    <!-- Hasil BMI -->
                    <div class="bg-gray-800 p-8 rounded-2xl shadow-md border border-gray-700">
                        <h3 class="text-lg font-semibold text-center mb-2 text-gray-200">
                            <span id="bmiName"> </span>
                        </h3>

                        @if (session('bmi'))
                            <h3 class="text-lg font-semibold text-center text-gray-300">
                                BMI untuk {{ session('gender') == 'male' ? 'Laki-laki' : 'Perempuan' }}
                            </h3>

                            <p class="text-center text-xl font-bold text-red-400">
                                @if (session('bmi') < 18.5)
                                    Kurus
                                @elseif (session('bmi') >= 18.5 && session('bmi') < 24.9)
                                    Berat Ideal
                                @elseif (session('bmi') >= 25 && session('bmi') < 29.9)
                                    Kelebihan Berat Badan
                                @else
                                    Obesitas
                                @endif
                            </p>

                            <div class="flex justify-center space-x-6 mt-4 mb-8 text-gray-300">
                                <p><strong>Tinggi (cm)</strong> <br> <span
                                        class="text-lg font-bold">{{ session('height') }}</span></p>
                                <p><strong>Berat (kg)</strong> <br> <span
                                        class="text-lg font-bold">{{ session('weight') }}</span></p>
                            </div>

                            <!-- Progress Bar BMI -->
                            <div class="relative mt-6">
                                <div class="h-4 bg-red-500 rounded-full w-full"></div>
                                <div class="absolute top-0 left-1/4 h-4 bg-green-500 w-1/4"></div>
                                <div class="absolute top-0 left-1/2 h-4 bg-yellow-400 w-1/4"></div>

                                <!-- Indicator -->
                                <div id="bmi-indicator"
                                    class="absolute -top-6 bg-black text-white px-2 py-1 rounded-full text-sm transform transition-all duration-700"
                                    style="left: {{ min(100, (session('bmi') / 40) * 100) }}%;">
                                    {{ session('bmi') }}
                                </div>
                            </div>

                            <p class="text-center mt-3 text-gray-400 text-sm">
                                Pastikan asupan kalori sesuai dengan kebutuhan harian & konsumsi makanan sehat.
                            </p>

                            <canvas id="bmiChart" class="mt-6"></canvas>
                        @else
                            <p class="text-gray-400 text-center">Hitung BMI Anda untuk melihat hasil.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BMI Calculator End -->



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const bmiChartCanvas = document.getElementById('bmiChart');
            const bmiIndicator = document.getElementById('bmi-indicator');
            const bmiName = document.getElementById('bmiName');
            const nameInput = document.getElementById('nameInput');
            const bmiForm = document.getElementById('bmiForm');

            function animateIndicator() {
                if (bmiIndicator) {
                    bmiIndicator.style.opacity = '0';
                    setTimeout(() => {
                        bmiIndicator.style.opacity = '1';
                        bmiIndicator.style.transform = 'translateY(-10px)';
                    }, 300);
                }
            }

            // Cek apakah ada hasil BMI yang disimpan dalam session
            @if (session('bmi'))
                // Jika ada BMI yang dihitung, tampilkan nama dari localStorage
                if (localStorage.getItem('bmiName')) {
                    bmiName.textContent = "Halo, " + localStorage.getItem('bmiName');
                }
                setTimeout(animateIndicator, 300);

                // Load Chart Riwayat BMI
                fetch(`/user/bmi/history?name={{ session('name') }}`)
                    .then(response => response.json())
                    .then(data => {
                        const labels = data.map(record => new Date(record.created_at).toLocaleDateString());
                        const bmiValues = data.map(record => record.bmi);

                        new Chart(bmiChartCanvas, {
                            type: 'line',
                            data: {
                                labels: labels,
                                datasets: [{
                                    label: 'Riwayat BMI',
                                    data: bmiValues,
                                    borderColor: 'rgb(75, 192, 192)',
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    tension: 0.4
                                }]
                            },
                            options: {
                                responsive: true,
                                animation: {
                                    duration: 1000,
                                    easing: 'easeOutBounce'
                                }
                            }
                        });
                    });
            @else
                // Jika halaman dibuka tanpa hasil BMI, hapus nama dari localStorage
                localStorage.removeItem('bmiName');
                bmiName.textContent = "";
            @endif

            // Simpan nama setelah form dikirim
            bmiForm.addEventListener('submit', function() {
                localStorage.setItem('bmiName', nameInput.value);
            });
        });
    </script>



</body>

</html>
