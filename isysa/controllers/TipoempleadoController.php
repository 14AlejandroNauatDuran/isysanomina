<?php
namespace Controllers;

use MVC\Router;
use Model\Tipo_empleado;

class TipoempleadoController {
    public static function index(Router $router){
        $tipo_empleado = Tipo_empleado::all();
        $router->render('admin/tipoEmpleado/index',
        ['tipo_empleado'=>$tipo_empleado ]
        );
    }

    public static function crear(Router $router){
        $tipo_empleado = new Tipo_empleado;
        //alerts vacias
        $alertas =[];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $tipo_empleado->sincronizar($_POST);
            $alertas = $tipo_empleado->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $tipo_empleado->existeTipo_empleado();

                if($resultado->num_rows){
                    $alertas = Tipo_empleado::getAlertas();
                }else{
                
                    //crear el Usuario
                    $resultado = $tipo_empleado->guardar();
                    if($resultado){
                        header('Location: /admin-tipoEmpleado');
                    }
                }
            }
        }
        $router->render('admin/tipoEmpleado/crear',[
            'alertas' => $alertas,
            'tipo_empleado' => $tipo_empleado
        ]);
    }

    public static function actualizar(Router $router) {
    // //     session_start();
    // //     isAdmin();

     if(!is_numeric($_GET['id'])) return;

     $tipo_empleado = Tipo_empleado::find($_GET['id']);
     $alertas = [];

        
      if($_SERVER['REQUEST_METHOD'] === 'POST') {
           $tipo_empleado->sincronizar($_POST);

           $alertas = $tipo_empleado->validar();

          if(empty($alertas)) {
             $tipo_empleado->guardar();
             header('Location: /admin-tipoEmpleado
             ');
            }
        }

    $router->render('/admin/tipoEmpleado/actualizar', [
      //'nombre' => $_SESSION['nombre'],
      'tipo_empleado' => $tipo_empleado,
      'alertas' => $alertas
       ]);
    }

    public static function eliminar() {
    //     session_start();
    //     isAdmin();
        
     if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $tipo_empleado = Tipo_empleado::find($id);
        $tipo_empleado->eliminar();
        header('Location: /admin-tipoEmpleado');
     }
    }
}

?>