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
            <h3 class="text-center">Certificación Oficina Crédito Hipotecario</h3>
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
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                aria-controls="collapseOne1">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Certificación del titular: tener la categoría Advanced vigente. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
      
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Equipo de trabajo: contar al menos con un asesor certificación Senior. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
                
                        <div class="card">  
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Colocación anual: $60 millones y/o 40 firmas. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5"
                                aria-expanded="false" aria-controls="collapseThree5">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Marca e imagen: cumplir con los requisitos de mercadotecnia como Oficina 2.0. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>

                        <div class="card">                           
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6"
                                aria-expanded="false" aria-controls="collapseThree6">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Tener cartera de clientes sana. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                    <p class="mb-4 mt-4">Una vez que se han cumplido los requisitos descritos, no será necesario que realices un proceso de registro, ya que la certificación se acreditará de manera automática.</p>
                    <p class="mb-4 mt-4">La Certificación de Oficinas SOC, se lleva a cabo en dos periodos durante el año:</p>
                    <ul class="mb-4 mt-4">
                        <li>El primero en marzo, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. La entrega de reconocimientos se realizará durante los meses de abril y mayo en el Workshop.</li>
                        <li>El segundo periodo en septiembre, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. En este caso la entrega de reconocimientos se realizará en octubre durante la Convención.</li>
                    </ul>
                    <p class="mb-4 mt-4">
                        La certificación tiene una vigencia de 12 meses.
                    </p>
                    <p class="text-center mt-4 pt-4"><a href="https://lgctec.com/inventario_valor/form_uni_contacto/" target="_blank" class="green-button">Quiero certificarme</a></p>
                </div>
                <div class="tab-pane fade" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">
                    <p class="text-center mb-4 mt-4"><strong>Acerca de la certificación</strong></p>
                    <p>La certificación de Oficinas SOC reconoce: la <strong>especialización de los integrantes</strong> que conforman el equipo de trabajo; instalaciones adecuadas y el correcto uso de la imagen SOC.</p>
                    <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                aria-controls="collapseOne1">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Certificación del titular: tener la categoría Master vigente. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
      
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Equipo de trabajo: certificado. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
                
                        <div class="card">  
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Colocación anual: $100 millones y/o 67 firmas. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5"
                                aria-expanded="false" aria-controls="collapseThree5">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Marca e imagen: cumplir con los requisitos de mercadotecnia como Oficina 2.0. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>

                        <div class="card">                           
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6"
                                aria-expanded="false" aria-controls="collapseThree6">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Tener cartera de clientes sana. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                    <p class="mb-4 mt-4">Una vez que se han cumplido los requisitos descritos, no será necesario que realices un proceso de registro, ya que la certificación se acreditará de manera automática.</p>
                    <p class="mb-4 mt-4">La Certificación de Oficinas SOC, se lleva a cabo en dos periodos durante el año:</p>
                    <ul class="mb-4 mt-4">
                        <li>El primero en marzo, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. La entrega de reconocimientos se realizará durante los meses de abril y mayo en el Workshop.</li>
                        <li>El segundo periodo en septiembre, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. En este caso la entrega de reconocimientos se realizará en octubre durante la Convención.</li>
                    </ul>
                    <p class="mb-4 mt-4">
                        La certificación tiene una vigencia de 12 meses.
                    </p>
                    <p class="text-center mt-4 pt-4"><a href="https://lgctec.com/inventario_valor/form_uni_contacto/" target="_blank" class="green-button">Quiero certificarme</a></p>
                </div>
                <div class="tab-pane fade" id="master" role="tabpanel" aria-labelledby="master-tab">
                    <p class="text-center mb-4 mt-4"><strong>Acerca de la certificación</strong></p>
                    <p>La certificación de Oficinas SOC reconoce: la <strong>especialización de los integrantes</strong> que conforman el equipo de trabajo; instalaciones adecuadas y el correcto uso de la imagen SOC.</p>
                    <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                aria-controls="collapseOne1">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Certificación del titular: tener la categoría Master vigente. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
      
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Equipo de trabajo: certificado. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
                
                        <div class="card">  
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Colocación anual: $180 millones y/o 120 firmas. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5"
                                aria-expanded="false" aria-controls="collapseThree5">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Marca e imagen: cumplir con los requisitos de mercadotecnia como Oficina 2.0. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>

                        <div class="card">                           
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6"
                                aria-expanded="false" aria-controls="collapseThree6">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    Tener cartera de clientes sana. <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                    <p class="mb-4 mt-4">Una vez que se han cumplido los requisitos descritos, no será necesario que realices un proceso de registro, ya que la certificación se acreditará de manera automática.</p>
                    <p class="mb-4 mt-4">La Certificación de Oficinas SOC, se lleva a cabo en dos periodos durante el año:</p>
                    <ul class="mb-4 mt-4">
                        <li>El primero en marzo, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. La entrega de reconocimientos se realizará durante los meses de abril y mayo en el Workshop.</li>
                        <li>El segundo periodo en septiembre, con revisión de montos y/o firmas que validen los 12 meses inmediatos anteriores. En este caso la entrega de reconocimientos se realizará en octubre durante la Convención.</li>
                    </ul>
                    <p class="mb-4 mt-4">
                        La certificación tiene una vigencia de 12 meses.
                    </p>
                    <p class="text-center mt-4 pt-4"><a href="https://lgctec.com/inventario_valor/form_uni_contacto/" target="_blank" class="green-button">Quiero certificarme</a></p>
                </div>
            </div>
            </div>
        </div>
</div>
@endsection
