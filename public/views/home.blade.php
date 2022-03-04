@extends('layout')

@section('content')
<div class="container home-1">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-5">
            <h1 class="mb-4 text-center text-sm-left">Profesionaliza tu labor como asesor SOC</h1>
            <p>Universidad SOC surge en el 2014, tras encontrar la necesidad de profesionalizar el servicio impartido por los asesores SOC.</p>
        </div>
        <div class="col-md-4">
            <img class="img-fluid" src="{{ url('images/Grupo_246.svg') }}" alt="">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 more-sales">
            <h3 class="white">Vende más ¡Certificándote!</h3>
            <a href="https://lgctec.com/inventario_valor/form_uni_contacto/" target="_blank" class="btn btn-success d-block">Quiero certificarme</a>
        </div>
        <div class="col-12">
            <p class="text-center mb-4 mt-4"><i><strong>“La única manera de crecer es desarrollando gente”</strong></i></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="button-group filter-button-group">
                <button data-filter="all" class="active-2">Todos</button>
                <button data-filter="webinars">Webinars</button>
                <button data-filter="cursos">Cursos</button>
                <button data-filter="certificaciones">Certificaciones</button>
                <button data-filter="aula">Aula Soc</button>
            </div>
        </div>
    </div>
    <div class="row events">
        <div class="col-md-4 grid-item webinars">
            <div class="content">
                <p><span>Webinar Hipotecario</span></p>
                <h4>Campaña única con Banorte</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        Banorte
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        04 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        10:00-11:30 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>"Alfonso Uribe Torres</strong><br>Subirector. Estrategia Hipotecaria Brokers</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item webinars">
            <div class="content">
                <p><span>Webinar Hipotecario</span></p>
                <h4>Campaña buen fin y noticias en tasas.</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        Banca MIFEL
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">11 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        09:00-10:30 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Sandra Symonds</strong><br>Directora comerial hipotecario</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item webinars">
            <div class="content">
                <p><span>Webinar Hipotecario</span></p>
                <h4>Mantente al día con Scotiabank</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        Scotiabank
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">16 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        09:00-10:30 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Olivia Martínez García</strong><br>Directora Comercial</p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Maricarmen Vallarta</strong><br>Gerente Coordinación Broker</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item webinars">
            <div class="content">
                <p><span>Webinar Hipotecario</span></p>
                <h4>Pendiente</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        HSBC
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">23 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        09:00-10:30 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Enrique Margaín</strong><br>Director Ejecutivo Crédito Hipotecario</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item webinars">
            <div class="content">
                <p><span>Webinar Hipotecario</span></p>
                <h4>Pendiente</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        Corporativo
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">30 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        09:00-10:30 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Pendiente</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cursos">
            <div class="content">
                <p><span>Cursos Hipotecario</span></p>
                <h4>Curso de especialización para nuevos asesores</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        UNIVERSIDAD
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">08 al 12 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        10:00 - 15:00 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Lizbeth Elizalde Calzada</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cursos">
            <div class="content">
                <p><span>Cursos Hipotecario</span></p>
                <h4>Curso de especialización para nuevos asesores</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        UNIVERSIDAD
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">06 al 13 de diciembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        10:00 - 15:00 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Lizbeth Elizalde Calzada</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item certificaciones">
            <div class="content">
                <p><span>Certificación PyME</span></p>
                <h4>Certificación Konfío para Broker de crédito hipotecario</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        PyME
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">05 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        02:00 Hrs.
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Mariana Rangel</strong><br>Ejecutiva de capacitación</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item certificaciones">
            <div class="content">
                <p><span>Certificación PyME</span></p>
                <h4>Certificación Arrendamiento Unifin para Broker de crédito hipotecario</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        PyME
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">17 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        10:00 Hrs.
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Mariana Rangel</strong><br>Ejecutiva de capacitación</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item certificaciones">
            <div class="content">
                <p><span>Certificación PyME</span></p>
                <h4>Certificación Uniclick para Broker hipotecario</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        PyME
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">03 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        10:00 Hrs.
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Mariana Rangel</strong><br>Ejecutiva de capacitación</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cursos">
            <div class="content">
                <p><span>Cursos PyME</span></p>
                <h4>Certificación Uniclick para Broker hipotecario</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        PyME
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">18 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        10:00 Hrs.
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Mariana Rangel</strong><br>Ejecutiva de capacitación</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cursos">
            <div class="content">
                <p><span>Cursos PyME</span></p>
                <h4>Tarjeta de crédito API</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        Konfío
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">08 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        11:00 Hrs.
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Hugo Sánchez</strong><br>Líder de Negocio y Tecnología</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cursos">
            <div class="content">
                <p><span>Cursos PyME</span></p>
                <h4>Ve por más (sin gastos administrativos) Comienza a pagar tu crédito hasta enero API</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        IBAN
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">09 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        11:00 Hrs.
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Daniela Córdova</strong><br>Subdirectora PyME</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cursos">
            <div class="content">
                <p><span>Cursos PyME</span></p>
                <h4>Ranking, Perfilamiento, Cert.Uniclick, Giros acreditados por zona</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        Uniclick
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">10 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        11:00 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Bernardo Deschamps</strong><br>Gerente de Alianzas Estratégicas</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cursos">
            <div class="content">
                <p><span>Cursos PyME</span></p>
                <h4>¿Cómo acreditar a tu cliente en menos de 1 mes?, Incidencias de devolución más recurrentes, Cómo integrar para tener un proceso ágil y rápido.</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        Banorte
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">11 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        11:00 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Francisco Delgado</strong><br>Gerente Comercial SOC</p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Adriana Domínguez</strong><br>Subdirectora PyME</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-item cursos">
            <div class="content">
                <p><span>Cursos PyME</span></p>
                <h4>Lanzamiento</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        BX+
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">12 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        11:00 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>José Alfonso Manzur</strong></p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 grid-item aula">
            <div class="content">
                <p><span>Aula SOC</span></p>
                <h4>Emprendimiento</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        SOC
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">19 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        10:00 a 11:30 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Marcus Dantus</strong></p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 grid-item certificaciones">
            <div class="content">
                <p><span>Certificación</span></p>
                <h4>Evaluación certificación</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        SOC
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">10 de noviembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        11:00 - 15:00 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Universidad</strong></p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 grid-item certificaciones">
            <div class="content">
                <p><span>Certificación</span></p>
                <h4>Evaluación certificación</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        SOC
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">1 de diciembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        11:00 - 15:00 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Universidad</strong></p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 grid-item certificaciones">
            <div class="content">
                <p><span>Certificación</span></p>
                <h4>Evaluación certificación</h4>
                <div class="info-event d-flex">
                    <p>
                        <img src="{{ url('images/vuesax-twotone-buliding.svg') }}" alt="">
                        SOC
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">1 de diciembre
                    </p>
                    <p>
                        <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                        11:00 - 15:00 Hrs
                    </p>
                </div>
                <div class="speakers d-flex align-items-start">
                    <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                    <p><strong>Universidad</strong></p>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
