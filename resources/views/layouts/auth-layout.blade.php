<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>JobBoard - @yield('title')</title>
</head>
<body>

    {{-- Page content --}}
    <main class="main">
        @yield('content')
    </main>

    <script src="js/app.js"></script>
</body>
</html>