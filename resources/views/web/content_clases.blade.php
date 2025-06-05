<!-- Classes Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Clases Escolares</h1>
            <p>Estas clases cuentan con recursos útiles diseñados para apoyar a los profesores, facilitando su enseñanza y contribuyendo al mejor desarrollo académico de los niños.</p>
        </div>
        <div class="row g-4">

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="classes-item">
                    <div class="bg-light rounded-circle w-75 mx-auto p-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('vendor/kider/img/classes-1.jpg') }}" alt="">
                    </div>
                    <div class="bg-light rounded p-4 pt-5 mt-n5">
                        <a class="d-block text-center h3 mt-3 mb-4" href="">Arte y Dibujo</a>
                        <div class="row g-1 mb-2" style="text-align: justify;">
                            @php($texto = 'Arte y dibujo se enfoca en desarrollar la creatividad y la expresión visual a través de diversas técnicas y materiales.')
                            {{ substr($texto,0, 180). '...' }}
                        </div>
                        <div class="row g-1 justify-content-between">
                            <div class="col-4">
                                <div class="border-top border-3 border-primary pt-2">
                                    <h6 class="text-primary mb-1">Edad:</h6>
                                    <small>3-5 Años</small>
                                </div>
                            </div>
                            {{--<div class="col-4">
                                <div class="border-top border-3 border-success pt-2">
                                    <h6 class="text-success mb-1">Time:</h6>
                                    <small>9-10 AM</small>
                                </div>
                            </div>--}}
                            <div class="col-4">
                                <div class="border-top border-3 border-warning pt-2">
                                    <h6 class="text-warning mb-1">Recursos:</h6>
                                    <small>30 Videos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="classes-item">
                    <div class="bg-light rounded-circle w-75 mx-auto p-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('vendor/kider/img/classes-2.jpg') }}" alt="">
                    </div>
                    <div class="bg-light rounded p-4 pt-5 mt-n5">
                        <a class="d-block text-center h3 mt-3 mb-4" href="">Gestión del Color</a>
                        <div class="row g-1 mb-2" style="text-align: justify;">
                            @php($texto = 'Los niños aprenderan a identificar los colores y sus diferentes combinaciones.')
                            {{ substr($texto,0, 180). '...' }}
                        </div>

                        <div class="row g-1 justify-content-between">
                            <div class="col-4">
                                <div class="border-top border-3 border-primary pt-2">
                                    <h6 class="text-primary mb-1">Edad:</h6>
                                    <small>3-5 Años</small>
                                </div>
                            </div>
                            {{--<div class="col-4">
                                <div class="border-top border-3 border-success pt-2">
                                    <h6 class="text-success mb-1">Time:</h6>
                                    <small>9-10 AM</small>
                                </div>
                            </div>--}}
                            <div class="col-4">
                                <div class="border-top border-3 border-warning pt-2">
                                    <h6 class="text-warning mb-1">Recursos:</h6>
                                    <small>30 Videos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="classes-item">
                    <div class="bg-light rounded-circle w-75 mx-auto p-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('vendor/kider/img/classes-3.jpg') }}" alt="">
                    </div>
                    <div class="bg-light rounded p-4 pt-5 mt-n5">
                        <a class="d-block text-center h3 mt-3 mb-4" href="">Atletismo y Danza</a>
                        <div class="row g-1 mb-2" style="text-align: justify;">
                            @php($texto = 'Los niños aprenderan a identificar los colores y sus diferentes combinaciones.')
                            {{ substr($texto,0, 180). '...' }}
                        </div>

                        <div class="row g-1justify-content-between">
                            <div class="col-4">
                                <div class="border-top border-3 border-primary pt-2">
                                    <h6 class="text-primary mb-1">Edad:</h6>
                                    <small>3-5 Años</small>
                                </div>
                            </div>
                            {{--<div class="col-4">
                                <div class="border-top border-3 border-success pt-2">
                                    <h6 class="text-success mb-1">Time:</h6>
                                    <small>9-10 AM</small>
                                </div>
                            </div>--}}
                            <div class="col-4">
                                <div class="border-top border-3 border-warning pt-2">
                                    <h6 class="text-warning mb-1">Recursos:</h6>
                                    <small>30 Videos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="classes-item">
                    <div class="bg-light rounded-circle w-75 mx-auto p-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('vendor/kider/img/classes-4.jpg') }}" alt="">
                    </div>
                    <div class="bg-light rounded p-4 pt-5 mt-n5">
                        <a class="d-block text-center h3 mt-3 mb-4" href="">Lenguaje y Habla</a>
                        <div class="row g-1 mb-2" style="text-align: justify;">
                            @php($texto = 'Los niños aprenderan a identificar los colores y sus diferentes combinaciones.')
                            {{ substr($texto,0, 180). '...' }}
                        </div>

                        <div class="row g-1 justify-content-between">
                            <div class="col-4">
                                <div class="border-top border-3 border-primary pt-2">
                                    <h6 class="text-primary mb-1">Edad:</h6>
                                    <small>3-5 Años</small>
                                </div>
                            </div>
                            {{--<div class="col-4">
                                <div class="border-top border-3 border-success pt-2">
                                    <h6 class="text-success mb-1">Time:</h6>
                                    <small>9-10 AM</small>
                                </div>
                            </div>--}}
                            <div class="col-4">
                                <div class="border-top border-3 border-warning pt-2">
                                    <h6 class="text-warning mb-1">Recursos:</h6>
                                    <small>30 Videos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="classes-item">
                    <div class="bg-light rounded-circle w-75 mx-auto p-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('vendor/kider/img/classes-5.jpg') }}" alt="">
                    </div>
                    <div class="bg-light rounded p-4 pt-5 mt-n5">
                        <a class="d-block text-center h3 mt-3 mb-4" href="">Religión e Historia</a>
                        <div class="row g-1 mb-2" style="text-align: justify;">
                            @php($texto = 'Los niños aprenderan a identificar los colores y sus diferentes combinaciones.')
                            {{ substr($texto,0, 180). '...' }}
                        </div>

                        <div class="row g-1 justify-content-between">
                            <div class="col-4">
                                <div class="border-top border-3 border-primary pt-2">
                                    <h6 class="text-primary mb-1">Edad:</h6>
                                    <small>3-5 Años</small>
                                </div>
                            </div>
                            {{--<div class="col-4">
                                <div class="border-top border-3 border-success pt-2">
                                    <h6 class="text-success mb-1">Time:</h6>
                                    <small>9-10 AM</small>
                                </div>
                            </div>--}}
                            <div class="col-4">
                                <div class="border-top border-3 border-warning pt-2">
                                    <h6 class="text-warning mb-1">Recursos:</h6>
                                    <small>30 Videos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="classes-item">
                    <div class="bg-light rounded-circle w-75 mx-auto p-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('vendor/kider/img/classes-6.jpg') }}" alt="">
                    </div>
                    <div class="bg-light rounded p-4 pt-5 mt-n5">
                        <a class="d-block text-center h3 mt-3 mb-4" href="">Conocimientos</a>
                        <div class="row g-1 mb-2" style="text-align: justify;">
                            @php($texto = 'Los niños aprenderan a identificar los colores y sus diferentes combinaciones.')
                            {{ substr($texto,0, 180). '...' }}
                        </div>

                        <div class="row g-1 justify-content-between">
                            <div class="col-4">
                                <div class="border-top border-3 border-primary pt-2">
                                    <h6 class="text-primary mb-1">Edad:</h6>
                                    <small>3-5 Años</small>
                                </div>
                            </div>
                            {{--<div class="col-4">
                                <div class="border-top border-3 border-success pt-2">
                                    <h6 class="text-success mb-1">Time:</h6>
                                    <small>9-10 AM</small>
                                </div>
                            </div>--}}
                            <div class="col-4">
                                <div class="border-top border-3 border-warning pt-2">
                                    <h6 class="text-warning mb-1">Recursos:</h6>
                                    <small>30 Videos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Classes End -->
