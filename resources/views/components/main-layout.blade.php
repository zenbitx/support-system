@props([
    'title' => '',
    'meta_title' => '',
    'meta_description' => '',
    'meta_keywords' => '',
])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/icon-logo/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('assets/images/icon-logo/logo.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/icon-logo/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/icon-logo/favicon-16x16.png')}}">
	<link rel="manifest" href="{{asset('assets/images/icon-logo/manifest.json')}}">
    
    <title>@yield('title', 'Home') - {{ config('app.name', 'Laravel') }}</title>

    {{-- Bootstrap / Font Awesome --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @stack('css_link')
    @stack('css')
</head>

<body class="min-vh-100 d-flex flex-column justify-content-center">

    {{ $slot }}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    @stack('scripts')

</body>
</html>