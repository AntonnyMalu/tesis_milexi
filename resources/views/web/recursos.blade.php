@extends('layouts.kider.master')

@section('content')

    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">{{ $clase->nombre }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('clases') }}">Clases</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $clase->nombre }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Call To Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp @if($recursos->isEmpty())) d-none @endif" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">{{ $clase->nombre }}</h1>
                <p>En sección encontraremos recursos útiles para la clase {{ $clase->nombre }}, lo cual contribuira al desarrollo de los niños.</p>
            </div>
            <div class="row">
                @foreach($recursos as $recurso)
                    <div class="col-sm-6">
                        <div class="row g-0 pb-4">
                            <div class="col-lg-6 wow fadeIn bg-light rounded" data-wow-delay="0.1s" style="min-height: 400px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute w-100 h-100 rounded" src="{{ asset('storage/'.$recurso->imagen) }}" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn bg-light rounded" data-wow-delay="0.5s">
                                <div class="h-100 d-flex flex-column justify-content-center p-5">
                                    <h3 class="mb-4 text-uppercase">{{ $recurso->nombre }}</h3>
                                    <p class="mb-4" style="text-align: justify;">{{ $recurso->descripcion }}</p>
                                    <input id="url_video_{{ $recurso->id }}" type="hidden" value="{{ asset('storage/'.$recurso->video) }}">
                                    <button type="button" onclick="getvideo({{ $recurso->id }})" class="btn btn-primary py-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Iniciar<i class="fa fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">

                    <div class="row justify-content-end">
                        <button type="button" class="btn-close me-4 mt-1" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="ratio  ratio-21x9">
                        <video id="hls-video" controls>
                            <source id="change-src" src="" type="">
                            Su navegador no soporta la etiqueta de vídeo.
                        </video>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script type="application/javascript">
        let video = document.getElementById('hls-video');
        let source = document.getElementById('change-src');

        function getvideo(id) {
            let url_video = document.getElementById('url_video_' + id).value;
            video.pause();
            source.setAttribute('src', url_video);
            video.load();
        }

        $('#exampleModal').on('hidden.bs.modal', function () {
            // Código a ejecutar después de que el modal se cierra
            video.pause();
            video.currentTime = 0;
            console.log('El modal se cerró');
        });

        console.log('hi!');
    </script>
@endsection
