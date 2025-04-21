<!-- resources/views/partials/header.blade.php -->
<header>
    <nav id="navbar"
        class="bg-white bg-opacity-10 backdrop-blur-md shadow-md z-50 fixed top-0 left-0 right-0 transition-all duration-300">
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
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
                    <img class="w-10 h-10 rounded-full"
                        src="{{ auth('web')->user()->profile_photo_url ?? 'https://via.placeholder.com/40' }}"
                        alt="User">
                </button>

                <!-- Dropdown Menu -->
                <div id="user-dropdown"
                    class="absolute right-0 mt-2 w-48 hidden bg-white shadow-lg rounded-lg transition-opacity duration-300 opacity-0 z-50">
                    <div class="px-4 py-3">
                        <span class="block text-sm font-medium text-gray-800">{{ auth('web')->user()->name }}</span>
                        <span class="block text-sm text-gray-500">{{ auth('web')->user()->email }}</span>
                    </div>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Dashboard</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Settings</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Earnings</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="block px-4 py-2">
                        @csrf
                        <button type="submit" class="w-full text-left text-gray-800 hover:bg-gray-100">Sign
                            out</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const navbarMenu = document.getElementById('navbar-default');
        const userMenuButton = document.getElementById('user-menu-button');
        const userDropdown = document.getElementById('user-dropdown');
        const navbar = document.getElementById('navbar');
        const navText = document.getElementById('nav-text');
        const navLinks = document.querySelectorAll('.nav-link');

        menuToggle.addEventListener('click', function() {
            navbarMenu.classList.toggle('hidden');
        });

        userMenuButton.addEventListener('click', function(event) {
            event.stopPropagation();
            userDropdown.classList.toggle('hidden');
            userDropdown.classList.toggle('opacity-0');
        });

        document.addEventListener('click', function(event) {
            if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                userDropdown.classList.add('hidden');
                userDropdown.classList.add('opacity-0');
            }
        });

        window.addEventListener('scroll', function() {
            if (window.scrollY > 700) {
                navbar.classList.add('bg-white', 'bg-opacity-90');
                navbar.classList.remove('bg-opacity-10');
                navText.classList.add('text-gray-900');
                navText.classList.remove('text-gray-800');
                navLinks.forEach(link => link.classList.add('text-gray-900'));
            } else {
                navbar.classList.remove('bg-white', 'bg-opacity-90');
                navbar.classList.add('bg-opacity-10');
                navText.classList.remove('text-gray-900');
                navText.classList.add('text-gray-800');
                navLinks.forEach(link => link.classList.remove('text-gray-900'));
            }
        });
    });
</script>
