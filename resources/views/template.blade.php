<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task App</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: rgb(23, 23, 23);
            color: rgb(212, 212, 212);
        }
    </style>
</head>

<body class="relative">

    <div class="flex justify-between bg-neutral-800 sticky top-0 text-3xl mx-2 p-3">
        <a href="{{route('home')}}">Home</a>

        @auth
        <a href="{{route('dashboard')}}">Dashboard</a>
        @else
        <a href="{{route('login')}}">Login</a>
        @endauth
    </div>

    <div class="">
        @yield('content')
    </div>

</body>

</html>
