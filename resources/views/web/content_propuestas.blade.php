<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Realizar Propuesta</h1>
            <p>En este espacio, podrás compartir propuestas de contenido educativo que contribuyan a mejorar la calidad de las clases, como presentaciones, videos y cuestionarios. </p>
        </div>
        <div class="bg-light rounded">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 d-flex flex-column justify-content-center p-5">
                        <h1 class="mb-4">Enviar Propuesta</h1>
                        <form wire:submit="save"  class="needs-validation">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" wire:model="nombre" class="form-control border-0 @error('nombre') is-invalid @enderror" id="gname" placeholder="Nombre">
                                        <label for="gname">Nombre</label>
                                        <div class="invalid-feedback">
                                            <span class="">@error('nombre') {{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" wire:model="correo" class="form-control border-0 @error('correo') is-invalid @enderror" id="gmail" placeholder="Email">
                                        <label for="gmail">Correo</label>
                                        <div class="invalid-feedback">
                                            <span class="">@error('correo') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" wire:model="url" class="form-control border-0 @error('nombre') is-invalid @enderror" id="gurl" placeholder="Dirección URL">
                                        <label for="gurl">URL del recurso</label>
                                        <div class="invalid-feedback">
                                            <span class="">@error('url') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea wire:model="descripcion" class="form-control border-0 @error('descripcion') is-invalid @enderror" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Descripción</label>
                                        <div class="invalid-feedback">
                                            <span class="">@error('descripcion') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ asset('vendor/kider/img/appointment.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
