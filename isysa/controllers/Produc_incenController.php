<?php
namespace Controllers;


use MVC\Router;
use Model\Produc_incen; 

//************MOLINOS Y ENVASADOS****** */
//CERENIDAS
use Model\A_pll_mc_e_css;
use Model\Tlm_c;
//DIRECTAS
use Model\Cs_mc_a_pll_e_s;
//AMBAS
use Model\Mon;

/*************LAVADORAS ****** */
//VIAJES
use Model\Lav;
use Model\A_lav;

/*************EMBARQUES ****** */
//CERNIDAS
use Model\Ttv_m;
use Model\Ttv_ll;
use Model\Ttv;

/*************COSECHA Y CAMPO ****** */
//CERENIDAS
use Model\Otx_atc;
//AMBAS
use Model\Otx_amo; //falta
//VIAJES
use Model\Omp;
use Model\Ot;
use Model\Tc;
use Model\T_campo;
use Model\Otx_aco;
use Model\Amsv;
use Model\Cs;

//************MANTENIMIENTO INDUSTRIAL****** */
//CERENIDAS
use Model\S_mt_e_cer;
use Model\Amatto_s_mt_e_cer;
use Model\C_p_ap_cer;
use Model\E_a;
use Model\At_cer;
use Model\Alb_cer;
use Model\Tm_ts_cer;
//DIRECTAS
use Model\S_mt_e_dir;
use Model\Amatto_s_mt_e_dir;
use Model\P_ap_dir;
use Model\At_dir;
//VIAJES
use Model\S_mt_e_via;
use Model\C_p_ap_via;
use Model\E_a_via;
use Model\At_via;
use Model\Tm_3_pcos;

//************MANTENIMIENTO ESP COLORADAS****** */
//CERENIDAS
use Model\M_e_ll_l_cer;
use Model\At_au_cer;
use Model\Tl_cer;
use Model\M_b_cer;
//DIRECTAS
use Model\M_e_ll_l_dir;
use Model\At_au_dir;
use Model\M_b_dir;
//VIAJES
use Model\M_e_ll_l_vie;
use Model\At_au_via;
use Model\M_b_via;


class Produc_incenController {
    public static function index(Router $router){
        $produc_incen = Produc_incen::all();
        //************MOLINOS Y ENVASADOS****** */
        //CERENIDAS
        $A_pll_mc_e_css=A_pll_mc_e_css::all();
        $Tlm_c=Tlm_c::all();
        //DIRECTAS
        $Cs_mc_a_pll_e_s=Cs_mc_a_pll_e_s::all();
        //AMBAS
        $Mon=Mon::all();

        /*************LAVADORAS ****** */
        //VIAJES
        $Lav=Lav::all();
        $A_lav=A_lav::all();

        /*************EMBARQUES ****** */
        //CERNIDAS
        $Ttv_m=Ttv_m::all();
        $Ttv_ll=Ttv_ll::all();
        $Ttv=Ttv::all();

        /*************COSECHA Y CAMPO ****** */
        //CERENIDAS
        $Otx_atc=Otx_atc::all();
        //AMBAS
        $Otx_amo=Otx_amo::all();
        //VIAJES
        $Omp=Omp::all();
        $Ot=Ot::all();
        $Tc=Tc::all();
        $T_campo=T_campo::all();
        $Otx_aco=Otx_aco::all();
        $Amsv=Amsv::all();
        $Cs=Cs::all();

        //************MANTENIMIENTO INDUSTRIAL****** */
        //CERENIDAS
        $S_mt_e_cer=S_mt_e_cer::all();
        $Amatto_s_mt_e_cer=Amatto_s_mt_e_cer::all();
        $C_p_ap_cer=C_p_ap_cer::all();
        $E_a=E_a::all();
        $At_cer=At_cer::all();
        $Alb_cer=Alb_cer::all();
        $Tm_ts_cer=Tm_ts_cer::all();
        //DIRECTAS
        $S_mt_e_dir=S_mt_e_dir::all();
        $Amatto_s_mt_e_dir=Amatto_s_mt_e_dir::all();
        $P_ap_dir=P_ap_dir::all();
        $At_dir=At_dir::all();
        //VIAJES
        $S_mt_e_via=S_mt_e_via::all();
        $C_p_ap_via=C_p_ap_via::all();
        $E_a_via=E_a_via::all();
        $At_via=At_via::all();
        $Tm_3_pcos=Tm_3_pcos::all();

        //************MANTENIMIENTO ESP COLORADAS****** */
        //CERENIDAS
        $M_e_ll_l_cer=M_e_ll_l_cer::all();
        $At_au_cer=At_au_cer::all();
        $Tl_cer=Tl_cer::all();
        $M_b_cer=M_b_cer::all();
        //DIRECTAS
        $M_e_ll_l_dir=M_e_ll_l_dir::all();
        $At_au_dir=At_au_dir::all();
        $M_b_dir=M_b_dir::all();
        //VIAJES
        $M_e_ll_l_vie=M_e_ll_l_vie::all();
        $At_au_via=At_au_via::all();
        $M_b_via=M_b_via::all();

        $router->render('admin/incentivo/index',
        ['produc_incen'=>$produc_incen ,
        'A_pll_mc_e_css'=>$A_pll_mc_e_css,
        'Tlm_c'=>$Tlm_c,
        'Cs_mc_a_pll_e_s'=>$Cs_mc_a_pll_e_s,
        'Mon'=>$Mon,
        'Lav'=>$Lav,
        'A_lav'=>$A_lav,
        'Ttv_m'=>$Ttv_m,
        'Ttv_ll'=>$Ttv_ll,
        'Ttv'=>$Ttv,
        'Otx_atc'=>$Otx_atc,
        'Otx_amo'=>$Otx_amo,
        'Omp'=>$Omp,
        'Ot'=>$Ot,
        'Tc'=>$Tc,
        'T_campo'=>$T_campo,
        'Otx_aco'=>$Otx_aco,
        'Amsv'=>$Amsv,
        'Cs'=>$Cs,
        'S_mt_e_cer'=>$S_mt_e_cer,
        'Amatto_s_mt_e_cer'=>$Amatto_s_mt_e_cer,
        'C_p_ap_cer'=>$C_p_ap_cer,
        'E_a'=>$E_a,
        'At_cer'=>$At_cer,
        'Alb_cer'=>$Alb_cer,
        'Tm_ts_cer'=>$Tm_ts_cer,
        'S_mt_e_dir'=>$S_mt_e_dir,
        'Amatto_s_mt_e_dir'=>$Amatto_s_mt_e_dir,
        'P_ap_dir'=>$P_ap_dir,
        'At_dir'=>$At_dir,
        'S_mt_e_via'=>$S_mt_e_via,
        'C_p_ap_via'=>$C_p_ap_via,
        'E_a_via'=>$E_a_via,
        'At_via'=>$At_via,
        'Tm_3_pcos'=>$Tm_3_pcos,
        'M_e_ll_l_cer'=>$M_e_ll_l_cer,
        'At_au_cer'=>$At_au_cer,
        'Tl_cer'=>$Tl_cer,
        'M_b_cer'=>$M_b_cer,
        'M_e_ll_l_dir'=>$M_e_ll_l_dir,
        'At_au_dir'=>$At_au_dir,
        'M_b_dir'=>$M_b_dir,
        'M_e_ll_l_vie'=>$M_e_ll_l_vie,
        'At_au_via'=>$At_au_via,
        'M_b_via'=>$M_b_via
        ]
        );
    }
/*PRODUCCION POR INCENTIVO */
    public static function creartipoincentivo(Router $router){
        $produc_incen = new Produc_incen;

        $alertas =[];
  
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $produc_incen->sincronizar($_POST);
                $alertas = $produc_incen->validar();
                //alert vacio
               if(empty($alertas)){
                   //verificar que no este registrados
                    $resultado = $produc_incen->existe();
    
                    if($resultado->num_rows){
                        $alertas = Produc_incen::getAlertas();
                    }else{
                    
                        //crear el Usuario
                        $resultado = $produc_incen->guardar();
                        if($resultado){
                            header('Location: /admin-incentivo');
                        }
                    }
                }
            }
            $router->render('admin/incentivo/crear',[
                'alertas' => $alertas,
                'produc_incen' => $produc_incen
            ]);
     }
    public static function actualizartipoincentivo(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $produc_incen = Produc_incen::find($_GET['id']);
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $produc_incen->sincronizar($_POST);
   
              $alertas = $produc_incen->validar();
   
             if(empty($alertas)) {
                $produc_incen->guardar();
                header('Location: /admin-incentivo');
               }
           }
   
       $router->render('/admin/incentivo/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'produc_incen' => $produc_incen,
         'alertas' => $alertas
          ]);
     }
    public static function eliminartipoincentivo(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $produc_incen = Produc_incen::find($id);
            $produc_incen->eliminar();
            header('Location: /admin-incentivo');
         }
    }
