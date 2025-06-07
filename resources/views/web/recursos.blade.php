@extends('layouts.kider.master')

@section('content')

    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Arte y Dibujo</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Clases</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Arte y Dibujo</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Call To Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Arte y Dibujo</h1>
                <p>En sección encontraremos recursos útiles para la clase Arte y Dibujo, lo cual contribuira al desarrollo de los niños.</p>
            </div>
            <div class="row">
                @for($i = 1; $i <= 10; $i++)
                    <div class="col-sm-6">
                        <div class="row g-0 pb-4">
                            <div class="col-lg-6 wow fadeIn bg-light rounded" data-wow-delay="0.1s" style="min-height: 400px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute w-100 h-100 rounded" src="{{ asset('vendor/kider/img/call-to-action.jpg') }}" style="/*object-fit: cover;*/">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn bg-light rounded" data-wow-delay="0.5s">
                                <div class="h-100 d-flex flex-column justify-content-center p-5">
                                    <h1 class="mb-4">Become A Teacher</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                                        Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                                    </p>
                                    <button type="button" class="btn btn-primary py-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Iniciar<i class="fa fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <button type="button" class="float-end btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="ratio  ratio-21x9">
                    <video controls>
                        <source src="{{ asset('storage/videos-recursos/01JX5FXY89P7WQ7YV3MD0R40VF.mp4') }}" type="{{ 'video/mp4' }}">
                        Your browser does not support the video tag.
                    </video>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
