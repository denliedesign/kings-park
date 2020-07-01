<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Kings Park Dancer Center | New York')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        <strong>Success</strong> {{ session()->get('message') }}
    </div>
@endif

@include('includes.header')
@yield('content')
@include('includes.footer')

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="/js/rellax.min.js"></script>
<script>
    var rellax = new Rellax('.rellax');
</script>

</body>
</html>
