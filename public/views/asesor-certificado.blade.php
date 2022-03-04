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
            <h3 class="text-center">Certificación Asesor Hipotecario</h3>
        </div>
        <div class="col-12">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="senior-tab" data-toggle="tab" href="#senior" role="tab" aria-controls="senior" aria-selected="true">Senior</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="advanced-tab" data-toggle="tab" href="#advanced" role="tab" aria-controls="advanced" aria-selected="false">Advanced</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="master-tab" data-toggle="tab" href="#master" role="tab" aria-controls="master" aria-selected="false">Master</a>
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
                    <p>Si eres operador u asesor, podrás participar para esta categoría, en donde acreditamos tus conocimientos básicos en generalidades de la hipoteca.</p>
                    <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                    <ul>
                        <li>Acreditar la evaluación hipotecaria de SOC, con una calificación mínima de 8.</li>
                        <li>Acreditar el curso en versión on-demand de “Prevención de fraudes”.</li>
                        <li>Realizar el pago correspondiente a $300.00 MXN IVA incluido.</li>
                    </ul>
                    <p>Toma el curso de “Inducción Hipotecaria” modalidad abierta o asistida y si obtienes una calificación aprobatoria obtén tu certificación senior.</p>
                    <p class="text-center mb-4 mt-4"><strong>Vigencia 1 año</strong></p>
                    <div class="content-white">
                        <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                        <p class="text-center mb-4 mt-4">Ingresar a Valor SOC para realizar tu inscripción.</p>
                    </div>
                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <p class="text-center mb-4 mt-4"><strong>Temario de evaluación</strong></p>
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                aria-controls="collapseOne1">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    I. SOC <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li>a.  Historia SOC</li>
                                        <li>b.  Filosofía institucional. Misión, visión y valores</li>
                                        <li>c.  Código de ética SOC</li>
                                        <li>d.  Nuestros clientes</li>
                                        <li>e.  Identidad e imagen corporativa</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
      
                        <div class="card">

                       
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    II. Generalidades <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                    data-parent="#accordionEx">
                                    <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li>
                                            <p>a.   Conceptos básicos del crédito hipotecario</p>
                                            <ul style="padding-left: 30px;">
                                                <li style="font-style: italic;list-style: none;">i. Figuras legales que participan en el crédito</li>
                                                <li style="font-style: italic;list-style: none;">ii.    Principales instancias involucradas </li>
                                                <li style="font-style: italic;list-style: none;">iii.   Aforo, intereses, comisiones, amortización, erogación y CAT</li>
                                                <li style="font-style: italic;list-style: none;">iv.    Principales seguros al contratar una hipoteca </li>
                                                <li style="font-style: italic;list-style: none;">v. Nivel máximo de endeudamiento (NME), capacidad de pago y Relación Pago-Ingreso (RPI)</li>
                                            </ul>
                                        </li>
                                        <br>
                                        <li>
                                            <p>b.   Proceso hipotecario </p>
                                        </li>
                                        <li>
                                            <p>c.   Tipos de crédito hipotecario </p>
                                            <ul style="padding-left: 30px;">
                                                <li style="font-style: italic;list-style: none;">i. Por su destino </li>
                                                <li style="font-style: italic;list-style: none;">ii.    Por denominación </li>
                                                <li style="font-style: italic;list-style: none;">iii.   Por tasa de interés </li>
                                                <li style="font-style: italic;list-style: none;">iv.    Por tipo de pago </li>
                                            </ul>
                                        </li>
                                        <br>
                                        <li>
                                            <p>d.   Perfilamiento</p>
                                            <ul style="padding-left: 30px;">
                                                <li style="font-style: italic;list-style: none;">i. Investigación socioeconómica </li>
                                                <li style="font-style: italic;list-style: none;">ii.    Tipos de actividades laborales </li>
                                                <li style="font-style: italic;list-style: none;">iii.   Documentos para la comprobación de ingresos</li>
                                                <li style="font-style: italic;list-style: none;">iv.    Ingresos brutos y netos </li>
                                                <li style="font-style: italic;list-style: none;">v. Comportamiento de pago del cliente </li>
                                            </ul>
                                        </li>
                                        <br>
                                        <li>
                                            <p>e.   Buró de crédito </p>
                                            <ul style="padding-left: 30px;">
                                                <li style="font-style: italic;list-style: none;">i. Tipo de cuentas: revolventes, pagos fijos y servicios </li>
                                                <li style="font-style: italic;list-style: none;">ii.    Interpretación del buró de crédito </li>
                                            </ul>
                                        </li>
                                        <br>
                                        <li>
                                            <p>f.   Corrida financiera </p>
                                            <ul style="padding-left: 30px;">
                                                <li style="font-style: italic;list-style: none;">i. Monto de crédito, tasa de interés anualizada y factor de pago al millar.</li>
                                                <li style="font-style: italic;list-style: none;">ii.    Para qué sirve, elementos que contiene y fórmulas. </li>
                                                <li style="font-style: italic;list-style: none;">iii.   Interpretación de una corrida financiera.</li>
                                            </ul>
                                        </li>
                                        <br>
                                        <li>
                                            <p>g.   Cálculo de capacidad de pago, nivel máximo de endeudamiento y RPI de un cliente. </p>
                                        </li>
                                    <ul>
                                </ul></ul>
                                </div>
                            </div>

                        </div>
                
                        <div class="card">

                            
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    III. INFONAVIT <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                           
                            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li>
                                        <p>a.   Programas y requisitos </p>
                                            <ul style="padding-left: 30px;">
                                                <li style="font-style: italic;list-style: none;">i. Apoyo Infonavit </li>
                                                <li style="font-style: italic;list-style: none;">ii.    Cofinavit</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="card">

                            
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                                aria-expanded="false" aria-controls="collapseThree4">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    IV. Autorización del crédito <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                            
                            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                <ul style="list-style: none;">
                                    <li>
                                        <p>a.   Integración del expediente para la solicitud del crédito </p>
                                    </li>
                                    <li>
                                        <p>b.   Identificación de datos en la documentación del cliente </p>
                                    </li>
                                    <li>
                                        <p>c.   Verificación de la autenticidad de la documentación solicitada </p>
                                        <ul style="padding-left: 30px;">
                                            <li style="font-style: italic;list-style: none;">i. Documentos para acreditar identidad </li>
                                            <li style="font-style: italic;list-style: none;">ii.    Comprobantes de domicilio válidos</li>
                                            <li style="font-style: italic;list-style: none;">iii.   Conformación de CURP y RFC y en dónde localizarlos </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p>d.   Llenado de la solicitud de crédito </p>
                                        <ul style="padding-left: 30px;">
                                            <li style="font-style: italic;list-style: none;">i. Consideraciones relevantes</li>
                                            <li style="font-style: italic;list-style: none;">ii.    Aviso de privacidad </li>
                                            <li style="font-style: italic;list-style: none;">iii.   Autorización para consulta de buró de crédito</li>
                                            <li style="font-style: italic;list-style: none;">iv.    Consentimiento de seguros y cuestionario médico </li>
                                            <li style="font-style: italic;list-style: none;">v. Oferta vinculante  </li>
                                        </ul>
                                    </li>
                                    <br>
                                </ul>
                                </div>
                            </div>

                        </div>

                        <div class="card">

                            
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5"
                                aria-expanded="false" aria-controls="collapseThree5">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    V. Formalización del crédito <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                            
                            <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li>
                                            <p>a.   Proceso de formalización</p>
                                        </li>
                                        <li>
                                            <p>b.   Integración del expediente del inmueble </p>
                                        </li>
                                        <li>
                                            <p>c.   Avalúo </p>
                                        </li>
                                        <li>
                                            <p>d.   Trámites notariales </p>
                                        </li>
                                        <li>
                                            <p>e.   Cierre de cifras </p>
                                        </li>
                                        <li>
                                            <p>f.   Impuestos </p>
                                        </li>
                                        <li>
                                            <p>g.   Formalización </p>
                                        </li>
                                        <li>
                                            <p>h.   Proceso con un crédito de INFONAVIT</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="card">

                           
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6"
                                aria-expanded="false" aria-controls="collapseThree6">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    VI. Comercial <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                            
                            <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li>
                                            <p>a.   5 pasos de atención al cliente </p>
                                        </li>
                                        <li>
                                            <p>b.   Asesoría </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <p class="text-center mt-4 mb-4 pb-4">Al obtener la certificación , enviaremos a tu oficina la credencial y certificado vigente que lo acredite.</p>
                    <p class="text-center mt-4 pt-4"><a href="https://lgctec.com/inventario_valor/form_uni_contacto/" target="_blank" class="green-button">Quiero certificarme</a></p>
                </div>
                <div class="tab-pane fade" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">
                    <p>Esta certificación acredita tu experiencia en generalidades y producto hipotecario. Además, reconoce tus conocimientos en la asesoría y 5 pasos de atención al cliente.</p>
                    <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                    <ul>
                        <li>Estar certificado por la <a href="{{url('/asociacion-abh')}}" target="_blank">Asociación de Brókers hipotecarios (ABH)</a>. 
                        <li>Acredites la evaluación hipotecaria de SOC, con un mínimo de 8, la cual incluye los temas de Políticas y productos financieros e Hipotecario comercial, y resuelvas tres casos prácticos de algunas de las instituciones bancarias. </li>
                            <li>Mantengas una cartera de clientes sana. (esta validación la realizamos con nuestra área de riesgos). </li>
                            <li>Cuentes con, al menos, un año ejerciendo como asesor hipotecario en SOC en la misma oficina.</li>
                            <li>Cuentes con 12 firmas de créditos hipotecarios en el último año. </li>
                        <li>Acreditar curso en versión on-demand de ̈Networking ̈ Realizar el pago correspondiente a $300.00 MXN IVA incluido.</li>
                        <li>Acreditar el curso en versión on-demand de “Prevención de fraudes”.</li>
                        <li>Realizar el pago correspondiente a $300.00 MXN IVA incluido.</li>
                    </ul>Nota: para participar como Advanced no es obligatorio contar con la certificación Senior, pero SÍ es indispensable contar con la certificación de la ABH.>Toma el curso de “Inducción Hipotecaria” modalidad abierta o asistida y si obtienes una calificación aprobatoria obtén tu certificación senior.</p>
                    <p class="text-center mb-4 mt-4"><strong>Vigencia 1 año</strong></p>
                    <div class="content-white">
                        <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                        <p class="text-center mb-4 mt-4">Ingresar a Valor SOC para realizar tu inscripción.</p>
                    </div>
                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <p class="text-center mb-4 mt-4"><strong>Temario de evaluación</strong></p>
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse1" aria-expanded="true"
                                aria-controls="collapseOne1">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    I. Originación <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
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
                                aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    II. Productos hipotecarios <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
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
                    
                    <p class="text-center mt-4 mb-4 pb-4">Al obtener la certificación , enviaremos a tu oficina la credencial y certificado vigente que lo acredite.</p>
                    <p class="text-center mt-4 pt-4"><a href="https://lgctec.com/inventario_valor/form_uni_contacto/" target="_blank" class="green-button">Quiero certificarme</a></p>
                </div>
                <div class="tab-pane fade" id="master" role="tabpanel" aria-labelledby="master-tab">
                <p>Para lograr esta categoría, medimos tu trayectoria en SOC y el éxito que has logrado en el negocio hipotecario.</p>
                    <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                    <ul>
                        <li>Contar con, al menos, tres años continuos ejerciendo tu actividad en SOC, en la misma oficina. </li>
                        <li>Acreditar el curso, en versión on-demand de “Estrategia de marketing y comunicación digital”. </li>
                        <li>
                            Deberás realizar el pago correspondiente a $300.00 MXN IVA incluido.
                            <ul>
                                <li>Si operas, es decir, si atiendes directamente a los clientes:
                                    <ul>
                                        <li>Deberás tener una colocación de, al menos, $50 millones y/o 36 firmas de créditos hipotecarios en el último año.</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>Si NO operas y eres gerente o titular de oficina:
                                    <ul>
                                        <li>Deberás tener una colocación de, al menos, $180 millones y/o 120 firmas de créditos hipotecarios en el último año.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                    
                    <p class="text-center mb-4 mt-4"><strong>Vigencia 1 año</strong></p>
                    <div class="content-white">
                        <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                        <p class="text-center mb-4 mt-4">Ingresar a Valor SOC para realizar tu inscripción.</p>
                    </div>
                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <p class="text-center mb-4 mt-4"><strong>Temario de evaluación</strong></p>
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour1" aria-expanded="true"
                                aria-controls="collapseFour1">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    I. Políticas y productos financieros <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseFour1" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li>a.  Banorte</li>
                                        <li>b.  Citibanamex</li>
                                        <li>c.  HSBC</li>
                                        <li>d.  Santander</li>
                                        <li>e.  Scotiabank</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
      
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour2"
                                aria-expanded="false" aria-controls="collapseFour2">
                                <h5 class="mb-0 d-flex justify-content-between">
                                    II. Comercial <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                                <!-- Card body -->
                            <div id="collapseFour2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                    data-parent="#accordionEx">
                                    <div class="card-body">
                                        <ul style="list-style: none;">
                                            <li>a.  5 pasos de atención al cliente </li>
                                            <li>b.  Asesoría</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <p class="text-center mt-4 mb-4 pb-4">Al obtener la certificación , enviaremos a tu oficina la credencial y certificado vigente que lo acredite.</p>
                    <div class="content-white">
                        <p class="text-center mb-4 mt-4"><strong>Beneficios</strong></p>
                        <ul>
                            <li>Participación en el grupo piloto para nuevas herramientas.</li>
                            <li>Vídeo reconocimiento.</li>
                            <li>Regalos y promocionales (vales para Tienda SOC).</li>
                            <li>Distintivos en micrositios.</li>
                            <li>Paquete de branding de oficina con tu distintivo (dependiendo de la categoría).</li>
                        </ul>
                    </div>
                    <p class="text-center mt-4 pt-4"><a href="https://lgctec.com/inventario_valor/form_uni_contacto/" target="_blank" class="green-button">Quiero certificarme</a></p>
                </div>
            </div>
            </div>
        </div>
</div>
@endsection
