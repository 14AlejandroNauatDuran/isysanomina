<?php
namespace Controllers;

use MVC\Router;
use Model\Puesto;
use Model\Turnos;
use Model\Tipo_empleado;
use Model\Direccion;
use Model\Empleado;


class EmpleadoController {
    public static function index(Router $router){
        $puesto = Puesto::all();
        $turnos = Turnos::all();
        $tipo_empleado = Tipo_empleado::all();
        $direccion = Direccion::all();
        $empleado = Empleado::all();

        $router->render('admin/personal/index',
        [
            'puesto'=>$puesto,
            'turnos' => $turnos,
            'tipo_empleado' => $tipo_empleado,
            'direccion' => $direccion,
            'empleado' => $empleado
        ]
        );
    }

    public static function crear(Router $router){
        $direccion = new Direccion;
        $empleado = new Empleado;
        

        //tablas de union
        $puesto = Puesto::all();
        $turnos = Turnos::all();
        $tipo_empleado = Tipo_empleado::all();
        

        //alerts vacias
        $alertas =[];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $direccion->sincronizar($_POST);
            $alertas = $direccion->validar();

            $empleado -> sincronizar($_POST);
            $alertas = $empleado->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $empleado->existeEmpleado();

                if($resultado->num_rows){
                    $alertas = Direccion::getAlertas();
                    $alertas = Empleado::getAlertas();
                }else{
                    //crear la direccion
                    $resultado = $direccion->guardar();
                    //crear el Usuario
                    $resultado = $empleado->guardar();
                    if($resultado){
                        header('Location: /admin-personal');
                    }
                }
            }
        }
        $router->render('admin/personal/crear',[
            'alertas' => $alertas,
            'puesto'=>$puesto,
            'turnos' => $turnos,
            'tipo_empleado' => $tipo_empleado,
            'direccion' => $direccion,
            'empleado' => $empleado
        ]);
    }

    public static function actualizar(Router $router) {
    // //     session_start();
    // //     isAdmin();

     if(!is_numeric($_GET['id'])) return;

     $direccion = Direccion::find($_GET['id']);
     $empleado = Empleado::find($_GET['id']);

     //tablas
     $puesto = Puesto::all();
     $turnos = Turnos::all();
     $tipo_empleado = Tipo_empleado::all();
     //alertas
     $alertas = [];

        
      if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $direccion->sincronizar($_POST);
        $alertas = $direccion->validar();

        $empleado -> sincronizar($_POST);
        $alertas = $empleado->validar();

          if(empty($alertas)) {
            //actualizar direcion
            $direccion->guardar();
            //actualizar el Usuario
            $empleado->guardar();
             header('Location: /admin-personal
             ');
            }
        }

    $router->render('/admin/personal/actualizar', [
      //'nombre' => $_SESSION['nombre'],
        'alertas' => $alertas,
        'puesto'=>$puesto,
        'turnos' => $turnos,
        'tipo_empleado' => $tipo_empleado,
        'direccion' => $direccion,
        'empleado' => $empleado
       ]);
    }

    public static function eliminar() {
    //     session_start();
    //     isAdmin();
        
     if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $direccion = Direccion::find($id);
        $empleado = Empleado::find($id);
        $direccion->eliminar();
        $empleado->eliminar();
        header('Location: /admin-personal');
     }
    }
}

?>