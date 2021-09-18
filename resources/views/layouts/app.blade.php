<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos List</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('inc.navbar')
    @include('inc.messages')
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
<footer class="text-center">
    Copyright 2021
</footer>
</html>