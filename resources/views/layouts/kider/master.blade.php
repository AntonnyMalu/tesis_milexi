<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!--<link href="img/favicon.ico" rel="icon">-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons//favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons//favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons//favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('vendor/kider/public/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/kider/public/vendor/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('vendor/kider/lib/animate/animate.min.css')  }}" rel="stylesheet">
    <link href="{{ asset('vendor/kider/lib/owlcarousel/assets/owl.carousel.min.css')  }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('vendor/kider/css/bootstrap.min.css')  }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('vendor/kider/css/style.css') }}" rel="stylesheet">
    @livewireStyles
    @vite(['resources/js/app.js'])
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.kider.navbar')
    <!-- Navbar End -->

    @yield('content')


    <!-- Footer Start -->
    @include('layouts.kider.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="{{ asset('vendor/kider/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('vendor/kider/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/kider/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('vendor/kider/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('vendor/kider/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/kider/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('vendor/kider/js/main.js') }}"></script>
@livewireScripts
</body>

</html>
