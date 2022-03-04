@extends('layout')

@section('content')
<div class="container home-1">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-5">
            <h1 class="mb-4 text-center" style="font-size: 25px">“Si quieres ir rápido camina solo, si quieres ir lejos camina acompañado”</h1>
            <p>La importancia del reclutamiento radica en atraer la mayor cantidad de personas a tu empresa, ya que estas son la materia prima para consolidar un equipo de trabajo, por este motivo SOC te apoya en esta importante y compleja tarea.</p>
        </div>
        <div class="col-md-4">
            <img class="img-fluid" src="{{ url('images/Grupo_376_2.svg') }}" alt="">
        </div>
    </div>
    <div class="row justify-content-center pt-4 mt-4">
        <div class="col-md-4">
            <div class="content-reclutamiento d-flex align-items-start">
                <img src="{{ url('images/vuesax-twotone-user-add.svg') }}" alt="">
                <div class="info-reclutamiento">
                    <h6>Reclutamiento</h6>
                    <p>Publicación de vacante en OCC por dos semanas. Asesoría durante todo el proceso.</p>
                    <p><strong>Costo</strong></p>
                    <p>$500 por publicación</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="content-reclutamiento d-flex align-items-start">
                <img src="{{ url('images/vuesax-twotone-chart-success.svg') }}" alt="">
                <div class="info-reclutamiento">
                    <h6>Pruebas psicométricas</h6>
                    <p>Aplicación de pruebas a candidatos finales.</p>
                    <p><strong>Costo</strong></p>
                    <p>$150 por prueba<br><br></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <div class="content-reclutamiento d-flex align-items-start">
                <img src="{{ url('images/vuesax-twotone-box.svg') }}" alt="">
                <div class="info-reclutamiento">
                    <h6>Paquete básico</h6>
                    <p>1 publicación en OCC +<br> 2 pruebas psicométricas</p>
                    <p><strong>Costo</strong></p>
                    <p>$600 por publicación<br><br></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="content-reclutamiento d-flex align-items-start">
                <img src="{{ url('images/vuesax-twotone-box-remove.svg') }}" alt="">
                <div class="info-reclutamiento">
                    <h6>Paquete básico plus</h6>
                    <p>1 publicación en OCC +<br> 2 pruebas psicométricas +<br> 1 curso de inducción</p>
                    <p><strong>Costo</strong></p>
                    <p>$900 por publicación</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
