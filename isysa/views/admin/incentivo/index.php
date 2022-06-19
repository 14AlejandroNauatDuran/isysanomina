<?php
include_once __DIR__ . '/../../templates/header.php';
?>
<main class="container"><!-- inicio main -->
 <div class="container-fluid ">
  
  <h2 class="text-center">Sección de Incentivos</h2>

  <div class="btn-group">
    <a href="/admin-incentivo/crear" class="btn btn-primary">
     NUEVO
    </a>
  </div>
  <h3>Tipos de productos incentivos actuales</h3>
 
  <table class="table table-hover" id="Produc_incen">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($produc_incen as $produc_incen) { ?>
      <tr>
        <td><?php echo $produc_incen->id; ?></th>
        <td><?php echo $produc_incen->nombreP; ?></td>

        <td>
          <div class="btn-group">
              <a href="/admin-incentivo/actualizar?id=<?php echo $produc_incen->id; ?>" class="btn btn-primary">
              Editar  
              </a>
              <form action="/admin-incentivo/eliminar" method="POST">
                        <input type="hidden" name="id" value="<?php echo $produc_incen->id; ?>">
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
          </div>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
 </div>
 <br><br><br>
 <!-- viajes -->
 <div class="container-fluid">

    <h3>Incenivos cernidas</h3>

    <div class="accordion accordion-flush" id="accordionFlushCERNIDAS">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingA">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseA" aria-expanded="false" aria-controls="flush-collapseA">
            ALIMENTADOR, PESADOR LLENADOR, MOLINERO CRIBERO, ESTIBADOR, COSTURADOR DE SACOS SUPLENTE
          </button>
        </h2>
        <div id="flush-collapseA" class="accordion-collapse collapse" aria-labelledby="flush-headingA" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-A_pll_mc_e_css/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="A_pll_mc_e_css">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($A_pll_mc_e_css as $A_pll_mc_e_css) { ?>
                <tr>
                  <td><?php echo $A_pll_mc_e_css->produc_incen_id; ?></th>
                  <td><?php echo $A_pll_mc_e_css->rangoA; ?></td>
                  <td><?php echo $A_pll_mc_e_css->rangoB; ?></td>
                  <td><?php echo $A_pll_mc_e_css->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-A_pll_mc_e_css/actualizar?id=<?php echo $A_pll_mc_e_css->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-A_pll_mc_e_css/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $A_pll_mc_e_css->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingB">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseB" aria-expanded="false" aria-controls="flush-collapseB">
           TRABAJADOR DE LIMPIEZA MOLINOS
          </button>
        </h2>
        <div id="flush-collapseB" class="accordion-collapse collapse" aria-labelledby="flush-headingB" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Tlm_c/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="Tlm_c">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Tlm_c as $Tlm_c) { ?>
                <tr>
                  <td><?php echo $Tlm_c->produc3_incen_id; ?></th>
                  <td><?php echo $Tlm_c->rangoA; ?></td>
                  <td><?php echo $Tlm_c->rangoB; ?></td>
                  <td><?php echo $Tlm_c->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Tlm_c/actualizar?id=<?php echo $Tlm_c->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Tlm_c/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Tlm_c->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingC">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseC" aria-expanded="false" aria-controls="flush-collapseC">
          OPER. DE TRAXCAVO Y OPER. DE TRACTOCAMION
          </button>
        </h2>
        <div id="flush-collapseC" class="accordion-collapse collapse" aria-labelledby="flush-headingC" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Otx_atc/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="Otx_atc">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Otx_atc as $Otx_atc) { ?>
                <tr>
                  <td><?php echo $Otx_atc->produc17_incen_id; ?></th>
                  <td><?php echo $Otx_atc->rangoA; ?></td>
                  <td><?php echo $Otx_atc->rangoB; ?></td>
                  <td><?php echo $Otx_atc->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Otx_atc/actualizar?id=<?php echo $Otx_atc->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Otx_atc/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Otx_atc->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingD">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseD" aria-expanded="false" aria-controls="flush-collapseD">
          SOLDADOR, MECANICO TORNERO, ELECTRICISTA INSTALADOR
          </button>
        </h2>
        <div id="flush-collapseD" class="accordion-collapse collapse" aria-labelledby="flush-headingD" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-S_mt_e_cer/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="S_mt_e_cer">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($S_mt_e_cer as $S_mt_e_cer) { ?>
                <tr>
                  <td><?php echo $S_mt_e_cer->produc19_incen_id; ?></th>
                  <td><?php echo $S_mt_e_cer->rangoA; ?></td>
                  <td><?php echo $S_mt_e_cer->rangoB; ?></td>
                  <td><?php echo $S_mt_e_cer->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-S_mt_e_cer/actualizar?id=<?php echo $S_mt_e_cer->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-S_mt_e_cer/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $S_mt_e_cer->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>          
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingE">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseE" aria-expanded="false" aria-controls="flush-collapsE">
          AYUDANTE MANTTO. SOLDADOR, MECANICO TORNERO, ELECTRICISTA
          </button>
        </h2>
        <div id="flush-collapseE" class="accordion-collapse collapse" aria-labelledby="flush-headingE" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Amatto_s_mt_e_cer/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="Amatto_s_mt_e_cer">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Amatto_s_mt_e_cer as $Amatto_s_mt_e_cer) { ?>
                <tr>
                  <td><?php echo $Amatto_s_mt_e_cer->produc21_incen_id; ?></th>
                  <td><?php echo $Amatto_s_mt_e_cer->rangoA; ?></td>
                  <td><?php echo $Amatto_s_mt_e_cer->rangoB; ?></td>
                  <td><?php echo $Amatto_s_mt_e_cer->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Amatto_s_mt_e_cer/actualizar?id=<?php echo $Amatto_s_mt_e_cer->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Amatto_s_mt_e_cer/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Amatto_s_mt_e_cer->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingF">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseF" aria-expanded="false" aria-controls="flush-collapseF">
          CARPINTERO, PLOMERO, AYUD. PLOMERO
          </button>
        </h2>
        <div id="flush-collapseF" class="accordion-collapse collapse" aria-labelledby="flush-headingF" data-bs-parent="#accordionFlushCERNIDAS">
        <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-C_p_ap_cer/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="C_p_ap_cer">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($C_p_ap_cer as $C_p_ap_cer) { ?>
                <tr>
                  <td><?php echo $C_p_ap_cer->produc23_incen_id; ?></th>
                  <td><?php echo $C_p_ap_cer->rangoA; ?></td>
                  <td><?php echo $C_p_ap_cer->rangoB; ?></td>
                  <td><?php echo $C_p_ap_cer->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-C_p_ap_cer/actualizar?id=<?php echo $C_p_ap_cer->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-C_p_ap_cer/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $C_p_ap_cer->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>          
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingG">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseG" aria-expanded="false" aria-controls="flush-collapseG">
          EBANISTA / ALUMINIERO
          </button>
        </h2>
        <div id="flush-collapseG" class="accordion-collapse collapse" aria-labelledby="flush-headingG" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-E_a/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="E_a">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($E_a as $E_a) { ?>
                <tr>
                  <td><?php echo $E_a->produc25_incen_id; ?></th>
                  <td><?php echo $E_a->rangoA; ?></td>
                  <td><?php echo $E_a->rangoB; ?></td>
                  <td><?php echo $E_a->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-E_a/actualizar?id=<?php echo $E_a->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-E_a/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $E_a->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>          
        </div>        
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingH">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseH" aria-expanded="false" aria-controls="flush-collapseH">
          AYUDANTE DE TALLER
          </button>
        </h2>
        <div id="flush-collapseH" class="accordion-collapse collapse" aria-labelledby="flush-headingH" data-bs-parent="#accordionFlushCERNIDAS">
        <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-At_cer/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="At_cer">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($At_cer as $At_cer) { ?>
                <tr>
                  <td><?php echo $At_cer->produc26_incen_id; ?></th>
                  <td><?php echo $At_cer->rangoA; ?></td>
                  <td><?php echo $At_cer->rangoB; ?></td>
                  <td><?php echo $At_cer->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-At_cer/actualizar?id=<?php echo $At_cer->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-At_cer/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $At_cer->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingI">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseI" aria-expanded="false" aria-controls="flush-collapseI">
          ALBAÑIL
          </button>
        </h2>
        <div id="flush-collapseI" class="accordion-collapse collapse" aria-labelledby="flush-headingI" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
              <div class="btn-group">
                <a href="/admin-incentivo-Alb_cer/crear" class="btn btn-primary" >NUEVO</a>
              </div>      
              <table class="table table-hover" id="Alb_cer">
                <thead>
                  <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Rango A</th>
                    <th scope="col">Rango B</th>
                    <th scope="col">Factor</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($Alb_cer as $Alb_cer) { ?>
                  <tr>
                    <td><?php echo $Alb_cer->produc32_incen_id; ?></th>
                    <td><?php echo $Alb_cer->rangoA; ?></td>
                    <td><?php echo $Alb_cer->rangoB; ?></td>
                    <td><?php echo $Alb_cer->factor; ?></td>
                    <td>
                      <div class="btn-group">
                          <a href="/admin-incentivo-Alb_cer/actualizar?id=<?php echo $Alb_cer->id; ?>" class="btn btn-primary">Editar</a>
                          <form action="/admin-incentivo-Alb_cer/eliminar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $Alb_cer->id; ?>">
                            <button type="submit" class="btn btn-danger">Borrar</button>
                          </form>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>          
        </div>       
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingJ">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseJ" aria-expanded="false" aria-controls="flush-collapseJ">
          TRABAJADORES DEL MUELLE CON TRABAJOS DE SAMBLASEO
          </button>
        </h2>
        <div id="flush-collapseJ" class="accordion-collapse collapse" aria-labelledby="flush-headingJ" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
              <div class="btn-group">
                <a href="/admin-incentivo-Tm_ts_cer/crear" class="btn btn-primary" >NUEVO</a>
              </div>      
              <table class="table table-hover" id="Tm_ts_cer">
                <thead>
                  <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Rango A</th>
                    <th scope="col">Rango B</th>
                    <th scope="col">Factor</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($Tm_ts_cer as $Tm_ts_cer) { ?>
                  <tr>
                    <td><?php echo $Tm_ts_cer->produc33_incen_id; ?></th>
                    <td><?php echo $Tm_ts_cer->rangoA; ?></td>
                    <td><?php echo $Tm_ts_cer->rangoB; ?></td>
                    <td><?php echo $Tm_ts_cer->factor; ?></td>
                    <td>
                      <div class="btn-group">
                          <a href="/admin-incentivo-Tm_ts_cer/actualizar?id=<?php echo $Tm_ts_cer->id; ?>" class="btn btn-primary">Editar</a>
                          <form action="/admin-incentivo-Tm_ts_cer/eliminar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $Tm_ts_cer->id; ?>">
                            <button type="submit" class="btn btn-danger">Borrar</button>
                          </form>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingK">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseK" aria-expanded="false" aria-controls="flush-collapseK">
          MECANICO, ELECTRICO, LLANTERO, LUBICADOR LAVADOR
          </button>
        </h2>
        <div id="flush-collapseK" class="accordion-collapse collapse" aria-labelledby="flush-headingK" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
              <div class="btn-group">
                <a href="/admin-incentivo-M_e_ll_l_cer/crear" class="btn btn-primary" >NUEVO</a>
              </div>      
              <table class="table table-hover" id="M_e_ll_l_cer">
                <thead>
                  <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Rango A</th>
                    <th scope="col">Rango B</th>
                    <th scope="col">Factor</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($M_e_ll_l_cer as $M_e_ll_l_cer) { ?>
                  <tr>
                    <td><?php echo $M_e_ll_l_cer->produc35_incen_id; ?></th>
                    <td><?php echo $M_e_ll_l_cer->rangoA; ?></td>
                    <td><?php echo $M_e_ll_l_cer->rangoB; ?></td>
                    <td><?php echo $M_e_ll_l_cer->factor; ?></td>
                    <td>
                      <div class="btn-group">
                          <a href="/admin-incentivo-M_e_ll_l_cer/actualizar?id=<?php echo $M_e_ll_l_cer->id; ?>" class="btn btn-primary">Editar</a>
                          <form action="/admin-incentivo-M_e_ll_l_cer/eliminar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $M_e_ll_l_cer->id; ?>">
                            <button type="submit" class="btn btn-danger">Borrar</button>
                          </form>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingL">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseL" aria-expanded="false" aria-controls="flush-collapseL">
          AYUDANTE DE TALLER AUTOMOTRIZ
          </button>
        </h2>
        <div id="flush-collapseL" class="accordion-collapse collapse" aria-labelledby="flush-headingL" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
              <div class="btn-group">
                <a href="/admin-incentivo-At_au_cer/crear" class="btn btn-primary" >NUEVO</a>
              </div>      
              <table class="table table-hover" id="At_au_cer">
                <thead>
                  <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Rango A</th>
                    <th scope="col">Rango B</th>
                    <th scope="col">Factor</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($At_au_cer as $At_au_cer) { ?>
                  <tr>
                    <td><?php echo $At_au_cer->produc38_incen_id; ?></th>
                    <td><?php echo $At_au_cer->rangoA; ?></td>
                    <td><?php echo $At_au_cer->rangoB; ?></td>
                    <td><?php echo $At_au_cer->factor; ?></td>
                    <td>
                      <div class="btn-group">
                          <a href="/admin-incentivo-At_au_cer/actualizar?id=<?php echo $At_au_cer->id; ?>" class="btn btn-primary">Editar</a>
                          <form action="/admin-incentivo-At_au_cer/eliminar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $At_au_cer->id; ?>">
                            <button type="submit" class="btn btn-danger">Borrar</button>
                          </form>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingLL">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseLL" aria-expanded="false" aria-controls="flush-collapseLL">
          TRABAJADOR DE LIMPIEZA, LIMPIEZA OFICINAS
          </button>
        </h2>
        <div id="flush-collapseLL" class="accordion-collapse collapse" aria-labelledby="flush-headingLL" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
              <div class="btn-group">
                <a href="/admin-incentivo-Tl_cer/crear" class="btn btn-primary" >NUEVO</a>
              </div>      
              <table class="table table-hover" id="Tl_cer">
                <thead>
                  <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Rango A</th>
                    <th scope="col">Rango B</th>
                    <th scope="col">Factor</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($Tl_cer as $Tl_cer) { ?>
                  <tr>
                    <td><?php echo $Tl_cer->produc40_incen_id; ?></th>
                    <td><?php echo $Tl_cer->rangoA; ?></td>
                    <td><?php echo $Tl_cer->rangoB; ?></td>
                    <td><?php echo $Tl_cer->factor; ?></td>
                    <td>
                      <div class="btn-group">
                          <a href="/admin-incentivo-Tl_cer/actualizar?id=<?php echo $Tl_cer->id; ?>" class="btn btn-primary">Editar</a>
                          <form action="/admin-incentivo-Tl_cer/eliminar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $Tl_cer->id; ?>">
                            <button type="submit" class="btn btn-danger">Borrar</button>
                          </form>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingM">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseM" aria-expanded="false" aria-controls="flush-collapseM">
          MECANICO B
          </button>
        </h2>
        <div id="flush-collapseM" class="accordion-collapse collapse" aria-labelledby="flush-headingM" data-bs-parent="#accordionFlushCERNIDAS">
          <div class="accordion-body">
              <div class="btn-group">
                <a href="/admin-incentivo-M_b_cer/crear" class="btn btn-primary" >NUEVO</a>
              </div>      
              <table class="table table-hover" id="M_b_cer">
                <thead>
                  <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Rango A</th>
                    <th scope="col">Rango B</th>
                    <th scope="col">Factor</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($M_b_cer as $M_b_cer) { ?>
                  <tr>
                    <td><?php echo $M_b_cer->produc41_incen_id; ?></th>
                    <td><?php echo $M_b_cer->rangoA; ?></td>
                    <td><?php echo $M_b_cer->rangoB; ?></td>
                    <td><?php echo $M_b_cer->factor; ?></td>
                    <td>
                      <div class="btn-group">
                          <a href="/admin-incentivo-M_b_cer/actualizar?id=<?php echo $M_b_cer->id; ?>" class="btn btn-primary">Editar</a>
                          <form action="/admin-incentivo-M_b_cer/eliminar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $M_b_cer->id; ?>">
                            <button type="submit" class="btn btn-danger">Borrar</button>
                          </form>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>         
        </div>
      </div>
    </div>  
    <br><br><br>
    <h3>Incenivos directas</h3>

    <div class="accordion accordion-flush" id="accordionFlushDIRECTAS">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingN">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseN" aria-expanded="false" aria-controls="flush-collapseN">
          COSTURADOR DE SACOS, MOLINERO CRIBERO, ALIMENTADOR, PESADOR LLENADOR, ESTIBADOR, SUPLENTE
          </button>
        </h2>
        <div id="flush-collapseN" class="accordion-collapse collapse" aria-labelledby="flush-headingN" data-bs-parent="#accordionFlushDIRECTAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Cs_mc_a_pll_e_s/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="Cs_mc_a_pll_e_s">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Cs_mc_a_pll_e_s as $Cs_mc_a_pll_e_s) { ?>
                <tr>
                  <td><?php echo $Cs_mc_a_pll_e_s->produc4_incen_id; ?></th>
                  <td><?php echo $Cs_mc_a_pll_e_s->rangoA; ?></td>
                  <td><?php echo $Cs_mc_a_pll_e_s->rangoB; ?></td>
                  <td><?php echo $Cs_mc_a_pll_e_s->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Cs_mc_a_pll_e_s/actualizar?id=<?php echo $Cs_mc_a_pll_e_s->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Cs_mc_a_pll_e_s/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Cs_mc_a_pll_e_s->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingÑ">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseÑ" aria-expanded="false" aria-controls="flush-collapseÑ">
          SOLDADOR, MECANICO TORNERO, ELECTRICISTA INSTALADOR PARA P. DIRECTAS
          </button>
        </h2>
        <div id="flush-collapseÑ" class="accordion-collapse collapse" aria-labelledby="flush-headingÑ" data-bs-parent="#accordionFlushDIRECTAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-S_mt_e_dir/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="S_mt_e_dir">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($S_mt_e_dir as $S_mt_e_dir) { ?>
                <tr>
                  <td><?php echo $S_mt_e_dir->produc20_incen_id; ?></th>
                  <td><?php echo $S_mt_e_dir->rangoA; ?></td>
                  <td><?php echo $S_mt_e_dir->rangoB; ?></td>
                  <td><?php echo $S_mt_e_dir->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-S_mt_e_dir/actualizar?id=<?php echo $S_mt_e_dir->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-S_mt_e_dir/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $S_mt_e_dir->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingO">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseO" aria-expanded="false" aria-controls="flush-collapseO">
          AUXILIAR DE MANTTO. SOLDADOR, MECANICO TORNERO, ELECTRICISTA INSTALADOR PARA P. DIRECTAS
          </button>
        </h2>
        <div id="flush-collapseO" class="accordion-collapse collapse" aria-labelledby="flush-headingO" data-bs-parent="#accordionFlushDIRECTAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Amatto_s_mt_e_dir/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="Amatto_s_mt_e_dir">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Amatto_s_mt_e_dir as $Amatto_s_mt_e_dir) { ?>
                <tr>
                  <td><?php echo $Amatto_s_mt_e_dir->produc22_incen_id; ?></th>
                  <td><?php echo $Amatto_s_mt_e_dir->rangoA; ?></td>
                  <td><?php echo $Amatto_s_mt_e_dir->rangoB; ?></td>
                  <td><?php echo $Amatto_s_mt_e_dir->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Amatto_s_mt_e_dir/actualizar?id=<?php echo $Amatto_s_mt_e_dir->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Amatto_s_mt_e_dir/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Amatto_s_mt_e_dir->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingP">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseP" aria-expanded="false" aria-controls="flush-collapseP">
          PLOMERO, AYUDANTE DE PLOMERO
          </button>
        </h2>
        <div id="flush-collapseP" class="accordion-collapse collapse" aria-labelledby="flush-headingP" data-bs-parent="#accordionFlushDIRECTAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-P_ap_dir/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="P_ap_dir">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($P_ap_dir as $P_ap_dir) { ?>
                <tr>
                  <td><?php echo $P_ap_dir->produc24_incen_id; ?></th>
                  <td><?php echo $P_ap_dir->rangoA; ?></td>
                  <td><?php echo $P_ap_dir->rangoB; ?></td>
                  <td><?php echo $P_ap_dir->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-P_ap_dir/actualizar?id=<?php echo $P_ap_dir->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-P_ap_dir/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $P_ap_dir->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingQ">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseQ" aria-expanded="false" aria-controls="flush-collapseQ">
          AYUDANTE DE TALLER
          </button>
        </h2>
        <div id="flush-collapseQ" class="accordion-collapse collapse" aria-labelledby="flush-headingQ" data-bs-parent="#accordionFlushDIRECTAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-At_dir/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="At_dir">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($At_dir as $At_dir) { ?>
                <tr>
                  <td><?php echo $At_dir->produc27_incen_id; ?></th>
                  <td><?php echo $At_dir->rangoA; ?></td>
                  <td><?php echo $At_dir->rangoB; ?></td>
                  <td><?php echo $At_dir->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-At_dir/actualizar?id=<?php echo $At_dir->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-At_dir/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $At_dir->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingR">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseR" aria-expanded="false" aria-controls="flush-collapseR">
          MECANICO, ELECTRICO, LLANTERO, LUBRICADOR LAVADOR
          </button>
        </h2>
        <div id="flush-collapseR" class="accordion-collapse collapse" aria-labelledby="flush-headingR" data-bs-parent="#accordionFlushDIRECTAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-M_e_ll_l_dir/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="M_e_ll_l_dir">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($M_e_ll_l_dir as $M_e_ll_l_dir) { ?>
                <tr>
                  <td><?php echo $M_e_ll_l_dir->produc36_incen_id; ?></th>
                  <td><?php echo $M_e_ll_l_dir->rangoA; ?></td>
                  <td><?php echo $M_e_ll_l_dir->rangoB; ?></td>
                  <td><?php echo $M_e_ll_l_dir->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-M_e_ll_l_dir/actualizar?id=<?php echo $M_e_ll_l_dir->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-M_e_ll_l_dir/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $M_e_ll_l_dir->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingS">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseS" aria-expanded="false" aria-controls="flush-collapseS">
          AYUDANTE DE TALLER AUTOMOTRIZ
          </button>
        </h2>
        <div id="flush-collapseS" class="accordion-collapse collapse" aria-labelledby="flush-headingS" data-bs-parent="#accordionFlushDIRECTAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-At_au_dir/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="At_au_dir">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($At_au_dir as $At_au_dir) { ?>
                <tr>
                  <td><?php echo $At_au_dir->produc39_incen_id; ?></th>
                  <td><?php echo $At_au_dir->rangoA; ?></td>
                  <td><?php echo $At_au_dir->rangoB; ?></td>
                  <td><?php echo $At_au_dir->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-At_au_dir/actualizar?id=<?php echo $At_au_dir->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-At_au_dir/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $At_au_dir->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingT">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseT" aria-expanded="false" aria-controls="flush-collapseT">
          MECANICO B
          </button>
        </h2>
        <div id="flush-collapseT" class="accordion-collapse collapse" aria-labelledby="flush-headingT" data-bs-parent="#accordionFlushDIRECTAS">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-M_b_dir/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="M_b_dir">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($M_b_dir as $M_b_dir) { ?>
                <tr>
                  <td><?php echo $M_b_dir->produc42_incen_id; ?></th>
                  <td><?php echo $M_b_dir->rangoA; ?></td>
                  <td><?php echo $M_b_dir->rangoB; ?></td>
                  <td><?php echo $M_b_dir->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-M_b_dir/actualizar?id=<?php echo $M_b_dir->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-M_b_dir/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $M_b_dir->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
    </div>  
    <br><br><br>
    <h3>Incenivos por viajes</h3>

    <div class="accordion accordion-flush" id="accordionFlushVIAJES">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingU">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseU" aria-expanded="false" aria-controls="flush-collapseU">
            LAVADORISTA
          </button>
        </h2>
        <div id="flush-collapseU" class="accordion-collapse collapse" aria-labelledby="flush-headingU" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Lav/crear" class="btn btn-primary" >NUEVO</a>
            </div>      
            <table class="table table-hover" id="Lav">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Lav as $Lav) { ?>
                <tr>
                  <td><?php echo $Lav->produc5_incen_id; ?></th>
                  <td><?php echo $Lav->rangoA; ?></td>
                  <td><?php echo $Lav->rangoB; ?></td>
                  <td><?php echo $Lav->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Lav/actualizar?id=<?php echo $Lav->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Lav/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Lav->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingV">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseV" aria-expanded="false" aria-controls="flush-collapseV">
            AYUDANTE DE LAVADORAS
          </button>
        </h2>
        <div id="flush-collapseV" class="accordion-collapse collapse" aria-labelledby="flush-headingV" data-bs-parent="#accordionFlushVIAJES">
        <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-A_lav/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="A_lav">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($A_lav as $A_lav) { ?>
                <tr>
                  <td><?php echo $A_lav->produc6_incen_id; ?></th>
                  <td><?php echo $A_lav->rangoA; ?></td>
                  <td><?php echo $A_lav->rangoB; ?></td>
                  <td><?php echo $A_lav->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-A_lav/actualizar?id=<?php echo $A_lav->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-A_lav/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $A_lav->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingW">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseW" aria-expanded="false" aria-controls="flush-collapseW">
          OPERADOR DE MAQUINA PESADA (COSECHA, CAMPO Y CERRO DE SAL
          </button>
        </h2>
        <div id="flush-collapseW" class="accordion-collapse collapse" aria-labelledby="flush-headingW" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Omp/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="Omp">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Omp as $Omp) { ?>
                <tr>
                  <td><?php echo $Omp->produc11_incen_id; ?></th>
                  <td><?php echo $Omp->rangoA; ?></td>
                  <td><?php echo $Omp->rangoB; ?></td>
                  <td><?php echo $Omp->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Omp/actualizar?id=<?php echo $Omp->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Omp/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Omp->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>        
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingX">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseX" aria-expanded="false" aria-controls="flush-collapseX">
          OPERADOR DE TRACTOCAMION
          </button>
        </h2>
        <div id="flush-collapseX" class="accordion-collapse collapse" aria-labelledby="flush-headingX" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Ot/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="Ot">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Ot as $Ot) { ?>
                <tr>
                  <td><?php echo $Ot->produc10_incen_id; ?></th>
                  <td><?php echo $Ot->rangoA; ?></td>
                  <td><?php echo $Ot->rangoB; ?></td>
                  <td><?php echo $Ot->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Ot/actualizar?id=<?php echo $Ot->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Ot/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Ot->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingY">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseY" aria-expanded="false" aria-controls="flush-collapseY">
          TRABAJADOR DE COSECHA
          </button>
        </h2>
        <div id="flush-collapseY" class="accordion-collapse collapse" aria-labelledby="flush-headingY" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Tc/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="Tc">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Tc as $Tc) { ?>
                <tr>
                  <td><?php echo $Tc->produc12_incen_id; ?></th>
                  <td><?php echo $Tc->rangoA; ?></td>
                  <td><?php echo $Tc->rangoB; ?></td>
                  <td><?php echo $Tc->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Tc/actualizar?id=<?php echo $Tc->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Tc/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Tc->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div> 
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingZ">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseZ" aria-expanded="false" aria-controls="flush-collapseZ">
          TRABAJADORES DE CAMPO
          </button>
        </h2>
        <div id="flush-collapseZ" class="accordion-collapse collapse" aria-labelledby="flush-headingZ" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-T_campo/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="T_campo">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                 
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($T_campo as $T_campo) { ?>
                <tr>
                  <td><?php echo $T_campo->produc14_incen_id; ?></th>
                 
                  <td><?php echo $T_campo->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-T_campo/actualizar?id=<?php echo $T_campo->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-T_campo/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $T_campo->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingAA">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseAA" aria-expanded="false" aria-controls="flush-collapseAA">
          OPERADOR DE TRAXCAVO
          </button>
        </h2>
        <div id="flush-collapseAA" class="accordion-collapse collapse" aria-labelledby="flush-headingAA" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Otx_aco/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="Otx_aco">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
               
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Otx_aco as $Otx_aco) { ?>
                <tr>
                  <td><?php echo $Otx_aco->produc15_incen_id; ?></th>
                 
                  <td><?php echo $Otx_aco->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Otx_aco/actualizar?id=<?php echo $Otx_aco->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Otx_aco/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Otx_aco->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingBB">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseBB" aria-expanded="false" aria-controls="flush-collapseBB">
          AUXILIAR DE MANTTO. Y SERV. VARIOS (CHOFERES) VOLQUETE
          </button>
        </h2>
        <div id="flush-collapseBB" class="accordion-collapse collapse" aria-labelledby="flush-headingBB" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Amsv/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="Amsv">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
               
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Amsv as $Amsv) { ?>
                <tr>
                  <td><?php echo $Amsv->produc13_incen_id; ?></th>
            
                  <td><?php echo $Amsv->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Amsv/actualizar?id=<?php echo $Amsv->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Amsv/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Amsv->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingCC">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCC" aria-expanded="false" aria-controls="flush-collapseCC">
          CHOFER DE SERVICIOS
          </button>
        </h2>
        <div id="flush-collapseCC" class="accordion-collapse collapse" aria-labelledby="flush-headingCC" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Cs/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="Cs">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>

                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Cs as $Cs) { ?>
                <tr>
                  <td><?php echo $Cs->produc18_incen_id; ?></th>
                  <td><?php echo $Cs->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Cs/actualizar?id=<?php echo $Cs->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Cs/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Cs->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingDD">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDD" aria-expanded="false" aria-controls="flush-collapseDD">
          SOLDADOR, MECANICO TORNERO, ELECTRICISTA INSTALADOR
          </button>
        </h2>
        <div id="flush-collapseDD" class="accordion-collapse collapse" aria-labelledby="flush-headingDD" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-S_mt_e_via/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="S_mt_e_via">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($S_mt_e_via as $S_mt_e_via) { ?>
                <tr>
                  <td><?php echo $S_mt_e_via->produc28_incen_id; ?></th>
                  <td><?php echo $S_mt_e_via->rangoA; ?></td>
                  <td><?php echo $S_mt_e_via->rangoB; ?></td>
                  <td><?php echo $S_mt_e_via->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-S_mt_e_via/actualizar?id=<?php echo $S_mt_e_via->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-S_mt_e_via/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $S_mt_e_via->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingEE">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEE" aria-expanded="false" aria-controls="flush-collapseEE">
          CARPINTERO, PLOMERO, AYUDANTE DE PLOMERO
          </button>
        </h2>
        <div id="flush-collapseEE" class="accordion-collapse collapse" aria-labelledby="flush-headingEE" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-C_p_ap_via/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="C_p_ap_via">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($C_p_ap_via as $C_p_ap_via) { ?>
                <tr>
                  <td><?php echo $C_p_ap_via->produc29_incen_id; ?></th>
                  <td><?php echo $C_p_ap_via->rangoA; ?></td>
                  <td><?php echo $C_p_ap_via->rangoB; ?></td>
                  <td><?php echo $C_p_ap_via->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-C_p_ap_via/actualizar?id=<?php echo $C_p_ap_via->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-C_p_ap_via/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $C_p_ap_via->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>           
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFF">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFF" aria-expanded="false" aria-controls="flush-collapseFF">
          EBANISTA Y ALUMINIERO
          </button>
        </h2>
        <div id="flush-collapseFF" class="accordion-collapse collapse" aria-labelledby="flush-headingFF" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-E_a_via/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="E_a_via">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($E_a_via as $E_a_via) { ?>
                <tr>
                  <td><?php echo $E_a_via->produc30_incen_id; ?></th>
                  <td><?php echo $E_a_via->rangoA; ?></td>
                  <td><?php echo $E_a_via->rangoB; ?></td>
                  <td><?php echo $E_a_via->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-E_a_via/actualizar?id=<?php echo $E_a_via->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-E_a_via/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $E_a_via->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingGG">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseGG" aria-expanded="false" aria-controls="flush-collapseGG">
          AYUDANTE DE TALLER
          </button>
        </h2>
        <div id="flush-collapseGG" class="accordion-collapse collapse" aria-labelledby="flush-headingGG" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-At_via/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="At_via">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($At_via as $At_via) { ?>
                <tr>
                  <td><?php echo $At_via->produc31_incen_id; ?></th>
                  <td><?php echo $At_via->rangoA; ?></td>
                  <td><?php echo $At_via->rangoB; ?></td>
                  <td><?php echo $At_via->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-At_via/actualizar?id=<?php echo $At_via->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-At_via/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $At_via->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingHH">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseHH" aria-expanded="false" aria-controls="flush-collapseHH">
            TRABAJADORES DEL MUELLE #3 (COSECHA)
          </button>
        </h2>
        <div id="flush-collapseHH" class="accordion-collapse collapse" aria-labelledby="flush-headingHH" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-Tm_3_pcos/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="Tm_3_pcos">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($Tm_3_pcos as $Tm_3_pcos) { ?>
                <tr>
                  <td><?php echo $Tm_3_pcos->produc34_incen_id; ?></th>
                  <td><?php echo $Tm_3_pcos->rangoA; ?></td>
                  <td><?php echo $Tm_3_pcos->rangoB; ?></td>
                  <td><?php echo $Tm_3_pcos->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-Tm_3_pcos/actualizar?id=<?php echo $Tm_3_pcos->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-Tm_3_pcos/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $Tm_3_pcos->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>         
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingJJ">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseJJ" aria-expanded="false" aria-controls="flush-collapseJJ">
          MECANICO, ELECTRICO, LLANTERO, LUBRICADOR LAVADOR
          </button>
        </h2>
        <div id="flush-collapseJJ" class="accordion-collapse collapse" aria-labelledby="flush-headingJJ" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-M_e_ll_l_vie/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="M_e_ll_l_vie">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($M_e_ll_l_vie as $M_e_ll_l_vie) { ?>
                <tr>
                  <td><?php echo $M_e_ll_l_vie->produc37_incen_id; ?></th>
                  <td><?php echo $M_e_ll_l_vie->rangoA; ?></td>
                  <td><?php echo $M_e_ll_l_vie->rangoB; ?></td>
                  <td><?php echo $M_e_ll_l_vie->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-M_e_ll_l_vie/actualizar?id=<?php echo $M_e_ll_l_vie->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-M_e_ll_l_vie/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $M_e_ll_l_vie->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingKK">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseKK" aria-expanded="false" aria-controls="flush-collapseKK">
          AYUDANTE DE TALLER AUTOMOTRIZ
          </button>
        </h2>
        <div id="flush-collapseKK" class="accordion-collapse collapse" aria-labelledby="flush-headingKK" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-At_au_via/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="At_au_via">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($At_au_via as $At_au_via) { ?>
                <tr>
                  <td><?php echo $At_au_via->produc44_incen_id; ?></th>
                  <td><?php echo $At_au_via->rangoA; ?></td>
                  <td><?php echo $At_au_via->rangoB; ?></td>
                  <td><?php echo $At_au_via->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-At_au_via/actualizar?id=<?php echo $At_au_via->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-At_au_via/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $At_au_via->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingMM">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseMM" aria-expanded="false" aria-controls="flush-collapseMM">
          MECANICO B
          </button>
        </h2>
        <div id="flush-collapseMM" class="accordion-collapse collapse" aria-labelledby="flush-headingMM" data-bs-parent="#accordionFlushVIAJES">
          <div class="accordion-body">
            <div class="btn-group">
              <a href="/admin-incentivo-M_b_via/crear" class="btn btn-primary">NUEVO</a>
            </div>      
            <table class="table table-hover" id="M_b_via">
              <thead>
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Rango A</th>
                  <th scope="col">Rango B</th>
                  <th scope="col">Factor</th>
                  <th scope="col">AcciDs</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($M_b_via as $M_b_via) { ?>
                <tr>
                  <td><?php echo $M_b_via->produc43_incen_id; ?></th>
                  <td><?php echo $M_b_via->rangoA; ?></td>
                  <td><?php echo $M_b_via->rangoB; ?></td>
                  <td><?php echo $M_b_via->factor; ?></td>
                  <td>
                    <div class="btn-group">
                        <a href="/admin-incentivo-M_b_via/actualizar?id=<?php echo $M_b_via->id; ?>" class="btn btn-primary">Editar</a>
                        <form action="/admin-incentivo-M_b_via/eliminar" method="POST">
                          <input type="hidden" name="id" value="<?php echo $M_b_via->id; ?>">
                          <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>        
        </div>
      </div>
    </div>
 </div>
</main><!-- inicio main -->

<?php 
    $script = "";
          
?>
<?php
  include_once __DIR__ . '/../../templates/footer.php';
?>