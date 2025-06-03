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
