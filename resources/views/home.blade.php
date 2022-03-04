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
            <a href="{{url('/certificaciones')}}" target="_blank" class="btn btn-success d-block">Quiero certificarme</a>
        </div>
        <div class="col-12">
            <p class="text-center mb-4 mt-4"><i><strong>“La única manera de crecer es desarrollando gente”</strong> </i></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="button-group filter-button-group">
                <button data-filter="webinars" id="f-w">Webinars</button>
                <button data-filter="cursos" id="f-c">Cursos</button>
                <button data-filter="certificaciones" id="f-cer">Certificaciones</button>
                <button data-filter="promocion" class="b-f">Promoción y Capacitación</button>
                <button data-filter="semana" class="b-f">Semana Empresarial</button>
                <button data-filter="aula" class="b-f">Aula Soc</button>
            </div>
            <div class="button-group filter-button-group webinar-group d-none">
                <button data-filter="webinar-hipotecario">Hipotecario</button>
                <button data-filter="webinar-empresarial">Empresarial</button>
                <button data-filter="webinar-seguros">Seguros</button>
            </div>
            <div class="button-group filter-button-group cursos-group d-none">
                <button data-filter="cursos-hipotecario">Hipotecario</button>
                <button data-filter="cursos-empresarial">Empresarial</button>
                <button data-filter="cursos-seguros">Seguros</button>
            </div>
            <div class="button-group filter-button-group certificaciones-group d-none">
                <button data-filter="certificaciones-hipotecario">Hipotecario</button>
                <button data-filter="certificaciones-empresarial">Empresarial</button>
                <button data-filter="certificaciones-seguros">Seguros</button>
            </div>
        </div>
    </div>
    
    @if(!empty($events))
    
    <div class="row events">
        @foreach($events as $key => $event)
        @php
            $date = !empty($event['date_start']) ? strtotime($event['date_start']) : '';
            $date_2 = !empty($event['date_end']) ? strtotime($event['date_end']) : '';
            $time = !empty($event['schedule_from']) ? strtotime($event['schedule_from']) : '';
            $time_2 = !empty($event['schedule_to']) ? strtotime($event['schedule_to']) : '';
        @endphp
        
            <div class="col-md-4 mb-4 grid-item {{ 't-'.(1 + intval($key/6)).' '.strtolower(($types[$event['type']] == 'Webinar' ? 'webinars' : $types[$event['type']]).' '.$types[$event['type']].'-'.$event['category']) }}" {{ (intval($key/6) > 0) ? 'style=display:none;' : '' }}>
                <div class="content mb-0 h-100" id="o-{{ $key+1 }}">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <a href="" data-id="{{ $key+1 }}" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <div class="mb-3">
                            <p><span>{{ $event['type'].' '.$event['category'] }}</span></p>
                            <h4>{{ $event['name'] }}</h4>
                            <div class="info-event d-flex flex-column">
                                @if(!empty($date))
                                
                                <p>
                                    <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                    {{ date('d',$date).' de '.$meses[date('n',$date) - 1].
                                       (!empty($date_2) && date('Y-m-d',$date) !== date('Y-m-d',$date_2)  ? ' al '.date('d',$date_2).' de '.$meses[date('n',$date_2) - 1] : '') }}
                                </p>
                                @endif
                                @if(!empty($time))
                                
                                <p>
                                    <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                    {{ date('H:i',$time).(!empty($time_2) ? ' - '.date('H:i',$time_2) : '') }} Hrs
                                </p>
                                @endif
                                
                            </div>
                            <div class="speakers d-flex align-items-start flex-grow-1">
                                <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                                <div>
                                    @php $speakers = @unserialize($event['speakers']);
                                          $appointments = @unserialize($event['appointment']);
                                    @endphp
                                    @if(!empty($speakers) && count($speakers) > 0)
                                    @for($i = 0; $i < count($speakers); $i++)
                                    <p><strong>{{ @$speakers[$i] }}</strong> {{ @$appointments[$i] }}</p>
                                    @endfor 
                                    @else
                                    <p><strong>Corporativo</strong></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if(!empty($event['id_institution']))
                            @if(!empty($institutions[$event['id_institution']]['image']))
                        <img class="bank" src="{{ URL::asset('images/institutions/'.$institutions[$event['id_institution']]['image']) }}" title="{{ $institutions[$event['id_institution']]['name'] }}" alt="{{ $institutions[$event['id_institution']]['name'] }}" />
                            @else
                        <span>{{ $institutions[$event['id_institution']]['name'] }}</span>
                            @endif
                        @endif
                    
                    </div>
                </div>
                <div class="content-back d-none h-100" id="b-{{ $key+1 }}">
                    <a href="" data-id="{{ $key+1 }}" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                    @if(!empty($event['description']))
                    <p class="mb-4"><b>{{ $event['description'] }}</b></p>
                    @endif
                    
                </div>
            </div>
        @endforeach
        
        <?php /*
                <div class="col-md-4 grid-item t-1 webinars webinar-hipotecario">
                    <div class="content" id="o-1">
                        <a href="" data-id="1" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Hipotecario</span></p>
                        <h4>Plática Fiscal/ Sesión II</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 01 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                09:00-10:30 Hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Pendiente</strong> </p>
                        </div>
                        <img class="bank" src="{{ url('images/SOC.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-1">
                        <a href="" data-id="1" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>"Los cambios más relevantes para el sector hipotecario independientes sobre la Reforma 2022.Lo que viene y representa en términos de nuestra industria"</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-1 webinars webinar-hipotecario">
                    <div class="content" id="o-2">
                        <a href="" data-id="2" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Hipotecario</span></p>
                        <h4>Perspectivas del mercado Hipotecario</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 08 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                09:00-10:30 Hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Ricardo García Conde</strong>  Director Ejecutivo de Crédito Hipotecario en Citibanamex</p>
                        </div>
                        <img class="bank" src="{{ url('images/Grupo_307@2x.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-2">
                        <a href="" data-id="2" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Nos acompaña un experto para hablarnos del panorama hipotecario y de la situación actual de Citibanamex</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-1 webinars webinar-hipotecario">
                    <div class="content" id="o-3">
                        <a href="" data-id="3" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Hipotecario</span></p>
                        <h4>Ajuste en modelo de riesgos, check list para 1ra y 2da etapa.</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  15 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 09:00-10:30 Hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Rosy Ortega</strong>  Subdirector de Estratégia Hipotecaria canal Broker</p>
                        </div>
                        <img class="bank" src="{{ url('images/Grupo_185@2x.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-3">
                        <a href="" data-id="3" class="close-grid"><img src="{{ url('images/Grupo_185@2x.png') }}"></a>
                        <p class="mb-4"><b>Ven y conoce los ajustes implementados por Banorte en su modelo de riesgos. Actualízate</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-1 webinars webinar-hipotecario">
                    <div class="content" id="o-4">
                        <a href="" data-id="4" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Hipotecario</span></p>
                        <h4>Campañas SOC</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  22 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 09:00-10:30 Hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Rosy Ortega</strong>  Subdirector de Estratégia Hipotecaria canal Broker</p>
                        </div>
                        <img class="bank" src="{{ url('images/SOC.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-4">
                        <a href="" data-id="4" class="close-grid"><img src="{{ url('images/Grupo_185@2x.png') }}"></a>
                        <p class="mb-4"><b>Mantente al día con als campañas que tenemos para tus clientes y socios comerciales.</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-1 cursos cursos-hipotecario">
                    <div class="content" id="o-5">
                        <a href="" data-id="5" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Cursos Hipotecario</span></p>
                        <h4>Curso de Inducción asistido para nuevos asesores</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 08 al 15 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 10:00 - 15:00 Hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Evelyn Sánchez</strong> Ejecutivo de capacitación</p>
                        </div>
                        <img class="bank" src="{{ url('images/SOC.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-5">
                        <a href="" data-id="5" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Universidad SOC te ayudará a maximizar el potencial de los asesores de nuevo ingreso, mostrándoles los conocimientos necesarios para convertirse en asesores de excelencia.</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-1 cursos cursos-hipotecario">
                    <div class="content" id="o-6">
                        <a href="" data-id="6" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Cursos Hipotecario</span></p>
                        <h4>Capacitación Manejo de objeciones </h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 07 al 14 de marzo
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 10:00 - 15:00 Hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Evelyn Sánchez</strong> Ejecutivo de capacitación</p>
                        </div>
                        <img class="bank" src="{{ url('images/SOC.png') }}">
                    </div>
                     <div class="content-back d-none" id="b-6">
                        <a href="" data-id="6" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Universidad SOC te ayudará a maximizar el potencial de los asesores de nuevo ingreso, mostrándoles los conocimientos necesarios para convertirse en asesores de excelencia.</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-2 certificaciones certificaciones-hipotecario" style="display: none;">
                    <div class="content" id="o-7">
                        <a href="" data-id="7" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Certificaciones Hipotecario</span></p>
                        <h4>Certificación SOC</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 02 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11:00 - 15:00 Hrs
                            </p>
                        </div>
                        <img class="bank" src="{{ url('images/SOC.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-7">
                        <a href="" data-id="7" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Distingamos a la red como profesionistas hipotecarios que cuentan con los elementos necesarios para otorgar un servicio de calidad.</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-2 certificaciones certificaciones-hipotecario" style="display: none;">
                    <div class="content" id="o-8">
                        <a href="" data-id="8" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Certificaciones Hipotecario</span></p>
                        <h4>Certificación SOC</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 02 de marzo
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11:00 - 15:00 Hrs
                            </p>
                        </div>
                        <img class="bank" src="{{ url('images/SOC.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-8">
                        <a href="" data-id="8" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Distingamos a la red como profesionistas hipotecarios que cuentan con los elementos necesarios para otorgar un servicio de calidad.</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-2 certificaciones certificaciones-empresarial" style="display: none;">
                    <div class="content" id="o-9">
                        <a href="" data-id="9" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Certificaciones Empresarial</span></p>
                        <h4>Certificación Nivel A venta cruzada</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 02-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11am - 2 pm  
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Mariana Rangel</strong> Ejecutiva de capacitacion </p>
                        </div>
                        <img class="bank" src="{{ url('images/SOC.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-9">
                        <a href="" data-id="9" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Esta certificación va dirigido para la red hipotecaria, aquí aprenderán los conceptos básicos y el entorno del negocio empresarial .</b></p>
                    </div>
                </div> 
                <div class="col-md-4 grid-item t-2 certificaciones certificaciones-empresarial" style="display: none;">
                    <div class="content" id="o-10">
                        <a href="" data-id="10" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Certificaciones Empresarial</span></p>
                        <h4>Certificación Nivel A venta cruzada</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 03-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11am - 2 pm  
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Mariana Rangel</strong> Ejecutiva de capacitacion </p>
                        </div>
                        <img class="bank" src="{{ url('images/SOC.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-10">
                        <a href="" data-id="10" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Esta certificación va dirigido para la red hipotecaria, aquí aprenderán los conceptos básicos y el entorno del negocio empresarial .</b></p>
                    </div>
                </div> 
                <div class="col-md-4 grid-item t-2 certificaciones certificaciones-empresarial" style="display: none;">
                    <div class="content" id="o-11">
                        <a href="" data-id="11" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Certificaciones Empresarial</span></p>
                        <h4>Certificación Nivel A venta cruzada</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 04-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11am - 2 pm  
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Mariana Rangel</strong> Ejecutiva de capacitacion </p>
                        </div>
                        <img class="bank" src="{{ url('images/SOC.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-11">
                        <a href="" data-id="11" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Esta certificación va dirigido para la red hipotecaria, aquí aprenderán los conceptos básicos y el entorno del negocio empresarial .</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-2 webinars webinar-empresarial" style="display: none;">
                    <div class="content" id="o-12">
                        <a href="" data-id="12" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Empresarial</span></p>
                        <h4>Ofertas 2022</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 08-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11 am 
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Juan Fernandez</strong> Fundador</p>
                        </div>
                        <img class="bank" src="{{ url('images/Anticipa@2x.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-12">
                        <a href="" data-id="12" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Esta certificación va dirigido para la red hipotecaria, aquí aprenderán los conceptos básicos y el entorno del negocio empresarial .</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-3 webinars webinar-empresarial" style="display: none;">
                    <div class="content" id="o-13">
                        <a href="" data-id="13" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Empresarial</span></p>
                        <h4>Arranque 2022</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 09-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11 am 
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Samantha Lechuga</strong> Gerente Comercial</p>
                        </div>
                        <img src="{{ url('images/Grupo_324@2x.png') }}" alt="" class="bank">
                    </div>
                    <div class="content-back d-none" id="b-13">
                        <a href="" data-id="13" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Semana empresarial</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-3 webinars webinar-empresarial" style="display: none;">
                    <div class="content" id="o-14">
                        <a href="" data-id="14" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Empresarial</span></p>
                        <h4>SOC Racing</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 10-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11 am 
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Leticia Rojas</strong> Gerente de Promoción</p>
                        </div>
                        <p>Promoción SOC</p>
                    </div>
                    <div class="content-back d-none" id="b-14">
                        <a href="" data-id="14" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Semana empresarial</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-3 webinars webinar-empresarial" style="display: none;">
                    <div class="content" id="o-15">
                        <a href="" data-id="15" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Empresarial</span></p>
                        <h4>Productos y Herramientas</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 14-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11 am 
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Francisco Araiza</strong> Gerente de alianzas & Vendors</p>
                        </div>
                        <img class="bank" src="{{ url('images/Grupo_348@2x.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-15">
                        <a href="" data-id="15" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Semana empresarial</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-3 webinars webinar-empresarial" style="display: none;">
                    <div class="content" id="o-16">
                        <a href="" data-id="16" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Empresarial</span></p>
                        <h4>Certifiación de oficina y asesores.</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                15-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11 am 
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Jonatan Hernandez</strong> Coordinador Universidad</p>
                        </div>
                        <img src="{{ url('images/universidad-logo.png') }}" alt="" class="bank">
                    </div>
                    <div class="content-back d-none" id="b-16">
                        <a href="" data-id="16" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Semana empresarial</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-3 certificaciones certificaciones-empresarial" style="display: none;">
                    <div class="content" id="o-17">
                        <a href="" data-id="17" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Certificaciones Empresarial</span></p>
                        <h4>Cert. Konfío</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                21-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                03:00 p.m.
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Mariana Rangel</strong> Ejecutiva de capacitacion</p>
                        </div>
                        <img class="bank" src="{{ url('images/Grupo_330@2x.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-17">
                        <a href="" data-id="17" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Esta certificacion se compone de diferentes modulos donde encontraras todo lo que nesecitas saber para la comercializacion de las opciones de financiamineto que Konfío maneja.</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-3 certificaciones certificaciones-empresarial" style="display: none;">
                    <div class="content" id="o-18">
                        <a href="" data-id="18" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Certificaciones Empresarial</span></p>
                        <h4>Cert. Unifin</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                23-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                03:00 p.m.
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Mariana Rangel</strong> Ejecutiva de capacitacion</p>
                        </div>
                        <img class="bank" src="{{ url('images/Grupo_348@2x.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-18">
                        <a href="" data-id="18" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>En esta certificacion podras identificar las caracteristicas particulares del producto Unifin/Arrendamiento, asi com el paso a paso de como operarlo hasta llegar al fondeo de esta y las diferentes herramientas que te ayudaran agilizar tu respuesta.</b></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-4 certificaciones certificaciones-empresarial" style="display: none;">
                    <div class="content" id="o-19">
                        <a href="" data-id="19" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Certificaciones Empresarial</span></p>
                        <h4>Cert. Uniclick</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                25-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                03:00 p.m.
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Mariana Rangel</strong> Ejecutiva de capacitacion</p>
                        </div>
                        <img class="bank" src="{{ url('images/Grupo_346@2x.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-19">
                        <a href="" data-id="19" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><b>Atraves de esta certifiacion podras especializarte y conocer el detalle del producto que Uniclick tiene para nuestro mercado asi como el proceso que llevaras acabo para operar a tu cliente.</b></p>
                    </div>
                </div>

                <div class="col-md-4 grid-item t-4 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-29">
                        <a href="" data-id="29" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4></h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  02-feb
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 4:00 a 5:30 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong></strong> </p>
                        </div>
                        <img class="bank" src="{{ url('images/skandia.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-29">
                       
                    </div>
                </div>
                <div class="col-md-4 grid-item t-4 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-30">
                        <a href="" data-id="30" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Webinar Networking</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  03-feb
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 9:00 a 10:30 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Arturo Galvan</strong> </p>
                        </div>
                        <p>LIBERI</p>
                    </div>
                    <div class="content-back d-none" id="b-30">
                        <a href="" data-id="30" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><a href="https://us02web.zoom.us/j/81962170630?pwd=U292TFNadWtJTWkyMkVXMWpjS3IvZz09">Link de Zoom</a></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-4 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-31">
                        <a href="" data-id="31" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Webinar Networking</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  09-feb-22
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 4:00 a 5:30 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong></strong> </p>
                        </div>
                        <img class="bank" src="{{ url('images/skandia.png') }}">
                    </div>
                    <div class="content-back d-none" id="b-31">
                        <a href="" data-id="31" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-4 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-32">
                        <a href="" data-id="32" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Capacitación Manejo de objeciones</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 07-feb
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                9:00 a 10:00 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Montserrat Sanchez</strong> </p>
                        </div>
                        <p>Gerente de Desarrollo</p>
                    </div>
                    <div class="content-back d-none" id="b-32">
                        <a href="" data-id="32" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><a href="https://us02web.zoom.us/j/88655299837?pwd=YlptWEVPY0Q4cWJyWW8xOTdFREp0dz09">Link de Zoom</a></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-4 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-21">
                        <a href="" data-id="21" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Webinar Cita de cierre</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  10 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 9:00 a 10:30 hrs
                            </p>
                        </div>
                        <p>Rogelio Martinez</p>
                    </div>
                    <div class="content-back d-none" id="b-21">
                        <a href="" data-id="21" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><a href=" https://us02web.zoom.us/j/81962170630?pwd=U292TFNadWtJTWkyMkVXMWpjS3IvZz09">Link de Zoom</a></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-5 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-22">
                        <a href="" data-id="22" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Capacitación Sensibilización</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  14 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 9:00 a 10:00 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Selene Garibay</strong> </p>
                        </div>
                        <p>Gerente de Desarrollo</p>
                    </div>
                    <div class="content-back d-none" id="b-22">
                        <a href="" data-id="22" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><a href="https://us02web.zoom.us/j/88655299837?pwd=YlptWEVPY0Q4cWJyWW8xOTdFREp0dz09">Link de Zoom</a></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-5 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-23">
                        <a href="" data-id="23" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Webinar Skandia</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  16 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 4:00 a 5:30 hrs
                            </p>
                        </div>
                        <p>Skandia</p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-5 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-24">
                        <a href="" data-id="24" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Webinar Importancia del Seguro de Vida</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  17 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 9:00 a 10:30 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Brayan Hernandez</strong> </p>
                        </div>
                        <p>Capital City MX</p>
                    </div>
                    <div class="content-back d-none" id="b-24">
                        <a href="" data-id="24" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><a href=" https://us02web.zoom.us/j/81962170630?pwd=U292TFNadWtJTWkyMkVXMWpjS3IvZz09">Link de Zoom</a></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-5 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-25">
                        <a href="" data-id="25" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Capacitación Entrega de póliza</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  21 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 9:00 a 10:00 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Sharon Ovando </strong> </p>
                        </div>
                        <p>Gerente de Desarrollo</p>
                    </div>
                    <div class="content-back d-none" id="b-25">
                        <a href="" data-id="25" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><a href="https://us02web.zoom.us/j/88655299837?pwd=YlptWEVPY0Q4cWJyWW8xOTdFREp0dz09">Link de Zoom</a></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-5 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-26">
                        <a href="" data-id="26" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Webinar Skandia</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  23 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 4:00 a 5:30 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Sharon Ovando </strong> </p>
                        </div>
                        <img class="bank" src="{{ url('images/skandia.png') }}">
                    </div>
                </div>
                <div class="col-md-4 grid-item t-5 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-27">
                        <a href="" data-id="27" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Webinar Cultura del Ahorro</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  24 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 9:00 a 10:30 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Pedro Chavelas</strong> </p>
                        </div>
                        <p>Seguros por Ti</p>
                    </div>
                    <div class="content-back d-none" id="b-27">
                        <a href="" data-id="27" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><a href=" https://us02web.zoom.us/j/81962170630?pwd=U292TFNadWtJTWkyMkVXMWpjS3IvZz09">Link de Zoom</a></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-6 webinars webinar-seguros" style="display: none;">
                    <div class="content" id="o-28">
                        <a href="" data-id="28" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Webinar Seguros</span></p>
                        <h4>Capacitación Clinica Telefonica</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                  31 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                 9:00 a 10:00 hrs
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Diego Olivares</strong> </p>
                        </div>
                        <p>Gerente de Desarrollo</p>
                    </div>
                    <div class="content-back d-none" id="b-28">
                        <a href="" data-id="28" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"><a href="https://us02web.zoom.us/j/88655299837?pwd=YlptWEVPY0Q4cWJyWW8xOTdFREp0dz09">Link de Zoom</a></p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-6 promocion" style="display: none;">
                    <div class="content" id="o-29">
                        <a href="" data-id="29" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Promoción y Capacitación</span></p>
                        <h4>Inicia este mes conociendo las herramientas digitales que SOC tiene para ti.</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                02 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11:00 - 12:30 Hrs.
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong> Alejandra Torres Torres </strong>Implementador de Herramientas </p>
                        </div>
                        <img src="{{ url('images/SOC.png') }}" alt="" class="bank">
                    </div>
                    <div class="content-back d-none" id="b-29">
                        <a href="" data-id="29" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4">Fortalece tus estrategias de venta para mejorar el alcance de tus objetivos. Te mostraremos parte del valor agregado SOC. </p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-6 promocion" style="display: none;">
                    <div class="content" id="o-30">
                        <a href="" data-id="30" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Promoción y Capacitación</span></p>
                        <h4> Brinda más opciones a tu cliente para cotizar su crédito con nuestro Comparador SOC.</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 09 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11:00 - 12:30 Hrs.
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Roberto Cordero </strong>Implementador de Herramientas </p>
                        </div>
                        <img src="{{ url('images/SOC.png') }}" alt="" class="bank">
                    </div>
                    <div class="content-back d-none" id="b-30">
                        <a href="" data-id="30" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"> Cotiza, compara y llena la solicitud de crédito todo en una misma plataforma ¡Optimizarás tu tiempo!</p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-6 promocion" style="display: none;">
                    <div class="content" id="o-31">
                        <a href="" data-id="31" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Promoción y Capacitación</span></p>
                        <h4>Planifica los objetivos de tu equipo para obtener mejores resultados y continúa alcanzando el éxito con tu oficina.</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 16 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11:00 - 12:30 Hrs.
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>César Herrera </strong>Implementador de Herramientas </p>
                        </div>
                        <img src="{{ url('images/SOC.png') }}" alt="" class="bank">
                    </div>
                    <div class="content-back d-none" id="b-31">
                        <a href="" data-id="31" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4">Te presentamos la Reporteria SOC cómo una de las mejores herramientas para poder medir con  mayor eficacia  el seguimiento y control de tu equipo. </p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-6 promocion" style="display: none;">
                    <div class="content" id="o-31">
                        <a href="" data-id="31" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Promoción y Capacitación</span></p>
                        <h4>Planifica los objetivos de tu equipo para obtener mejores resultados y continúa alcanzando el éxito con tu oficina.</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                 16 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11:00 - 12:30 Hrs.
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>César Herrera </strong>Implementador de Herramientas </p>
                        </div>
                        <img src="{{ url('images/SOC.png') }}" alt="" class="bank">
                    </div>
                    <div class="content-back d-none" id="b-31">
                        <a href="" data-id="31" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4">Te presentamos la Reporteria SOC cómo una de las mejores herramientas para poder medir con  mayor eficacia  el seguimiento y control de tu equipo. </p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-6 promocion" style="display: none;">
                    <div class="content" id="o-32">
                        <a href="" data-id="32" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Promoción y Capacitación</span></p>
                        <h4>Atrae más socios comerciales para aumentar tus ventas con estas increíbles herramientas.</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                23 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                11:00 - 12:30 Hrs.
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Manuel Aniceto </strong>Implementador de Herramientas </p>
                        </div>
                        <img src="{{ url('images/SOC.png') }}" alt="" class="bank">
                    </div>
                    <div class="content-back d-none" id="b-32">
                        <a href="" data-id="32" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4">Tenemos para tus asesores SOC herramientas digitales que les ayudarán a consolidar más relaciones comerciales.</p>
                    </div>
                </div>
                <div class="col-md-4 grid-item t-6 aula" style="display: none;">
                    <div class="content" id="o-33">
                        <a href="" data-id="33" class="view-more"><img src="{{ url('images/vuesax-twotone-more.svg') }}"></a>
                        <p><span>Aula Soc</span></p>
                        <h4>Estrategias de Venta</h4>
                        <div class="info-event d-flex flex-column">
                            <p>
                                <img src="{{url('images/vuesax-twotone-note-text.svg')}}" alt="">
                                18 de febrero
                            </p>
                            <p>
                                <img src="{{url('images/vuesax-twotone-clock.svg')}}" alt="">
                                10:00 am
                            </p>
                        </div>
                        <div class="speakers d-flex align-items-start">
                            <img src="{{ url('images/vuesax-twotone-user.svg') }}" alt="">
                            <p><strong>Álvaro Aldrete </strong></p>
                        </div>
                        <img src="{{ url('images/SOC.png') }}" alt="" class="bank">
                    </div>
                    <div class="content-back d-none" id="b-33">
                        <a href="" data-id="33" class="close-grid"><img src="{{ url('images/vuesax-twotone-close-circle.svg') }}"></a>
                        <p class="mb-4"></p>
                    </div>
                </div>
                
       
        */ ?>
    </div>
    @endif
    
    @if(count($events) > 6)
    <div class="row justify-content-center">
        <p class="text-center paginacion">
            @for($i = 1; $i <= intval(count($events) / 6) + 1;$i++)
            <a href data-filter="t-{{ $i }}" class="cursor-pointer ml-1 mr-1 {{ $i == 1 ? 'active' : '' }}">{{ $i }}</a>
            @endfor
        </p>
    </div>
    @endif
    
</div>

@endsection