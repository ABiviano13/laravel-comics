<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b59a747f9a.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>

    @include('partials.header')

    <main>
        <!-- main -->
        @yield('contents')
    </main>

    <footer>
        {{-- footer --}}
        @yield('footer')
    </footer>

</body>
</html>