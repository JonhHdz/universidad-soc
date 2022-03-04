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
            <h3 class="text-center">Certificación Asesor Seguros</h3>
        </div>
    </div>
</div>
<div class="certificaciones-sec-1 container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="senior" role="tabpanel" aria-labelledby="senior-tab">
                        <p>Si eres operador u asesor, podrás participar para esta categoría, en donde acreditamos tus conocimientos básicos en generalidades del negocio empresarial.</p>
                        <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                        <ul>
                            <li>Contar con cedula de seguros vigente (A1, A, B1 y/o B) y acreditar al 100% el curso de Inducción Seguros.</li>
                            <li>Acreditar las evaluaciones en la plataforma de Universidad SOC, con una calificación mínima de 8. (Skandia, AXA Vida, GMM GNP y AXA).</li>
                            <li>Acreditar el curso y evaluación de Articulo 492 Ley Antilavado.</li>
                            <li>Realizar el pago correspondiente a $300.00 MXN IVA incluido.</li>
                        </ul>
                        
                        <p class="text-center mb-4 mt-4"><strong>Vigencia 1 año</strong></p>
                        <div class="content-white">
                            <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                            <p class="text-center mb-4 mt-4">Deberás solicitar tu inscripción y llenar el formato con el soporte de universidad empresarial.</p>
                        </div>
                        <!--Accordion wrapper-->
                        
                        <p class="text-center mt-4 mb-4 pb-4">Al obtener la certificación , enviaremos a tu oficina la credencial y certificado vigente que lo acredite.</p>
                        <p class="text-center mt-4 pt-4"><a href="#form" target="_blank" class="form-b green-button">Quiero certificarme</a></p>
                    </div>
                    <div class="tab-pane fade" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">
                        <p>Esta certificación acredita tu experiencia en generalidades y producto empresarial. Además, reconoce tu conocimiento y profesionalismo en la asesoría.</p>
                        <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                        <ul>
                            <li>Acreditar de forma satisfactoria el curso de Inducción Empresarial SOC, con una calificación mínima de 8.0.</li>
                            <li>Acreditar curso en versión on-demand de "Networking".</li>
                            <li>Mantener una cartera de clientes sana (esta validación la realizaremos con nuestra área de riesgos)</li>
                            <li>Contar con, al menos, un año ejerciendo como asesor empresarial en SOC en la misma oficina</li>
                            <li>Contar con 12 operaciones de créditos empresariales en el último año.</li>
                            <li>Realizar el pago correspondiente a $300.00 MXN IVA incluido.</li>
                        </ul>
                        <p class="text-center mb-4 mt-4"><strong>Vigencia 1 año</strong></p>
                        <div class="content-white">
                            <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                            <p class="text-center mb-4 mt-4">Deberás solicitar tu inscripción y llenar el formato con el soporte de universidad empresarial.</p>
                        </div>
                        
                        <p class="text-center mt-4 mb-4 pb-4">Al obtener la certificación , enviaremos a tu oficina la credencial y certificado vigente que lo acredite.</p>
                        <p class="text-center mt-4 pt-4"><a href="#form" target="_blank" class="form-b green-button">Quiero certificarme</a></p>
                    </div>
                    <div class="tab-pane fade" id="master" role="tabpanel" aria-labelledby="master-tab">
                    <p>Para lograr esta categoría, medimos tu trayectoria en SOC y el éxito que has logrado en el negocio empresarial.</p>
                        <p class="text-center mb-4 mt-4"><strong>Requisitos</strong></p>
                        <ul>
                            <li>Acreditar el curso en versión on-demand, de "Estrategia de marketing y comunicación digital".</li>
                            <li>Contar con, al menos, tres años continuos ejerciendo tu actividad en SOC, en la misma oficina.</li>
                            <li>
                                <ul>
                                    <li>Si operas, es decir, si atiendes directamente a los clientes:
                                        <ul>
                                            <li>Deberás tener una colocación de, al menos, $27 millones y/o 36 operaciones de créditos empresariales en el último año</li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul>
                                    <li>Si NO operas y eres gerente o titular de oficina:
                                        <ul>
                                            <li>Deberás tener una colocación de, al menos, $126 millones y/o 108 operaciones de créditos empresariales en el último año.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                        
                        <p class="text-center mb-4 mt-4"><strong>Vigencia 1 año</strong></p>
                        <div class="content-white">
                            <p class="text-center mb-4 mt-4"><strong>¿Cómo certificarme?</strong></p>
                            <p class="text-center mb-4 mt-4">Deberás solicitar tu inscripción y llenar el formato con el soporte de universidad empresarial.</p>
                        </div>
                        <!--Accordion wrapper-->
                        
                        <p class="text-center mt-4 mb-4 pb-4">Al obtener la certificación , enviaremos a tu oficina la credencial y certificado vigente que lo acredite.</p>
                        <p class="text-center mt-4 pt-4"><a href="#form" target="_blank" class="green-button form-b">Quiero certificarme</a></p>
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
        </div>
</div>
@endsection
