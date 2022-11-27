<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css"> -->
    <link href="{{ asset('css/client/bootstrap.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/client/style.css') }}">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>
<body>
<div class="container">
    @include('client.includes.header')
    @yield('content')

    @include('client.includes.footer')
</div>
<script src="{{ asset('js/client/bootstrap.min.js') }}"></script>
@yield('js')
</body>
</html>
