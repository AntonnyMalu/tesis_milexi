<!-- Classes Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Clases Escolares</h1>
            <p>Estas clases cuentan con recursos útiles diseñados para apoyar a los profesores, facilitando su enseñanza
                y contribuyendo al mejor desarrollo académico de los niños.</p>
        </div>
        <div class="row g-4">

            @foreach($clases as $clase)

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $clase->delay }}s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3" style="width: 234px; height: 234px;">
                            <img class="img-fluid rounded-circle" src="{{ asset('storage/'.$clase->imagen) }}" alt="" style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4" href="#">{{ $clase->nombre }}</a>
                            <div class="row g-1 mb-2" style="text-align: justify;">
                                {{ substr($clase->descripcion,0, 150). '...' }}
                            </div>
                            <div class="row g-1 justify-content-between">
                                <div class="col-4">
                                    <div class="border-top border-3 border-primary pt-2">
                                        <h6 class="text-primary mb-1">Edad:</h6>
                                        <small>{{ $clase->edad_min }}-{{ $clase->edad_max }} Años</small>
                                    </div>
                                </div>
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

            @endforeach




        </div>
    </div>
</div>
<!-- Classes End -->
