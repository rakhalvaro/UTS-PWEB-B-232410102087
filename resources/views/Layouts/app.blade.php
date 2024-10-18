<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto">
            <a href="{{ url('/login') }}" class="text-white">Login</a> |
            <a href="{{ url('/register') }}" class="text-white">Register</a>
        </div>
    </nav>

    <div class="container mx-auto mt-10">
        @yield('content')
    </div>

    <footer class="text-center mt-10 p-4 bg-gray-200">
        &copy; 2024 - My Simple Web
    </footer>
</body>
</html>
