<?php

namespace Controllers;

use MVC\Router;

use Model\Salarios;
use Model\Departamento;
use Model\Puesto;

class SalariosController {
    public static function index(Router $router) {
        $salarios = Salarios::all();
        $departamento = Departamento::all();
        $puesto1=Puesto::all();

        $router->render('admin/salarios/index',[
            'salarios' => $salarios,
            'departamento'=>$departamento,
            'puesto1'=>$puesto1
        ]);
    }

    public static function crear(Router $router) {
        $salarios = new Salarios;
        $departamento = Departamento::all();
        $puesto1=Puesto::all();
        //alerts vacias
        $alertas =[];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $salarios->sincronizar($_POST);
            $alertas = $salarios->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $salarios->existe();

                if($resultado->num_rows){
                    $alertas = Salarios::getAlertas();
                }else{
                
                    //crear el Usuario
                    $resultado = $salarios->guardar();
                    if($resultado){
                        header('Location: /admin-salarios');
                    }
                }
            }
        }
        $router->render('admin/salarios/crear',[
            'alertas' => $alertas,
            'salarios' => $salarios,
            'departamento'=>$departamento,
            'puesto1'=>$puesto1   
        ]);
    }

    public static function actualizar(Router $router) {
        if(!is_numeric($_GET['id'])) return;

        $salarios = Salarios::find($_GET['id']);
        $departamento = Departamento::all();
        $puesto1=Puesto::all();
        $alertas = [];
   
           
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
              $salarios->sincronizar($_POST);
   
              $alertas = $salarios->validar();
   
             if(empty($alertas)) {
                $salarios->guardar();
                header('Location: /admin-salarios
                ');
               }
           }
        $router->render('admin/salarios/actualizar',[
            'alertas' => $alertas,
            'salarios' => $salarios,
            'departamento'=>$departamento,
            'puesto1'=>$puesto1   
        ]);
    }

    public static function eliminar(Router $router) {
        //     session_start();
    //     isAdmin();
        
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $salarios = Salarios::find($id);
        $salarios->eliminar();
        header('Location: /admin-salarios');
     }
    }
}