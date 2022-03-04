@extends('layout')

@section('content')
<div class="container home-1">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-5">
            <h1 class="mb-4 text-center text-sm-left">Vende más<br>¡Certificándote!</h1>
            <p>La certificación,</strong> acredita los conocimientos y experiencia de los asesores y oficinas; con la finalidad de contar con una red que se distinga por la profesionalización del servicio que otorga.</p>
        </div>
        <div class="col-md-4">
            <img class="img-fluid" src="{{ url('images/Grupo_970.svg') }}" alt="">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 mb-4 mt-4">
            <h3 class="text-center">Tipos de certificación</h3>
        </div>
        <div class="col-md-3">
            <a href="{{url('/asesor-certificado')}}">
                <div class="content-certificacion color-1">
                    <img src="{{url('images/vuesax-twotone-user-tick.svg')}}" alt="" class="img-fluid">
                    <p>Certificación<br> Asesor hipotecario</p>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{url('/asesor-empresarial')}}">
                <div class="content-certificacion color-1">
                    <img src="{{url('images/vuesax-twotone-user-tick.svg')}}" alt="" class="img-fluid">
                    <p>Certificación<br> Asesor empresarial</p>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a>
                <div class="content-certificacion color-2">
                    <img src="{{url('images/vuesax-twotone-user-tick.svg')}}" alt="" class="img-fluid">
                    <p>Certificación<br> Asesor seguros</p>
                </div>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <a href="{{ url('/oficina-hipotecario') }}">
                <div class="content-certificacion color-1">
                    <img src="{{url('images/vuesax-twotone-buildings.svg')}}" alt="" class="img-fluid">
                    <p>Certificación<br> Crédito hipotecario</p>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/oficina-empresarial') }}">
                <div class="content-certificacion color-1">
                    <img src="{{url('images/vuesax-twotone-buildings.svg')}}" alt="" class="img-fluid">
                    <p>Certificación oficina<br> Crédito empresarial</p>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/oficina-seguros') }}">
                <div class="content-certificacion color-2">
                    <img src="{{url('images/vuesax-twotone-buildings.svg')}}" alt="" class="img-fluid">
                    <p>Certificación<br> oficina seguros</p>
                </div>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 mb-4 mt-4">
            <h3 class="text-center">Beneficios</h3>
        </div>
        <div class="col-md-3">
            <div class="content-certificacion-2 d-flex align-items-center position-relative">
                <img src="{{url('images/vuesax-twotone-medal.svg')}}" alt="" class="img-fluid">
                <p>Reconocimiento en nuestros principales eventos.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="content-certificacion-2 d-flex align-items-center position-relative">
                <img src="{{url('images/vuesax-twotone-cpu-setting.svg')}}" alt="" class="img-fluid">
                <p>Acceso a herramientas en pruebas piloto.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="content-certificacion-2 d-flex align-items-center position-relative">
                <img src="{{url('images/vuesax-twotone-monitor.svg')}}" alt="" class="img-fluid">
                <p>Distintivo en micro sitios.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="content-certificacion-2 d-flex align-items-center position-relative">
                <img src="{{url('images/vuesax-twotone-brush.svg')}}" alt="" class="img-fluid">
                <p>Paquete diferenciado de Branding para tu oficina.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="content-certificacion-2 d-flex align-items-center position-relative">
                <img src="{{url('images/vuesax-twotone-lovely.svg')}}" alt="" class="img-fluid">
                <p>Regalos y promociones.</p>
            </div>
        </div>
        <div class="col-12">
            <p class="text-center mb-4 mt-4"><i>Espera próximamente más beneficios…</i></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 mb-4 mt-4">
            <h3 class="text-center">¿Quién certifica?</h3>
            <p class="text-center">Sinergia Operadora de Crédito, a través de Universidad SOC</p>
        </div>
    </div>
</div>
@endsection
