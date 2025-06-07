@extends('layouts.kider.master')

@section('content')

    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Sobre Nosotros</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Sobre Nosotros</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-4">Instituto de Educación Especial “Doña Menca de Leoni”</h2>
                    <p style="text-align: justify;">El Instituto de Educación Especial “Doña Menca de Leoni”, fue fundado el 25 de Abril de 1975.
                        Surge por la inquietud de una madre Doña Irma Echezuria que tenía un hijo con necesidades especiales,
                        quien recurrió a los entes gubernamentales con el fin de beneficiar a su hijo y a otros niños desasistidos.</p>
                    <h3 class="mb-4">Misión</h3>
                    <p style="text-align: justify;">La Misión del Instituto de Educación Especial “Doña Menca de Leoni” es proporcionar una educación inclusiva y de
                        calidad a niños, niñas y adolescentes con diversidad funcional, fomentando su desarrollo integral y habilidades sociales. A través de un enfoque
                        humanista, buscamos crear un ambiente de aprendizaje que promueva la perseverancia, la empatía y el respeto*, y que involucre a las familias y la
                        comunidad en el proceso educativo, garantizando así el interés superior de nuestros estudiantes.</p>
                    <h3 class="mb-4">Visión</h3>
                    <p style="text-align: justify;">La Visión del Instituto de Educación especial “Doña Menca de Leoni” es ser reconocido como un referente en la educación especial
                        en la región, promoviendo la integración social y escolar de nuestros estudiantes. Nuestro objetivo es contribuir al desarrollo de una
                        sociedad más inclusiva y solidaria, donde cada niño y niña con diversidad funcional tenga la oportunidad de alcanzar su máximo potencial.</p>
                    <h3 class="mb-4">Valores</h3>
                    <ul style="text-align: justify;">
                        <li><strong>Compromiso:</strong> Con el desarrollo y bienestar de nuestros estudiantes.</li>
                        <li><strong>Inclusión:</strong> Fomentar un ambiente donde todos se sientan bienvenidos y valorados.</li>
                        <li><strong>Colaboración:</strong> Trabajar de la mano con familias y la comunidad para lograr un impacto positivo.</li>
                        <li><strong>Respeto:</strong> Valorar las diferencias individuales y promover la dignidad de cada estudiante.</li>
                    </ul>

                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6 d-none">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="{{ asset('vendor/kider/img/testimonial-1.jpg') }}" alt="" style="width: 45px; height: 45px;">
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">Lcda. Gloria Menas</h6>
                                    <small>Directora</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{ asset('vendor/kider/img/about-1.jpg') }}" alt="">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('vendor/kider/img/about-2.jpg') }}" alt="">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('vendor/kider/img/about-3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


@endsection
