<?php

namespace Controllers;

use MVC\Router;

use Model\Incidencia;

class IncidenciaController {
    public static function index(Router $router) {
        $incidencia = Incidencia::all();
        $router->render('admin/incidencia/index',[
            'incidencia' => $incidencia
        ]);
    }

    public static function crear(Router $router){
        $incidencia = new Incidencia;
        //alerts vacias
        $alertas =[];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $incidencia->sincronizar($_POST);
            $alertas = $incidencia->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $incidencia->existe();

                if($resultado->num_rows){
                    $alertas = Incidencia::getAlertas();
                }else{
                
                    //crear el Usuario
                    $resultado = $incidencia->guardar();
                    if($resultado){
                        header('Location: /admin-incidencia');
                    }
                }
            }
        }
        $router->render('admin/incidencia/crear',[
            'alertas' => $alertas,
            'incidencia' => $incidencia
        ]);
    }

    public static function actualizar(Router $router){
        if(!is_numeric($_GET['id'])) return;

        $incidencia = Incidencia::find($_GET['id']);
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $incidencia->sincronizar($_POST);
   
              $alertas = $incidencia->validar();
   
             if(empty($alertas)) {
                $incidencia->guardar();
                header('Location: /admin-incidencia
                ');
               }
           }
   
       $router->render('/admin/incidencia/actualizar', [
         //'nombre' => $_SESSION['nombre'],
         'incidencia' => $incidencia,
         'alertas' => $alertas
          ]);
    }

    public static function eliminar(Router $router){
        //     session_start();
     //     isAdmin();
        
     if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $incidencia = Incidencia::find($id);
        $incidencia->eliminar();
        header('Location: /admin-incidencia');
     }
    }
}
