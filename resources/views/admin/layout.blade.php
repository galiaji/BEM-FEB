<!DOCTYPE html>
<html>

<head>
    <title>@yield('title') - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
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
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="{{ route('admin.program.index') }}">Manage Programs</a>
        <a href="{{ route('admin.berita.index') }}">Manage News</a>
        <a href="{{ route('admin.user.index') }}">Admin</a>
        <!-- Tambahkan Logout Button -->
        <a href="{{ route('logout') }}" class="logout"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <div class="content">
        <div class="header">
            <h1>@yield('title')</h1>
        </div>
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>

</html>