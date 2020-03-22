<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>JobBoard - @yield('title')</title>
</head>
<body>
    {{-- Header --}}
    @include('header')

    {{-- Page content --}}
    <main class="main">
        @yield('page-content')
    </main>

    {{-- Footer --}}
    @include('footer')

    {{-- Modals --}}
    @include('modal-login')
    @include('modal-register')

    <script src="js/app.js"></script>
</body>
</html>