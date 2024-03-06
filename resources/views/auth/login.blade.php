@extends('layouts.login')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card overflow-hidden">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="p-lg-5 p-4 auth-one-bg h-100">
                            <div class="bg-overlay"></div>
                            <div class="position-relative h-100 d-flex flex-column">
                                <div class="mb-4">
                                    <a href="index.html" class="d-block">
                                        <img src="assets/images/logo-light.png" alt="" height="18">
                                    </a>
                                </div>
                                <div class="mt-auto">
                                    <div class="mb-3">
                                        <i class="ri-double-quotes-l display-4 text-success"></i>
                                    </div>

                                    <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner text-center text-white-50 pb-5">
                                            <div class="carousel-item active">
                                                <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                            </div>
                                            <div class="carousel-item">
                                                <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                            </div>
                                            <div class="carousel-item">
                                                <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="p-lg-5 p-4">
                            <div>
                                <h5 class="text-primary">Hey! Bienvenid@ nuevamente</h5>
                                <p class="text-muted">Inicia sesión para continuar</p>
                            </div>

                            <div class="mt-4">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Nombre de usuario</label>
                                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="username" placeholder="Introduce tu nombre de usuario">
                                   
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="auth-pass-reset-cover.html" class="text-muted">¿Olvidaste tu contraseña?</a>
                                        </div>
                                        <label class="form-label" for="password-input">Contraseña</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">

                                            <input name="password" type="password" class="form-control pe-5 password-input @error('password') is-invalid @enderror" placeholder="Introduce tu contraseña" id="password-input">

                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>

                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </div>


                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Iniciar sesión</button>
                                    </div>



                                </form>
                            </div>

                            <div class="mt-5 text-center">
                                <p class="mb-0">¿No tienes una cuenta? <a href="auth-signup-cover.html" class="fw-semibold text-primary text-decoration-underline"> Registrate</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
