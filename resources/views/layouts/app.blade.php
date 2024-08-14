<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-gray-100">
        <div class="container mx-auto px-4">
            {{-- <a class="text-lg font-semibold" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a> --}}
            <div class="flex justify-end">
                <ul class="flex space-x-4">
                    @guest
                        <li>
                            <a class="text-blue-600 hover:text-blue-800" href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a class="text-blue-600 hover:text-blue-800" href="{{ route('register') }}">Register</a>
                        </li>
                    @else
                        <li>
                            <a class="text-blue-600 hover:text-blue-800" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
</body>

</html>
