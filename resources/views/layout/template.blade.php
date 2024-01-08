<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $pagetitle }}</title>


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Sneakernime.com">
    <meta name="description" content="Jasa Lukis Sepatu Anime">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/LogoSneakernime.png') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com/') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com/') }}" crossorigin>
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flatpickr/css/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/nouislider/nouislider.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


    <!-- Jquery -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.6.4.min.js') }}"></script>

</head>

<body>

    @include('component.navbar')

    @yield('layout_content')

    @include('component.footer')


</body>

</html>
