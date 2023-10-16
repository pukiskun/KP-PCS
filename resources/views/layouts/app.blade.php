<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/sass/app.scss')
</head>

<body>
    @include('layouts.nav')
    @yield('content')
    @vite('resources/js/app.js')
    @include('sweetalert::alert')
    @vite('resources/css/app.css')
    @stack('scripts')
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
