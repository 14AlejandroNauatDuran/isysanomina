<?php

namespace Cntrollers;

use MVC\Router;

use Model\Semana;
use Model\Empleado;
use Model\Turnos; 

class SemanasController {
    public static function index(Router $router) {
        $semana = Semana::all();
        $empleado = Empleado::all();
        $turnos = Turnos::all();

        $router->render('admin/semana/index',[
            'semana' => $semana,
            'empleado' => $empleado,
            'turno' => $turnos
        ]);
    }

    public static function crear(Router $router) {
        $semana = new Semana;
        $empleado = Empleado::all();
        $turnos = Turnos::all();
        //alerts vacias
        $alertas =[];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $semana->sincronizar($_POST);
            $alertas = $semana->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $semana->existe();

                if($resultado->num_rows){
                    $alertas = Semana::getAlertas();
                }else{
                
                    //crear el Usuario
                    $resultado = $semana->guardar();
                    if($resultado){
                        header('Location: /admin-semana');
                    }
                }
            }
        }
        $router->render('admin/semana/index',[
            'alertas' => $alertas,
            'semana' => $semana,
            'empleado' => $empleado,
            'turno' => $turnos
        ]);
    }

    public static function actualizar(Router $router) {
        if(!is_numeric($_GET['id'])) return;

        $semana = Semana::find($_GET['id']);
        $empleado = Empleado::all();
        $turnos = Turnos::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $semana->sincronizar($_POST);
   
              $alertas = $semana->validar();
   
             if(empty($alertas)) {
                $semana->guardar();
                header('Location: /admin-semana
                ');
               }
           }
        $router->render('admin/semana/index',[
            'alertas' => $alertas,
            'semana' => $semana,
            'empleado' => $empleado,
            'turno' => $turnos  
        ]);
    }

    public static function eliminar(Router $router) {
        //     session_start();
    //     isAdmin();
        
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $semana = Semana::find($id);
        $semana->eliminar();
        header('Location: /admin-semana');
     }
    }
}