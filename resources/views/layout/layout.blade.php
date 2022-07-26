<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title_page') </title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset("js/app.js") }}"></script>
</head>
<body>
    <header>
        @include('partial.header')
    </header>

    <main>
        @yield('page_content')
    </main>

    <footer>
        @include('partial.footer')
    </footer>
</body>
</html>