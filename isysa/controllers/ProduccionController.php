<?php
namespace Controllers;

use MVC\Router;

use Model\Produccion;
use Model\Produc_incen;
use Model\Turnos;

class ProduccionController {
    public static function index(Router $router){
        $produccion = Produccion::all();
        $prod_incen = Produc_incen::all();
        $turnos1 = Turnos::all();

        $router->render('admin/produccion/index',[
            'produccion' => $produccion,
            'prod_incen' => $prod_incen,
            'turnos1' => $turnos1    
        ]);
    }

    public static function crear(Router $router) {
        $produccion = new Produccion;
        $prod_incen = Produc_incen::all();
        $turnos1 = Turnos::all();
        //alerts vacias
        $alertas =[];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $produccion->sincronizar($_POST);
            $alertas = $produccion->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $produccion->existe();

                if($resultado->num_rows){
                    $alertas = Produccion::getAlertas();
                }else{
                
                    //crear el Usuario
                    $resultado = $produccion->guardar();
                    if($resultado){
                        header('Location: /admin-produccion');
                    }
                }
            }
        }
        $router->render('admin/produccion/crear',[
            'alertas' => $alertas,
            'produccion' => $produccion,
            'prod_incen' => $prod_incen,
            'turnos1' => $turnos1    
        ]);
    }

    public static function actualizar(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $produccion = Produccion::find($_GET['id']);
        $prod_incen = Produc_incen::all();
        $turnos1 = Turnos::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $produccion->sincronizar($_POST);
   
              $alertas = $produccion->validar();
   
             if(empty($alertas)) {
                $produccion->guardar();
                header('Location: /admin-produccion
                ');
               }
           }
        $router->render('admin/produccion/actualizar',[
            'alertas' => $alertas,
            'produccion' => $produccion,
            'prod_incen' => $prod_incen,
            'turnos1' => $turnos1    
        ]);
    }

    public static function eliminar(Router $router){
            //     session_start();
    //     isAdmin();
        
     if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $produccion = Produccion::find($id);
        $produccion->eliminar();
        header('Location: /admin-produccion');
     }
    }
}