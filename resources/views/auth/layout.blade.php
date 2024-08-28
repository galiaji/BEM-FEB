<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 200px;
            float: left;
            background-color: #333;
            height: 100vh;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .header {
            padding: 10px;
            background-color: #333;
            color: white;
            text-align: center;
        }
    </style> --}}
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-success {
            animation: fadeIn 0.5s ease-out;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 10;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            /* Dimmed background */
        }

        .modal-content {
            background-color: #1f2937;
            /* bg-gray-800 */
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #535353;
            width: 50%;
            /* Smaller modal */
            border-radius: 0.5rem;
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: bold;
            color: #f6f3f3;
            /* Text color for close button */
        }

        .close:hover,
        .close:focus {
            color: #d1d5db;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-gray-200 dark:bg-gray-800">
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
