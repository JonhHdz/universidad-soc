@extends('layout')

@section('content')
<div class="container home-1">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-5">
            <h1 class="mb-4 text-center text-sm-left">Vende más<br>¡Certificándote!</h1>
            <p><strong>La certificación,</strong> acredita los conocimientos y experiencia de los asesores y oficinas; con la finalidad de contar con una red que se distinga por la profesionalización del servicio que otorga.</p>
        </div>
        <div class="col-md-4">
            <img class="img-fluid" src="{{ url('images/Grupo_1054.svg') }}" alt="">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 mb-4 mt-4">
            <h3 class="text-center">Certificación Oficina Seguros</h3>
        </div>
        <div class="col-12">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="senior-tab" data-toggle="tab" href="#senior" role="tab" aria-controls="senior" aria-selected="true">Oficina Plata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="advanced-tab" data-toggle="tab" href="#advanced" role="tab" aria-controls="advanced" aria-selected="false">Oficina Oro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="master-tab" data-toggle="tab" href="#master" role="tab" aria-controls="master" aria-selected="false">Oficina Diamante</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="certificaciones-sec-1 container">
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="senior" role="tabpanel" aria-labelledby="senior-tab">
                    <p class="text-center mb-4 mt-4"><strong>Acerca de la certificación</strong></p>
                    <p>La certificación de Oficinas SOC reconoce: la <strong>especialización de los integrantes</strong> que conforman el equipo de trabajo; instalaciones adecuadas y el correcto uso de la imagen SOC.</p>
                    <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                     <ul>
                            <li>Certificación del titular en las certificaciones que tenemos en universidad (vida y seguros)</li>
                            <li>Contar con 1 operador</li>
                            <li>Colocación anual de acuerdo al plan de negocio</li>
                            <li>Cartera: 84% LIMRA ( Life Insurance Marketing and Research Association) y 90.5% IGC ( Indice General de Conservación)</li>
                        </ul>
                    
                    <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                    
                    <p class="mb-4 mt-4">La Certificación de Oficinas SOC, se lleva a cabo en dos periodos durante el año:</p>
                    <ul class="mb-4 mt-4">
                        <li>El primero en marzo, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. La entrega de reconocimientos se realizará durante los meses de abril y mayo en el Workshop.</li>
                        <li>El segundo periodo en septiembre, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. En este caso la entrega de reconocimientos se realizará en octubre durante la Convención.</li>
                    </ul>
                    <p class="mb-4 mt-4">
                        La certificación tiene una vigencia de 12 meses.
                    </p>
                    <div class="row">
                        <div class="col-12 mb-4 mt-4">
                            <h3 class="text-center">Beneficios</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-3.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-medal.svg')}}" alt="" class="img-fluid brand">
                                <p>Reconocimiento en nuestros principales eventos.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-cpu-setting.svg')}}" alt="" class="img-fluid brand">
                                <p>Acceso a herramientas en pruebas piloto.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-2.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-monitor.svg')}}" alt="" class="img-fluid brand">
                                <p class="mb-3">Distintivo en micro sitios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-4.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-brush.svg')}}" alt="" class="img-fluid brand">
                                <p>Paquete diferenciado de Branding para tu oficina.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-1.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-lovely.svg')}}" alt="" class="img-fluid brand">
                                <p class="mb-3">Regalos y promociones.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-center mb-4 mt-4"><i>Espera próximamente más beneficios…</i></p>
                        </div>
                    </div>
                    <p class="text-center mt-4 pt-4"><a href="#form" target="_blank" class="green-button form-b">Quiero certificarme</a></p>
                </div>
                <div class="tab-pane fade" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">
                    <p class="text-center mb-4 mt-4"><strong>Acerca de la certificación</strong></p>
                    <p>La certificación de Oficinas SOC reconoce: la <strong>especialización de los integrantes</strong> que conforman el equipo de trabajo; instalaciones adecuadas y el correcto uso de la imagen SOC.</p>
                     <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                     <ul>
                            <li>Certificación del titular en las certificaciones que tenemos en universidad (vida y seguros)</li>
                            <li>Contar con 1 operador certificado</li>
                            <li>Colocación anual MDRT</li>
                            <li>Cartera: 84% LIMRA ( Life Insurance Marketing and Research Association) y 90.5% IGC ( Indice General de Conservación)</li>
                        </ul>
                    
                    <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                    
                    <p class="mb-4 mt-4">La Certificación de Oficinas SOC, se lleva a cabo en dos periodos durante el año:</p>
                    <ul class="mb-4 mt-4">
                        <li>El primero en marzo, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. La entrega de reconocimientos se realizará durante los meses de abril y mayo en el Workshop.</li>
                        <li>El segundo periodo en septiembre, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. En este caso la entrega de reconocimientos se realizará en octubre durante la Convención.</li>
                    </ul>
                    <p class="mb-4 mt-4">
                        La certificación tiene una vigencia de 12 meses.
                    </p>
                    <div class="row">
                        <div class="col-12 mb-4 mt-4">
                            <h3 class="text-center">Beneficios</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-3.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-medal.svg')}}" alt="" class="img-fluid brand">
                                <p>Reconocimiento en nuestros principales eventos.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-cpu-setting.svg')}}" alt="" class="img-fluid brand">
                                <p>Acceso a herramientas en pruebas piloto.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-2.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-monitor.svg')}}" alt="" class="img-fluid brand">
                                <p class="mb-3">Distintivo en micro sitios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-4.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-brush.svg')}}" alt="" class="img-fluid brand">
                                <p>Paquete diferenciado de Branding para tu oficina.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-1.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-lovely.svg')}}" alt="" class="img-fluid brand">
                                <p class="mb-3">Regalos y promociones.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-center mb-4 mt-4"><i>Espera próximamente más beneficios…</i></p>
                        </div>
                    </div>
                    <p class="text-center mt-4 pt-4"><a href="#form" target="_blank" class="green-button form-b">Quiero certificarme</a></p>
                </div>
                <div class="tab-pane fade" id="master" role="tabpanel" aria-labelledby="master-tab">
                    <p class="text-center mb-4 mt-4"><strong>Acerca de la certificación</strong></p>
                    <p>La certificación de Oficinas SOC reconoce: la <strong>especialización de los integrantes</strong> que conforman el equipo de trabajo; instalaciones adecuadas y el correcto uso de la imagen SOC.</p>
                     <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                     <ul>
                            <li>Certificación del titular en las certificaciones que tenemos en universidad (vida y seguros)</li>
                            <li>Contar con 1 operador certificado</li>
                            <li>Colocación anual MDRT + 10%</li>
                            <li>Cartera: 84% LIMRA ( Life Insurance Marketing and Research Association) y 90.5% IGC ( Indice General de Conservación)</li>
                        </ul>
                    
                    <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                    
                    <p class="mb-4 mt-4">La Certificación de Oficinas SOC, se lleva a cabo en dos periodos durante el año:</p>
                    <ul class="mb-4 mt-4">
                        <li>El primero en marzo, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. La entrega de reconocimientos se realizará durante los meses de abril y mayo en el Workshop.</li>
                        <li>El segundo periodo en septiembre, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. En este caso la entrega de reconocimientos se realizará en octubre durante la Convención.</li>
                    </ul>
                    <p class="mb-4 mt-4">
                        La certificación tiene una vigencia de 12 meses.
                    </p>
                    <div class="row">
                        <div class="col-12 mb-4 mt-4">
                            <h3 class="text-center">Beneficios</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-3.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-medal.svg')}}" alt="" class="img-fluid brand">
                                <p>Reconocimiento en nuestros principales eventos.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-cpu-setting.svg')}}" alt="" class="img-fluid brand">
                                <p>Acceso a herramientas en pruebas piloto.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-2.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-monitor.svg')}}" alt="" class="img-fluid brand">
                                <p class="mb-3">Distintivo en micro sitios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-4.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-brush.svg')}}" alt="" class="img-fluid brand">
                                <p>Paquete diferenciado de Branding para tu oficina.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-certificacion-2 d-flex align-items-end position-relative" style="background-image: url({{ url('images/Image-1.jpg') }});">
                                <img class="mark" src="{{ url('images/Grupo_1631.svg') }}">
                                <img src="{{url('images/vuesax-twotone-lovely.svg')}}" alt="" class="img-fluid brand">
                                <p class="mb-3">Regalos y promociones.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-center mb-4 mt-4"><i>Espera próximamente más beneficios…</i></p>
                        </div>
                    </div>
                    <p class="text-center mt-4 pt-4"><a href="#form" target="_blank" class="green-button form-b">Quiero certificarme</a></p>
                </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4 pt-4">
                    <div class="col-md-5">
                        <form class="d-none" id="form">
                          <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre completo del asesor">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Correo institucional">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nombre del titular">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nombre de la franquicia">
                          </div>
                          <div class="form-group">
                            <select name="estado" class="form-control">
                                  <option value="no">Estado</option>
                                  <option value="Aguascalientes">Aguascalientes</option>
                                  <option value="Baja California">Baja California</option>
                                  <option value="Baja California Sur">Baja California Sur</option>
                                  <option value="Campeche">Campeche</option>
                                  <option value="Chiapas">Chiapas</option>
                                  <option value="Chihuahua">Chihuahua</option>
                                  <option value="CDMX">Ciudad de México</option>
                                  <option value="Coahuila">Coahuila</option>
                                  <option value="Colima">Colima</option>
                                  <option value="Durango">Durango</option>
                                  <option value="Estado de México">Estado de México</option>
                                  <option value="Guanajuato">Guanajuato</option>
                                  <option value="Guerrero">Guerrero</option>
                                  <option value="Hidalgo">Hidalgo</option>
                                  <option value="Jalisco">Jalisco</option>
                                  <option value="Michoacán">Michoacán</option>
                                  <option value="Morelos">Morelos</option>
                                  <option value="Nayarit">Nayarit</option>
                                  <option value="Nuevo León">Nuevo León</option>
                                  <option value="Oaxaca">Oaxaca</option>
                                  <option value="Puebla">Puebla</option>
                                  <option value="Querétaro">Querétaro</option>
                                  <option value="Quintana Roo">Quintana Roo</option>
                                  <option value="San Luis Potosí">San Luis Potosí</option>
                                  <option value="Sinaloa">Sinaloa</option>
                                  <option value="Sonora">Sonora</option>
                                  <option value="Tabasco">Tabasco</option>
                                  <option value="Tamaulipas">Tamaulipas</option>
                                  <option value="Tlaxcala">Tlaxcala</option>
                                  <option value="Veracruz">Veracruz</option>
                                  <option value="Yucatán">Yucatán</option>
                                  <option value="Zacatecas">Zacatecas</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Zona">
                          </div>
                          <div class="form-group text-center">
                              <button type="button" class="btn btn-success">Enviar</button>
                          </div>
                        </form>
                    </div>
                </div>
</div>
@endsection
