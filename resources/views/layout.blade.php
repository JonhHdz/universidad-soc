<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Universidad SOC</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ab58011517.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8 col-sm-12 text-center">
                        <a href="{{url('/')}}"><img src="{{ url('images/universidad-logo.png') }}" alt="" class="img-fluid logo"></a>
                    </div>
                    <div class="col-4 d-block d-sm-none bg-light navbar-light text-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
            <section class="menu">
                <div class="container">
                    <div class="row justify-content-center d-none d-sm-flex">
                        <div class="col-md-2 col-6 mb-2 text-center">
                            <a href="{{url('/certificaciones')}}"><img src="{{ url('images/vuesax-twotone-task-square.svg') }}" alt="">
                            <p>Certificaciones</p></a>
                        </div>
                        <div class="col-md-2 col-6 mb-2 text-center">
                            <a href="{{url('/')}}"><img src="{{ url('images/vuesax-twotone-menu-board.svg') }}" alt="">
                            <p>Actividades del mes</p></a>
                        </div>
                        <div class="col-md-2 mb-2  text-center">
                            <a href="{{url('/reclutamiento')}}"><img src="{{ url('images/vuesax-twotone-user-add.svg') }}" alt="">
                            <p>Reclutamiento</p></a>
                        </div>
                        <div class="col-md-2 col-6 mb-2 text-center">
                            <a href="" class="contacto_link"><img src="{{ url('images/vuesax-twotone-message-text.svg') }}" alt=""></a>
                            <p>Contacto</p>
                        </div>
                    </div>
                    <div class="row justify content-center d-block d-sm-none">
                        <div class="col-12">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                  <li class="nav-item">
                                    <a href="{{url('/certificaciones')}}" class="nav-link" href="#!">Certificaciones</a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="{{url('/')}}" class="nav-link" href="#!">Actividades del mes</a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="{{url('/reclutamiento')}}" class="nav-link" href="#!">Reclutamiento</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link contacto_link" href="#!">Contacto</a>
                                  </li>
                                </ul>
                              </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <main>
            @yield('content')
        </main>
        <footer id="contacto">
            <div class="container">
                <div class="row menu-footer justify-content-center">
                    <div class="col-12">
                        <p><strong>Soporte Universidad</strong></p>
                    </div>
                    <div class="col-12 mb-4">
                        <a href="{{url('/certificaciones')}}" class="d-sm-inline ml-sm-4 mr-sm-4 font-weight-bold" style="color: #015694;">Certificaciones</a>
                        <a href="{{url('/')}}" class="d-sm-inline ml-sm-4 mr-sm-4 font-weight-bold" style="color: #015694;">Actividades del mes</a>
                        <a href="{{url('/reclutamiento')}}" class="d-sm-inline ml-sm-4 mr-sm-4 font-weight-bold" style="color: #015694;">Reclutamiento</a>
                    </div>
                    <div class="col-md-2 col-6">
                        <a href="">Hipotecario</a>
                        <a href="">Empresarial</a>
                        <a href="">Seguros</a>
                    </div>
                    <div class="col-md-2 col-6 mb-4 mb-sm-0">
                        <a href="phone:5578845199">55 7884 5199</a>
                        <a href="phone:5579177796">55 7917 7796</a>
                        <a href="phone:5518824425">55 1882 4425 </a>
                    </div>
                    <div class="col-md-3 text-center text-sm-left">
                        <a href="mailto:universidad@socasesores.com">universidad@socasesores.com</a>
                        <a href="mailto:universidadempresarial@socasesores.com">universidadempresarial@socasesores.com</a>
                        <a href="mailto:universidadseguros@socasesores.com">universidadseguros@socasesores.com</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{ url('images/logoUniversidadBco.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12">
                        <p>Hamburgo 227, Colonia Juárez, Alcaldía Cuauhtémoc, CDMX 06600.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ url('js/main.js') }}"></script>
</html>