/* CERNIDAs */

    public static function crearA_pll_mc_e_css(Router $router){
        $A_pll_mc_e_css= new A_pll_mc_e_css;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $A_pll_mc_e_css->sincronizar($_POST);

            $alertas = $A_pll_mc_e_css->validar();


            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $A_pll_mc_e_css->existe();

                if($resultado->num_rows){
 
                    $alertas = A_pll_mc_e_css::getAlertas();
                }else{
                    //crear el Usuario
                    $resultado = $A_pll_mc_e_css->guardar();
 
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/A_pll_mc_e_css/crear',[
            'alertas' => $alertas,
            'A_pll_mc_e_css' => $A_pll_mc_e_css,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarA_pll_mc_e_css(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $A_pll_mc_e_css = A_pll_mc_e_css::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $A_pll_mc_e_css->sincronizar($_POST);
   
              $alertas = $A_pll_mc_e_css->validar();
   
             if(empty($alertas)) {
                $A_pll_mc_e_css->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/A_pll_mc_e_css/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'A_pll_mc_e_css' => $A_pll_mc_e_css,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarA_pll_mc_e_css(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $A_pll_mc_e_css = A_pll_mc_e_css::find($id);
            $A_pll_mc_e_css->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearTlm_c(Router $router){
        $Tlm_c= new Tlm_c;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
           
            $Tlm_c->sincronizar($_POST);
 
            $alertas = $Tlm_c->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados

               $resultado = $Tlm_c->existe();

                if($resultado->num_rows){
 
                    $alertas = Tlm_c::getAlertas();

                }else{
 
                    $resultado = $Tlm_c->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/Tlm_c/crear',[
            'alertas' => $alertas,
            'Tlm_c' => $Tlm_c,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarTlm_c(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $Tlm_c = Tlm_c::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $Tlm_c->sincronizar($_POST);
   
              $alertas = $Tlm_c->validar();
   
             if(empty($alertas)) {
                $Tlm_c->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/Tlm_c/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'Tlm_c' => $Tlm_c,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarTlm_c(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $Tlm_c = Tlm_c::find($id);
            $Tlm_c->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearOtx_atc(Router $router){

        $Otx_atc= new Otx_atc;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $Otx_atc->sincronizar($_POST);


            $alertas = $Otx_atc->validar();


            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados

               $resultado = $Otx_atc->existe();
                

                if($resultado->num_rows){
 
                    $alertas = Otx_atc::getAlertas();
                }else{
                
                    $resultado = $Otx_atc->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/Otx_atc/crear',[
            'alertas' => $alertas,
            'Otx_atc' => $Otx_atc,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarOtx_atc(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $Otx_atc = Otx_atc::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $Otx_atc->sincronizar($_POST);
   
              $alertas = $Otx_atc->validar();
   
             if(empty($alertas)) {
                $Otx_atc->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/Otx_atc/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'Tlm_c' => $Otx_atc,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarOtx_atc(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $Otx_atc = Otx_atc::find($id);
            $Otx_atc->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearS_mt_e_cer(Router $router){

        $S_mt_e_cer= new S_mt_e_cer;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $S_mt_e_cer->sincronizar($_POST);
            $alertas = $S_mt_e_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados

               $resultado = $S_mt_e_cer->existe();
                

                if($resultado->num_rows){
 
                    $alertas = S_mt_e_cer::getAlertas();
                }else{
         
                    $resultado = $S_mt_e_cer->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/S_mt_e_cer/crear',[
            'alertas' => $alertas,
            'S_mt_e_cer' => $S_mt_e_cer,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarS_mt_e_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $S_mt_e_cer = S_mt_e_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $S_mt_e_cer->sincronizar($_POST);
   
              $alertas = $S_mt_e_cer->validar();
   
             if(empty($alertas)) {
                $S_mt_e_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/S_mt_e_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'S_mt_e_cer' => $S_mt_e_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarS_mt_e_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $S_mt_e_cer = S_mt_e_cer::find($id);
            $S_mt_e_cer->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearAmatto_s_mt_e_cer(Router $router){

        $Amatto_s_mt_e_cer= new Amatto_s_mt_e_cer;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Amatto_s_mt_e_cer->sincronizar($_POST);

            $alertas = $Amatto_s_mt_e_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $Amatto_s_mt_e_cer->existe();
                
                if( $resultado->num_rows){
                    $alertas = Amatto_s_mt_e_cer::getAlertas();
                }else{
                    $resultado = $Amatto_s_mt_e_cer->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/Amatto_s_mt_e_cer/crear',[
            'alertas' => $alertas,
            'Amatto_s_mt_e_cer' => $Amatto_s_mt_e_cer,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarAmatto_s_mt_e_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $Amatto_s_mt_e_cer = Amatto_s_mt_e_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $Amatto_s_mt_e_cer->sincronizar($_POST);
   
              $alertas = $Amatto_s_mt_e_cer->validar();
   
             if(empty($alertas)) {
                $Amatto_s_mt_e_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/Amatto_s_mt_e_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'Amatto_s_mt_e_cer' => $Amatto_s_mt_e_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarAmatto_s_mt_e_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $Amatto_s_mt_e_cer = Amatto_s_mt_e_cer::find($id);
            $Amatto_s_mt_e_cer->eliminar();
            header('Location: /admin-incentivo');
         } 
    }

    public static function crearC_p_ap_cer(Router $router){
        $C_p_ap_cer= new C_p_ap_cer;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $C_p_ap_cer->sincronizar($_POST);

            $alertas = $C_p_ap_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $C_p_ap_cer->existe();
                

                if($resultado->num_rows){
 
                    $alertas = C_p_ap_cer::getAlertas();
                }else{
                    $resultado = $C_p_ap_cer->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/C_p_ap_cer/crear',[
            'alertas' => $alertas,
            'C_p_ap_cer' => $C_p_ap_cer,
            'produc_incen' => $produc_incen
        ]);

     }
    public static function actualizarC_p_ap_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $C_p_ap_cer = C_p_ap_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $C_p_ap_cer->sincronizar($_POST);
   
              $alertas = $C_p_ap_cer->validar();
   
             if(empty($alertas)) {
                $C_p_ap_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/C_p_ap_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'C_p_ap_cer' => $C_p_ap_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarC_p_ap_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $C_p_ap_cer = C_p_ap_cer::find($id);
            $C_p_ap_cer->eliminar();
            header('Location: /admin-incentivo');
         } 
    }

    public static function crearE_a(Router $router){
        $E_a= new E_a;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   
            $E_a->sincronizar($_POST);
   
            $alertas = $E_a->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $E_a->existe();
                

                if($resultado->num_rows){
                    $alertas = E_a::getAlertas();
                }else{
                    $resultado = $E_a->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/E_a/crear',[
            'alertas' => $alertas,
            'E_a' => $E_a,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarE_a(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $E_a = E_a::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $E_a->sincronizar($_POST);
   
              $alertas = $E_a->validar();
   
             if(empty($alertas)) {
                $E_a->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/E_a/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'E_a' => $E_a,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarE_a(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $E_a = E_a::find($id);
            $E_a->eliminar();
            header('Location: /admin-incentivo');
         } 
    }

    public static function crearAt_cer(Router $router){
        $At_cer= new At_cer;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $At_cer->sincronizar($_POST);

            $alertas = $At_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $At_cer->existe();
                

                if($resultado->num_rows){
 
                    $alertas = At_cer::getAlertas();
                }else{
                
                    $resultado = $At_cer->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/At_cer/crear',[
            'alertas' => $alertas,
            'At_cer' => $At_cer,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarAt_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $At_cer = At_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $At_cer->sincronizar($_POST);
   
              $alertas = $At_cer->validar();
   
             if(empty($alertas)) {
                $At_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/At_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'At_cer' => $At_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarAt_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $At_cer = At_cer::find($id);
            $At_cer->eliminar();
            header('Location: /admin-incentivo');
         } 
    }

    public static function crearAlb_cer(Router $router){

        $Alb_cer= new Alb_cer;
        $produc_incen = Produc_incen::all();
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $Alb_cer->sincronizar($_POST);

            $alertas = $Alb_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $Alb_cer->existe();
                

                if($resultado->num_rows){
 
                    $alertas = Alb_cer::getAlertas();
                }else{
                
                    $resultado = $Alb_cer->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/Alb_cer/crear',[
            'alertas' => $alertas,
            'Alb_cer' => $Alb_cer,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarAlb_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $Alb_cer = Alb_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $Alb_cer->sincronizar($_POST);
   
              $alertas = $Alb_cer->validar();
   
             if(empty($alertas)) {
                $Alb_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/Alb_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'Alb_cer' => $Alb_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarAlb_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $Alb_cer = Alb_cer::find($id);
            $Alb_cer->eliminar();
            header('Location: /admin-incentivo');
         } 
    }

    public static function crearTm_ts_cer(Router $router){
        $Tm_ts_cer= new Tm_ts_cer;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $Tm_ts_cer->sincronizar($_POST);
      
            $alertas = $Tm_ts_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $Tm_ts_cer->existe();
                

                if($resultado->num_rows){
 
                    $alertas = Tm_ts_cer::getAlertas();
                }else{
                    $resultado = $Tm_ts_cer->guardar();
              
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/Tm_ts_cer/crear',[
            'alertas' => $alertas,
            'Tm_ts_cer' => $Tm_ts_cer,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarTm_ts_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $Tm_ts_cer = Tm_ts_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $Tm_ts_cer->sincronizar($_POST);
   
              $alertas = $Tm_ts_cer->validar();
   
             if(empty($alertas)) {
                $Tm_ts_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/Tm_ts_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'Tm_ts_cer' => $Tm_ts_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarTm_ts_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $Tm_ts_cer = Tm_ts_cer::find($id);
            $Tm_ts_cer->eliminar();
            header('Location: /admin-incentivo');
         } 
    }

    public static function crearM_e_ll_l_cer(Router $router){
        $M_e_ll_l_cer= new M_e_ll_l_cer;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $M_e_ll_l_cer->sincronizar($_POST);

            $alertas = $M_e_ll_l_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $M_e_ll_l_cer->existe();
                

                if($resultado->num_rows){
 
                    $alertas = M_e_ll_l_cer::getAlertas();
                }else{
                    $resultado = $M_e_ll_l_cer->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/M_e_ll_l_cer/crear',[
            'alertas' => $alertas,
            'M_e_ll_l_cer' => $M_e_ll_l_cer,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarM_e_ll_l_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $M_e_ll_l_cer = M_e_ll_l_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $M_e_ll_l_cer->sincronizar($_POST);
   
              $alertas = $M_e_ll_l_cer->validar();
   
             if(empty($alertas)) {
                $M_e_ll_l_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/M_e_ll_l_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'M_e_ll_l_cer' => $M_e_ll_l_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarM_e_ll_l_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $M_e_ll_l_cer = M_e_ll_l_cer::find($id);
            $M_e_ll_l_cer->eliminar();
            header('Location: /admin-incentivo');
         } 
    }

    public static function crearAt_au_cer(Router $router){

        $At_au_cer= new At_au_cer;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $At_au_cer->sincronizar($_POST);

            $alertas = $At_au_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $At_au_cer->existe();
                

                if($resultado->num_rows){
 
                    $alertas = At_au_cer::getAlertas();
                }else{
                    $resultado = $At_au_cer->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/At_au_cer/crear',[
            'alertas' => $alertas,
            'At_au_cer' => $At_au_cer,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarAt_au_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $At_au_cer = At_au_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $At_au_cer->sincronizar($_POST);
   
              $alertas = $At_au_cer->validar();
   
             if(empty($alertas)) {
                $At_au_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/At_au_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'At_au_cer' => $At_au_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarAt_au_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $At_au_cer = At_au_cer::find($id);
            $At_au_cer->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearTl_cer(Router $router){
        $Tl_cer= new Tl_cer;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Tl_cer->sincronizar($_POST);

            $alertas = $Tl_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $Tl_cer->existe();

                if($resultado->num_rows){

                    $alertas = Tl_cer::getAlertas();
                }else{
    
                    $resultado = $Tl_cer->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/Tl_cer/crear',[
            'alertas' => $alertas,
            'Tl_cer' => $Tl_cer,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarTl_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $Tl_cer = Tl_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $Tl_cer->sincronizar($_POST);
   
              $alertas = $Tl_cer->validar();
   
             if(empty($alertas)) {
                $Tl_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/Tl_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'Tl_cer' => $Tl_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarTl_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $Tl_cer = Tl_cer::find($id);
            $Tl_cer->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearM_b_cer(Router $router){
        $M_b_cer= new M_b_cer;
        $produc_incen = Produc_incen::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $M_b_cer->sincronizar($_POST);

            $alertas = $M_b_cer->validar();

            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $M_b_cer->existe();
                

                if($resultado->num_rows){
                    $alertas = M_b_cer::getAlertas();
                }else{
                    $resultado = $M_b_cer->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/M_b_cer/crear',[
            'alertas' => $alertas,
            'M_b_cer' => $M_b_cer,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarM_b_cer(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $M_b_cer = M_b_cer::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $M_b_cer->sincronizar($_POST);
   
              $alertas = $M_b_cer->validar();
   
             if(empty($alertas)) {
                $M_b_cer->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/M_b_cer/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'M_b_cer' => $M_b_cer,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarM_b_cer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $M_b_cer = M_b_cer::find($id);
            $M_b_cer->eliminar();
            header('Location: /admin-incentivo');
         }
    }

/* DIRECTAS */
    public static function crearCs_mc_a_pll_e_s(Router $router){
        $Cs_mc_a_pll_e_s= new Cs_mc_a_pll_e_s;
        $produc_incen = Produc_incen::all();

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Cs_mc_a_pll_e_s->sincronizar($_POST);
            $alertas = $Cs_mc_a_pll_e_s->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $Cs_mc_a_pll_e_s->existe();
                
                if($resultado->num_rows){
                    $alertas = Cs_mc_a_pll_e_s::getAlertas();
                }else{
                    $resultado = $Cs_mc_a_pll_e_s->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/Cs_mc_a_pll_e_s/crear',[
            'alertas' => $alertas,
            'Cs_mc_a_pll_e_s' => $Cs_mc_a_pll_e_s,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarCs_mc_a_pll_e_s(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $Cs_mc_a_pll_e_s = Cs_mc_a_pll_e_s::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $Cs_mc_a_pll_e_s->sincronizar($_POST);
   
              $alertas = $Cs_mc_a_pll_e_s->validar();
   
             if(empty($alertas)) {
                $Cs_mc_a_pll_e_s->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/Cs_mc_a_pll_e_s/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'Cs_mc_a_pll_e_s' => $Cs_mc_a_pll_e_s,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarCs_mc_a_pll_e_s(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $Cs_mc_a_pll_e_s = Cs_mc_a_pll_e_s::find($id);
            $Cs_mc_a_pll_e_s->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearS_mt_e_dir(Router $router){
        $S_mt_e_dir= new S_mt_e_dir;
        $produc_incen = Produc_incen::all();

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $S_mt_e_dir->sincronizar($_POST);

            $alertas = $S_mt_e_dir->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $S_mt_e_dir->existe();
                
                if($resultado->num_rows){
                    $alertas = S_mt_e_dir::getAlertas();
                }else{
                    $resultado = $S_mt_e_dir->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/S_mt_e_dir/crear',[
            'alertas' => $alertas,
            'S_mt_e_dir' => $S_mt_e_dir,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarS_mt_e_dir(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $S_mt_e_dir = S_mt_e_dir::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $S_mt_e_dir->sincronizar($_POST);
   
              $alertas = $S_mt_e_dir->validar();
   
             if(empty($alertas)) {
                $S_mt_e_dir->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/S_mt_e_dir/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'S_mt_e_dir' => $S_mt_e_dir,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarS_mt_e_dir(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $S_mt_e_dir = S_mt_e_dir::find($id);
            $S_mt_e_dir->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearAmatto_s_mt_e_dir(Router $router){
        $Amatto_s_mt_e_dir= new Amatto_s_mt_e_dir;
        $produc_incen = Produc_incen::all();

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Amatto_s_mt_e_dir->sincronizar($_POST);

            $alertas = $Amatto_s_mt_e_dir->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $Amatto_s_mt_e_dir->existe();
                
                if($resultado->num_rows){
                    $alertas = Amatto_s_mt_e_dir::getAlertas();
                }else{
                    $resultado = $Amatto_s_mt_e_dir->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/Amatto_s_mt_e_dir/crear',[
            'alertas' => $alertas,
            'Amatto_s_mt_e_dir' => $Amatto_s_mt_e_dir,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarAmatto_s_mt_e_dir(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $Amatto_s_mt_e_dir = Amatto_s_mt_e_dir::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $Amatto_s_mt_e_dir->sincronizar($_POST);
   
              $alertas = $Amatto_s_mt_e_dir->validar();
   
             if(empty($alertas)) {
                $Amatto_s_mt_e_dir->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/Amatto_s_mt_e_dir/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'Amatto_s_mt_e_dir' => $Amatto_s_mt_e_dir,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarAmatto_s_mt_e_dir(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $Amatto_s_mt_e_dir = Amatto_s_mt_e_dir::find($id);
            $Amatto_s_mt_e_dir->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearP_ap_dir(Router $router){
        $P_ap_dir= new P_ap_dir;
        $produc_incen = Produc_incen::all();

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $P_ap_dir->sincronizar($_POST);

            $alertas = $P_ap_dir->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $P_ap_dir->existe();
                if($resultado->num_rows){
                    $alertas = P_ap_dir::getAlertas();
                }else{
                    $resultado = $P_ap_dir->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/P_ap_dir/crear',[
            'alertas' => $alertas,
            'P_ap_dir' => $P_ap_dir,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarP_ap_dir(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $P_ap_dir = P_ap_dir::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $P_ap_dir->sincronizar($_POST);
   
              $alertas = $P_ap_dir->validar();
   
             if(empty($alertas)) {
                $P_ap_dir->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/P_ap_dir/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'P_ap_dir' => $P_ap_dir,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarP_ap_dir(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $P_ap_dir = P_ap_dir::find($id);
            $P_ap_dir->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearAt_dir(Router $router){
        $At_dir= new At_dir;
        $produc_incen = Produc_incen::all();

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $At_dir->sincronizar($_POST);

            $alertas = $At_dir->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $At_dir->existe();
                if($resultado->num_rows){
                    $alertas = At_dir::getAlertas();
                }else{
                    $resultado = $At_dir->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/At_dir/crear',[
            'alertas' => $alertas,
            'At_dir' => $At_dir,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarAt_dir(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $At_dir = At_dir::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $At_dir->sincronizar($_POST);
   
              $alertas = $At_dir->validar();
   
             if(empty($alertas)) {
                $At_dir->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/At_dir/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'At_dir' => $At_dir,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarAt_dir(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $At_dir = At_dir::find($id);
            $At_dir->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearM_e_ll_l_dir(Router $router){
        $M_e_ll_l_dir= new M_e_ll_l_dir;
        $produc_incen = Produc_incen::all();

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $M_e_ll_l_dir->sincronizar($_POST);

            $alertas = $M_e_ll_l_dir->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $M_e_ll_l_dir->existe();
                if($resultado->num_rows){
                    $alertas = M_e_ll_l_dir::getAlertas();
                }else{
                    $resultado = $M_e_ll_l_dir->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/M_e_ll_l_dir/crear',[
            'alertas' => $alertas,
            'M_e_ll_l_dir' => $M_e_ll_l_dir,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarM_e_ll_l_dir(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $M_e_ll_l_dir = M_e_ll_l_dir::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $M_e_ll_l_dir->sincronizar($_POST);
   
              $alertas = $M_e_ll_l_dir->validar();
   
             if(empty($alertas)) {
                $M_e_ll_l_dir->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/M_e_ll_l_dir/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'M_e_ll_l_dir' => $M_e_ll_l_dir,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarM_e_ll_l_dir(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $M_e_ll_l_dir = M_e_ll_l_dir::find($id);
            $M_e_ll_l_dir->eliminar();
            header('Location: /admin-incentivo');
         }
    }
    
    public static function crearAt_au_dir(Router $router){
        $At_au_dir= new At_au_dir;
        $produc_incen = Produc_incen::all();

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $At_au_dir->sincronizar($_POST);

            $alertas = $At_au_dir->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $At_au_dir->existe();
                if($resultado->num_rows){
                    $alertas = At_au_dir::getAlertas();
                }else{
                    $resultado = $At_au_dir->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/At_au_dir/crear',[
            'alertas' => $alertas,
            'At_au_dir' => $At_au_dir,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarAt_au_dir(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $At_au_dir = At_au_dir::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $At_au_dir->sincronizar($_POST);
   
              $alertas = $At_au_dir->validar();
   
             if(empty($alertas)) {
                $At_au_dir->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/At_au_dir/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'At_au_dir' => $At_au_dir,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarAt_au_dir(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $At_au_dir = At_au_dir::find($id);
            $At_au_dir->eliminar();
            header('Location: /admin-incentivo');
         }
    }

    public static function crearM_b_dir(Router $router){
        $M_b_dir= new M_b_dir;
        $produc_incen = Produc_incen::all();

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $M_b_dir->sincronizar($_POST);

            $alertas = $M_b_dir->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
               $resultado = $M_b_dir->existe();
                if($resultado->num_rows){
                    $alertas = M_b_dir::getAlertas();
                }else{
                    $resultado = $M_b_dir->guardar();
                    if($resultado){
                        header('Location: /admin-incentivo');
                    }
                }
            }
        }
        $router->render('admin/incentivo/M_b_dir/crear',[
            'alertas' => $alertas,
            'M_b_dir' => $M_b_dir,
            'produc_incen' => $produc_incen
        ]);
     }
    public static function actualizarM_b_dir(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $M_b_dir = M_b_dir::find($_GET['id']);
        $produc_incen = Produc_incen::all();
        $alertas = [];
   
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $M_b_dir->sincronizar($_POST);
   
              $alertas = $M_b_dir->validar();
   
             if(empty($alertas)) {
                $M_b_dir->guardar();
                header('Location: /admin-incentivo
                ');
               }
           }
   
       $router->render('/admin/incentivo/M_b_dir/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'M_b_dir' => $M_b_dir,
         'alertas' => $alertas,
         'produc_incen' => $produc_incen
          ]);
     }
    public static function eliminarM_b_dir(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $M_b_dir = M_b_dir::find($id);
            $M_b_dir->eliminar();
            header('Location: /admin-incentivo');
         }
    }

/* VIAJES */

public static function crearLav(Router $router){
    $Lav= new Lav;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Lav->sincronizar($_POST);

        $alertas = $Lav->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $Lav->existe();
            if($resultado->num_rows){
                $alertas = Lav::getAlertas();
            }else{
                $resultado = $Lav->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/Lav/crear',[
        'alertas' => $alertas,
        'Lav' => $Lav,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarLav(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $Lav = Lav::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $Lav->sincronizar($_POST);

          $alertas = $Lav->validar();

         if(empty($alertas)) {
            $Lav->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/Lav/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'Lav' => $Lav,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarLav(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $Lav = Lav::find($id);
        $Lav->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearA_lav(Router $router){
    $A_lav= new A_lav;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $A_lav->sincronizar($_POST);

        $alertas = $A_lav->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $A_lav->existe();
            if($resultado->num_rows){
                $alertas = A_lav::getAlertas();
            }else{
                $resultado = $A_lav->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/A_lav/crear',[
        'alertas' => $alertas,
        'A_lav' => $A_lav,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarA_lav(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $A_lav = A_lav::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $A_lav->sincronizar($_POST);

          $alertas = $A_lav->validar();

         if(empty($alertas)) {
            $A_lav->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/A_lav/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'A_lav' => $A_lav,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarA_lav(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $A_lav = A_lav::find($id);
        $A_lav->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearOmp(Router $router){
    $Omp= new Omp;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Omp->sincronizar($_POST);

        $alertas = $Omp->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $Omp->existe();
            if($resultado->num_rows){
                $alertas = Omp::getAlertas();
            }else{
                $resultado = $Omp->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/Omp/crear',[
        'alertas' => $alertas,
        'Omp' => $Omp,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarOmp(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $Omp = Omp::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $Omp->sincronizar($_POST);

          $alertas = $Omp->validar();

         if(empty($alertas)) {
            $Omp->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/Omp/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'Omp' => $Omp,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarOmp(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $Omp = Omp::find($id);
        $Omp->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearOt(Router $router){
    $Ot= new Ot;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Ot->sincronizar($_POST);

        $alertas = $Ot->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $Ot->existe();
            if($resultado->num_rows){
                $alertas = Ot::getAlertas();
            }else{
                $resultado = $Ot->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/Ot/crear',[
        'alertas' => $alertas,
        'Ot' => $Ot,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarOt(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $Ot = Ot::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $Ot->sincronizar($_POST);

          $alertas = $Ot->validar();

         if(empty($alertas)) {
            $Ot->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/Ot/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'Ot' => $Ot,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarOt(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $Ot = Ot::find($id);
        $Ot->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearTc(Router $router){
    $Tc= new Tc;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Tc->sincronizar($_POST);

        $alertas = $Tc->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $Tc->existe();
            if($resultado->num_rows){
                $alertas = Tc::getAlertas();
            }else{
                $resultado = $Tc->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/Tc/crear',[
        'alertas' => $alertas,
        'Tc' => $Tc,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarTc(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $Tc = Tc::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $Tc->sincronizar($_POST);

          $alertas = $Tc->validar();

         if(empty($alertas)) {
            $Tc->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/Tc/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'Tc' => $Tc,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarTc(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $Tc = Tc::find($id);
        $Tc->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearT_campo(Router $router){
    $T_campo= new T_campo;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $T_campo->sincronizar($_POST);

        $alertas = $T_campo->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $T_campo->existe();
            if($resultado->num_rows){
                $alertas = T_campo::getAlertas();
            }else{
                $resultado = $T_campo->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/T_campo/crear',[
        'alertas' => $alertas,
        'T_campo' => $T_campo,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarT_campo(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $T_campo = T_campo::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $T_campo->sincronizar($_POST);

          $alertas = $T_campo->validar();

         if(empty($alertas)) {
            $T_campo->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/T_campo/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'T_campo' => $T_campo,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarT_campo(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $T_campo = T_campo::find($id);
        $T_campo->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearOtx_aco(Router $router){
    $Otx_aco= new Otx_aco;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Otx_aco->sincronizar($_POST);

        $alertas = $Otx_aco->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $Otx_aco->existe();
            if($resultado->num_rows){
                $alertas = Otx_aco::getAlertas();
            }else{
                $resultado = $Otx_aco->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/Otx_aco/crear',[
        'alertas' => $alertas,
        'Otx_aco' => $Otx_aco,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarOtx_aco(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $Otx_aco = Otx_aco::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $Otx_aco->sincronizar($_POST);

          $alertas = $Otx_aco->validar();

         if(empty($alertas)) {
            $Otx_aco->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/Otx_aco/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'Otx_aco' => $Otx_aco,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarOtx_aco(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $Otx_aco = Otx_aco::find($id);
        $Otx_aco->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearAmsv(Router $router){
    $Amsv= new Amsv;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Amsv->sincronizar($_POST);

        $alertas = $Amsv->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $Amsv->existe();
            if($resultado->num_rows){
                $alertas = Amsv::getAlertas();
            }else{
                $resultado = $Amsv->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/Amsv/crear',[
        'alertas' => $alertas,
        'Amsv' => $Amsv,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarAmsv(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $Amsv = Amsv::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $Amsv->sincronizar($_POST);

          $alertas = $Amsv->validar();

         if(empty($alertas)) {
            $Amsv->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/Amsv/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'Amsv' => $Amsv,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarAmsv(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $Amsv = Amsv::find($id);
        $Amsv->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearCs(Router $router){
    $Cs= new Cs;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Cs->sincronizar($_POST);

        $alertas = $Cs->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $Cs->existe();
            if($resultado->num_rows){
                $alertas = Cs::getAlertas();
            }else{
                $resultado = $Cs->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/Cs/crear',[
        'alertas' => $alertas,
        'Cs' => $Cs,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarCs(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $Cs = Cs::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $Cs->sincronizar($_POST);

          $alertas = $Cs->validar();

         if(empty($alertas)) {
            $Cs->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/Cs/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'Cs' => $Cs,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarCs(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $Cs = Cs::find($id);
        $Cs->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearS_mt_e_via(Router $router){
    $S_mt_e_via= new S_mt_e_via;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $S_mt_e_via->sincronizar($_POST);

        $alertas = $S_mt_e_via->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $S_mt_e_via->existe();
            if($resultado->num_rows){
                $alertas = S_mt_e_via::getAlertas();
            }else{
                $resultado = $S_mt_e_via->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/S_mt_e_via/crear',[
        'alertas' => $alertas,
        'S_mt_e_via' => $S_mt_e_via,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarS_mt_e_via(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $S_mt_e_via = S_mt_e_via::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $S_mt_e_via->sincronizar($_POST);

          $alertas = $S_mt_e_via->validar();

         if(empty($alertas)) {
            $S_mt_e_via->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/S_mt_e_via/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'S_mt_e_via' => $S_mt_e_via,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarS_mt_e_via(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $S_mt_e_via = S_mt_e_via::find($id);
        $S_mt_e_via->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearC_p_ap_via(Router $router){
    $C_p_ap_via= new C_p_ap_via;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $C_p_ap_via->sincronizar($_POST);

        $alertas = $C_p_ap_via->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $C_p_ap_via->existe();
            if($resultado->num_rows){
                $alertas = C_p_ap_via::getAlertas();
            }else{
                $resultado = $C_p_ap_via->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/C_p_ap_via/crear',[
        'alertas' => $alertas,
        'C_p_ap_via' => $C_p_ap_via,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarC_p_ap_via(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $C_p_ap_via = C_p_ap_via::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $C_p_ap_via->sincronizar($_POST);

          $alertas = $C_p_ap_via->validar();

         if(empty($alertas)) {
            $C_p_ap_via->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/C_p_ap_via/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'C_p_ap_via' => $C_p_ap_via,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarC_p_ap_via(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $C_p_ap_via = C_p_ap_via::find($id);
        $C_p_ap_via->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearE_a_via(Router $router){
    $E_a_via= new E_a_via;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $E_a_via->sincronizar($_POST);

        $alertas = $E_a_via->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $E_a_via->existe();
            if($resultado->num_rows){
                $alertas = E_a_via::getAlertas();
            }else{
                $resultado = $E_a_via->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/E_a_via/crear',[
        'alertas' => $alertas,
        'E_a_via' => $E_a_via,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarE_a_via(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $E_a_via = E_a_via::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $E_a_via->sincronizar($_POST);

          $alertas = $E_a_via->validar();

         if(empty($alertas)) {
            $E_a_via->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/E_a_via/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'E_a_via' => $E_a_via,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarE_a_via(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $E_a_via = E_a_via::find($id);
        $E_a_via->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearAt_via(Router $router){
    $At_via= new At_via;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $At_via->sincronizar($_POST);

        $alertas = $At_via->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $At_via->existe();
            if($resultado->num_rows){
                $alertas = At_via::getAlertas();
            }else{
                $resultado = $At_via->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/At_via/crear',[
        'alertas' => $alertas,
        'At_via' => $At_via,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarAt_via(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $At_via = At_via::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $At_via->sincronizar($_POST);

          $alertas = $At_via->validar();

         if(empty($alertas)) {
            $At_via->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/At_via/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'At_via' => $At_via,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarAt_via(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $At_via = At_via::find($id);
        $At_via->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearTm_3_pcos(Router $router){
    $Tm_3_pcos= new Tm_3_pcos;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Tm_3_pcos->sincronizar($_POST);

        $alertas = $Tm_3_pcos->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $Tm_3_pcos->existe();
            if($resultado->num_rows){
                $alertas = Tm_3_pcos::getAlertas();
            }else{
                $resultado = $Tm_3_pcos->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/Tm_3_pcos/crear',[
        'alertas' => $alertas,
        'Tm_3_pcos' => $Tm_3_pcos,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarTm_3_pcos(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $Tm_3_pcos = Tm_3_pcos::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $Tm_3_pcos->sincronizar($_POST);

          $alertas = $Tm_3_pcos->validar();

         if(empty($alertas)) {
            $Tm_3_pcos->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/Tm_3_pcos/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'Tm_3_pcos' => $Tm_3_pcos,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarTm_3_pcos(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $Tm_3_pcos = Tm_3_pcos::find($id);
        $Tm_3_pcos->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearM_e_ll_l_vie(Router $router){
    $M_e_ll_l_vie= new M_e_ll_l_vie;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $M_e_ll_l_vie->sincronizar($_POST);

        $alertas = $M_e_ll_l_vie->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $M_e_ll_l_vie->existe();
            if($resultado->num_rows){
                $alertas = M_e_ll_l_vie::getAlertas();
            }else{
                $resultado = $M_e_ll_l_vie->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/M_e_ll_l_vie/crear',[
        'alertas' => $alertas,
        'M_e_ll_l_vie' => $M_e_ll_l_vie,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarM_e_ll_l_vie(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $M_e_ll_l_vie = M_e_ll_l_vie::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $M_e_ll_l_vie->sincronizar($_POST);

          $alertas = $M_e_ll_l_vie->validar();

         if(empty($alertas)) {
            $M_e_ll_l_vie->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/M_e_ll_l_vie/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'M_e_ll_l_vie' => $M_e_ll_l_vie,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarM_e_ll_l_vie(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $M_e_ll_l_vie = M_e_ll_l_vie::find($id);
        $M_e_ll_l_vie->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearAt_au_via(Router $router){
    $At_au_via= new At_au_via;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $At_au_via->sincronizar($_POST);

        $alertas = $At_au_via->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $At_au_via->existe();
            if($resultado->num_rows){
                $alertas = At_au_via::getAlertas();
            }else{
                $resultado = $At_au_via->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/At_au_via/crear',[
        'alertas' => $alertas,
        'At_au_via' => $At_au_via,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarAt_au_via(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $At_au_via = At_au_via::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $At_au_via->sincronizar($_POST);

          $alertas = $At_au_via->validar();

         if(empty($alertas)) {
            $At_au_via->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/At_au_via/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'At_au_via' => $At_au_via,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarAt_au_via(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $At_au_via = At_au_via::find($id);
        $At_au_via->eliminar();
        header('Location: /admin-incentivo');
     }
}


public static function crearM_b_via(Router $router){
    $M_b_via= new M_b_via;
    $produc_incen = Produc_incen::all();

    $alertas = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $M_b_via->sincronizar($_POST);

        $alertas = $M_b_via->validar();
        //alert vacio
       if(empty($alertas)){
           //verificar que no este registrados
           $resultado = $M_b_via->existe();
            if($resultado->num_rows){
                $alertas = M_b_via::getAlertas();
            }else{
                $resultado = $M_b_via->guardar();
                if($resultado){
                    header('Location: /admin-incentivo');
                }
            }
        }
    }
    $router->render('admin/incentivo/M_b_via/crear',[
        'alertas' => $alertas,
        'M_b_via' => $M_b_via,
        'produc_incen' => $produc_incen
    ]);
 }
public static function actualizarM_b_via(Router $router){
    if(!is_numeric($_GET['id'])) return;

    $M_b_via = M_b_via::find($_GET['id']);
    $produc_incen = Produc_incen::all();
    $alertas = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $M_b_via->sincronizar($_POST);

          $alertas = $M_b_via->validar();

         if(empty($alertas)) {
            $M_b_via->guardar();
            header('Location: /admin-incentivo
            ');
           }
       }

   $router->render('/admin/incentivo/M_b_via/actualizar', [
     //'nombre' => $_SESSION['nombre'],
     'M_b_via' => $M_b_via,
     'alertas' => $alertas,
     'produc_incen' => $produc_incen
      ]);
 }
public static function eliminarM_b_via(Router $router){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $M_b_via = M_b_via::find($id);
        $M_b_via->eliminar();
        header('Location: /admin-incentivo');
     }
}


}