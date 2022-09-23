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
            background-color: #2f2f2f;
            color: #f2f2f2;
        }
    </style>
</head>

<body>

    <div>
        <a href="{{route('home')}}"> Home <a />
    </div>

    <hr>

    <div class="">
        @yield('content')
    </div>

</body>

</html>
