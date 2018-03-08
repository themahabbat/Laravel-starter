<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/material-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <title>@yield('title', config('app.name'))</title>
  @stack('header')
</head>
<body>
  @yield('content')
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/popper.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/js/material.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @stack('footer')
</body>
</html>
