<?php
namespace Controllers;

use MVC\Router;
use Model\Puesto;
use Model\Departamento;

class PuestoController {
    public static function index(Router $router){
        $puesto = Puesto::all();
        $departamento= Departamento::all();
        $router->render('admin/puesto/index',
        [
            'puesto'=>$puesto,
            'departamento' => $departamento
        
        ]
        );
    }

    public static function crear(Router $router){
        $puesto = new Puesto;
        $departamento = Departamento::all();
        //alerts vacias
        $alertas =[];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $puesto->sincronizar($_POST);
            $alertas = $puesto->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $puesto->existePuesto();

                if($resultado->num_rows){
                    $alertas = puesto::getAlertas();
                }else{
                
                    //crear el Usuario
                    $resultado = $puesto->guardar();
                    if($resultado){
                        header('Location: /admin-puesto');
                    }
                }
            }
        }
        $router->render('admin/puesto/crear',[
            'alertas' => $alertas,
            'puesto' => $puesto,
            'departamento' => $departamento
        ]);
    }

    public static function actualizar(Router $router) {
    // //     session_start();
    // //     isAdmin();

     if(!is_numeric($_GET['id'])) return;

     $puesto = puesto::find($_GET['id']);
     $departamento = Departamento::all();
     $alertas = [];

        
      if($_SERVER['REQUEST_METHOD'] === 'POST') {
           $puesto->sincronizar($_POST);

           $alertas = $puesto->validar();

          if(empty($alertas)) {
             $puesto->guardar();
             header('Location: /admin-puesto
             ');
            }
        }

    $router->render('/admin/puesto/actualizar', [
      //'nombre' => $_SESSION['nombre'],
      'puesto' => $puesto,
      'alertas' => $alertas,
      'departamento' => $departamento
       ]);
    }

    public static function eliminar() {
    //     session_start();
    //     isAdmin();
        
     if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $puesto = puesto::find($id);
        $puesto->eliminar();
        header('Location: /admin-puesto');
     }
    }
}

?>