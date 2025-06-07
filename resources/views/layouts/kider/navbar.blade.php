<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand">
        <h3 class="m-0 text-primary"><img class="me-3" src="{{ asset('img/logo.png') }}" alt="logo" width="30" height="30">IEE MENCA DE LEONI</h3>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="{{ route('index') }}" class="nav-item nav-link @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'index') active @endif">Inicio</a>
            <a href="{{ route('nosotros') }}" class="nav-item nav-link @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'nosotros') active @endif">Sobre Nosotros</a>
            <a href="{{ route('clases') }}" class="nav-item nav-link @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'clases') active @endif">Clases</a>
           {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="facility.html" class="dropdown-item">School Facilities</a>
                    <a href="team.html" class="dropdown-item">Popular Teachers</a>
                    <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                    <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                </div>
            </div>--}}
            <a href="{{ route('propuestas') }}" class="nav-item nav-link @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'propuestas') active @endif">Propuestas</a>
        </div>
        <a href="{{ url('/dashboard') }}" target="_blank" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Panel Administrativo<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
