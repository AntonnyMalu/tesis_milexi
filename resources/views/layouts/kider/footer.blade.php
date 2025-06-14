<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Ponte en Contacto</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>2302 San Juan de los Morros</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0246-8967534</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>ieemencadeleoni@gmail.com</p>
                {{--<div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>--}}
            </div>

            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Enlaces rápidos</h4>
                <a class="btn btn-link text-white-50" href="{{ route('nosotros') }}">Sobre nosotros</a>
                <a class="btn btn-link text-white-50" href="{{ route('clases') }}">Clases</a>
                <a class="btn btn-link text-white-50" href="{{ route('propuestas') }}">Propuestas</a>
            </div>

            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-end mt-4">
                <img src="{{ asset('img/logo_fondo.png') }}" alt="logo" width="55%">
            </div>

            {{--<div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Newsletter</h3>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>--}}

        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy;  Proyecto de Tesis, <a class="border-bottom" href="#">Ing. Mixlesis Torrealba.</a>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                </div>
                {{--<div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
</div>
