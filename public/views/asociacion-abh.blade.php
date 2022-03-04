@extends('layout')

@section('content')
<div class="container home-1">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-5">
            <h1 class="mb-4 text-center text-sm-left">Vende más<br>¡Certificándote!</h1>
            <p><strong>La certificación,</strong> acredita los conocimientos y experiencia de los asesores y oficinas; con la finalidad de contar con una red que se distinga por la profesionalización del servicio que otorga.</p>
        </div>
        <div class="col-md-4">
            <img class="img-fluid" src="{{ url('images/Grupo_1119.svg') }}" alt="">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 mb-4 mt-4">
            <h3 class="text-center">Certificación Asociación de Brokers Hipotecarios - ABH</h3>
        </div>
    </div>
</div>
<div class="certificaciones-sec-1 container">

        <div class="row justify-content-center">
            <div class="col-md-9">
                <p>Para poder certificarte en la ABH, deberás:</p>
                    <ul>
                        <li>Ingresar a SISEC y hacer el pago correspondiente a $2,500.00 más IVA.</li>
                    </ul>
                    <p><i>Nota: Esta certificación se aplicará de manera presencial, a través de una evaluación. Al realizar tu registro en SISEC, podrás consultar las sedes, fechas y horarios disponibles para realizarla.</i></p>
                    <p class="text-center mb-4 mt-4"><strong>Vigencia 2 año</strong></p>
                    <!--Accordion wrapper-->
                     <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <p class="text-center mb-4 mt-4"><strong>Temario de evaluación</strong></p>
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse1" aria-expanded="true"
                                aria-controls="collapse1">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    I. Originación <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li>
                                            <p>a. Perfil del cliente</p>
                                        </li>
                                        <li>
                                            <p>b. Conceptos del perfilamiento </p>
                                        </li>
                                        <li>
                                            <p>c. Simulador de crédito</p>
                                        </li>
                                        <li>
                                            <p>d. Integración del expediente del solicitante</p>
                                        </li>
                                        <li>
                                            <p>e. Integración del expediente del inmueble</p>
                                        </li>
                                        <li>
                                            <p>f. Establecimiento de las condiciones finales del crédito</p>
                                        </li>
                                        <li>
                                            <p>g. Firma del crédito</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
      
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse2"
                                aria-expanded="false" aria-controls="collapse2">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    II. Productos hipotecarios <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                <div class="card-body">
                                       <ul style="list-style: none;">
                                            <li>
                                                <p>a. Tipos de productos</p>
                                                <ul style="list-style: none; padding-left: 1rem">
                                                   <li>Accesorios </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p>b. Créditos cofinanciados con Organismos de Vivienda (ONAVIS) </p>
                                                <ul style="list-style: none; padding-left: 1rem">
                                                    <li>Crédito en Cofinanciamiento INFONAVIT </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p>c. Enaltecedores de créditos </p>
                                                <ul style="list-style: none; padding-left: 1rem">
                                                    <li>Seguro de crédito a la vivienda </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p>d. Beneficios créditos hipotecarios  </p>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="heading3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse3"
                                aria-expanded="false" aria-controls="collapse3">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    III. Finanzas básicas <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li>
                                            <p>a. Interés simple y compuesto  </p>
                                        </li>
                                        <li>
                                            <p>b. Tablas de amortización </p>
                                        </li>
                                        <li>
                                            <p>c. Costo anual total </p>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse4"
                                aria-expanded="false" aria-controls="collapse4">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    IV. Avalúos <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                <div class="card-body">
                                      <ul style="list-style: none;">
                                            <li>
                                                <p>a. Avalúos para garantía hipotecaria </p>
                                            </li>
                                            <li>
                                                <p>b. Tipos de avalúo </p>
                                            </li>
                                            <li>
                                                <p>c. Marco normativo de la valuación hipotecaria </p>
                                            </li>
                                            <li>
                                                <p>d. Los distintos enfoques de valuación </p>
                                            </li>
                                            <li>
                                                <p>e. Documentación necesaria para la elaboración de un avalúo </p>
                                            </li>
                                            <li>
                                                <p>f. Proceso para la elaboración de una avalúo inmobiliario </p>
                                            </li>
                                            <li>
                                                <p>g. El avalúo, una fotografía en un tiempo específico </p>
                                            </li>
                                            <li>
                                                <p>h. Importancia del avalúo para aplicación de políticas de crédito </p>
                                            </li>
                                        </ul> 
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse5"
                                aria-expanded="false" aria-controls="collapse5">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    V. Cobranza <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                <div class="card-body">
                                       
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse6"
                                aria-expanded="false" aria-controls="collapse6">
                                <h5 class="mb-0 d-flex justify-content-between">
                                   VI. Riesgo <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                <div class="card-body">
                                      <ul style="list-style: none;">
                                        <li>
                                            <p>a. Loan to value  </p>
                                        </li>
                                        <li>
                                            <p>b. Factores para el cálculo de la línea de crédito </p>
                                        </li>
                                        <li>
                                            <p>c. Nivel de endeudamiento (Debt To Income – DTI)</p>
                                        </li>
                                        <li>
                                            <p>d. Buró de crédito </p>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse7"
                                aria-expanded="false" aria-controls="collapse7">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    VII. Crédito puente <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                <div class="card-body">
                                       
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse8"
                                aria-expanded="false" aria-controls="collapse8">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    VIII. Marco legal y fiscal <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                <div class="card-body">
                                       <ul style="list-style: none;">
                                <li>
                                    <p>a. Trámites notariales</p>
                                </li>
                                <li>
                                    <p>b. Registro Público</p>
                                </li>
                                <li>
                                    <p>c. Impuestos federales y locales (básicos)</p>
                                </li>
                                <li>
                                    <p>d. Contratos de crédito</p>
                                </li>
                                <li>
                                    <p>e. Prevención y lavado de dinero </p>
                                </li>
                                <li>
                                    <p>f. Know Your Customer (KYC)</p>
                                </li>
                                <li>
                                    <p>g. Protección de datos personales </p>
                                </li>
                            </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse9"
                                aria-expanded="false" aria-controls="collapse9">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    IX. Reglamento Asesores Hipotecarios <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                <div class="card-body">
                                       
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <p class="text-center mt-4 pt-4"><a href="" target="_blank" class="green-button">Quiero certificarme</a></p>
            </div>
        </div>
   
</div>
@endsection
