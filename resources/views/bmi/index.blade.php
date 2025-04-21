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

<body>
    <header>
        <nav id="navbar" class="bg-white shadow-md z-50 fixed top-0 left-0 right-0 transition-all duration-300"
            style="background: linear-gradient(135deg, #1b5989, #164766);">
            <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://via.placeholder.com/100" class="h-10" alt="Logo" />
                    <span class="text-2xl font-semibold text-white" id="nav-text">GiziFun</span>
                </a>

                <!-- Menu Toggle (Mobile) -->
                <button id="menu-toggle" class="md:hidden p-2 rounded-lg text-gray-500 hover:bg-gray-100">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>

                <!-- Navigation Menu -->
                <div class="hidden md:flex md:items-center md:space-x-6" id="navbar-default">
                    <a href="/" class="nav-link text-white">Home</a>
                    <a href="/programs" class="nav-link text-white">Programs</a>
                    <a href="/berita" class="nav-link text-white">News</a>
                    <a href="/games" class="nav-link text-white">Games</a>
                    <a href="#Contact" class="nav-link text-white">Contact</a>
                </div>

                <!-- Profile Dropdown -->
                <div class="relative">
                    <button id="user-menu-button"
                        class="flex items-center text-sm rounded-full focus:ring-4 focus:ring-gray-300">
                        <img class="w-8 h-8 rounded-full"
                            src="{{ auth('web')->user()->profile_photo_url ?? 'https://www.gstatic.com/images/branding/product/1x/avatar_square_blue_512dp.png' }}"
                            alt="User">
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="user-dropdown"
                        class="absolute right-0 mt-2 w-48 hidden bg-white shadow-lg rounded-lg transition-opacity duration-300 opacity-0 z-50">
                        <a href="#"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:rounded-lg">Dashboard</a>
                        <a href="/login"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:rounded-lg">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div
        class="flex justify-center items-center bg-transparent max-w-screen-xl mx-auto px-6 lg:px-8 pt-20 pb-24 rounded-lg">
        <div class="w-full bg-gray-100 shadow-lg rounded-lg p-6">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl text-center mb-8">BMI
                Calculator
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Form Input -->
                <div class="bg-gray-200 p-4 rounded-lg ">
                    <form action="{{ route('bmi.calculate') }}" method="POST" id="bmiForm">
                        @csrf
                        <div class="mb-3">
                            <label class="block text-gray-700 font-medium">Nama</label>
                            <input type="text" name="name" id="nameInput"
                                class="w-full px-3 py-2 border rounded-lg" required>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-medium">Jenis Kelamin</label>
                            <select name="gender" class="w-full px-3 py-2 border rounded-lg" required>
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-medium">Tinggi Badan (cm)</label>
                            <input type="number" name="height" class="w-full px-3 py-2 border rounded-lg" required>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-medium">Berat Badan (kg)</label>
                            <input type="number" name="weight" class="w-full px-3 py-2 border rounded-lg" required>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
                            Hitung BMI
                        </button>
                        <button onclick="window.location.href='/'"
                            class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition mt-4">
                            Kembali
                        </button>
                    </form>
                </div>

                <!-- Hasil BMI -->
                <div class="bg-white p-4 rounded-lg shadow-md border">
                    <h3 class="text-lg font-semibold text-center mb-2">
                        <span id="bmiName"> </span>
                    </h3>

                    @if (session('bmi'))
                        <h3 class="text-lg font-semibold text-center">
                            BMI untuk {{ session('gender') == 'male' ? 'Laki-laki' : 'Perempuan' }}
                        </h3>

                        <p class="text-center text-xl font-bold text-red-600">
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

                        <div class="flex justify-center space-x-6 mt-4 mb-8">
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

                        <p class="text-center mt-3 text-gray-700 text-sm">
                            Pastikan asupan kalori sesuai dengan kebutuhan harian & konsumsi makanan sehat.
                        </p>

                        <canvas id="bmiChart" class="mt-6"></canvas>
                    @else
                        <p class="text-gray-600 text-center">Hitung BMI Anda untuk melihat hasil.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <!-- resources/views/partials/footer.blade.php -->
    <footer id="Contact" class="bg-gray-800 shadow dark:bg-gray-900"
        style="background: linear-gradient(135deg, #1b5989, #164766);">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/"
                    class="flex flex-col items-center mb-4 sm:mb-0 space-y-4 rtl:space-y-reverse">
                    <div class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('public/img/LOGO PPK BEM FEB 1.png') }}" class="h-8"
                            alt="Logo GiziFun" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">GiziFun</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-white font-semibold">GiziFun</span>
                        <!-- <span class="block text-white mt-2 font-semibold">Tim BEM FEB UNDIP</span> -->
                    </div>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400 space-x-6">
                    <li class="flex flex-col justify-center items-center">
                        <a href="#" class="hover:underline mb-2">About</a>
                    </li>
                    <li class="flex flex-col justify-center items-center">
                        <a href="#" class="hover:underline mb-2">Privacy Policy</a>
                    </li>
                    <li class="flex flex-col justify-center items-center">
                        <a href="https://www.instagram.com/" class="hover:underline mb-2">Instagram</a>
                    </li>
                    <li class="flex flex-col justify-center items-center">
                        <a href="https://api.whatsapp.com/send/?phone=" class="hover:underline mb-2">WhatsApp</a>
                    </li>
                </ul>
            </div>
            <div class="sm:flex sm:items-center sm:justify-center">
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400 space-x-6">
                    <li class="flex flex-col items-center">
                        <img src="{{ asset('public/img/LOGO PPK BEM FEB 1.png') }}" class="h-8"
                            alt="Logo PKM PM" />
                    </li>
                    <li class="flex flex-col items-center">
                        <img src="{{ asset('public/img/Undip.png') }}" class="h-8 mt-2" alt="Logo Undip" />
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">&copy; 2025 PKM-PM. All Rights
                Reserved.</span>
        </div>
    </footer>

    <!-- Footer End -->

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
                fetch(`/bmi/history?name={{ session('name') }}`)
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
