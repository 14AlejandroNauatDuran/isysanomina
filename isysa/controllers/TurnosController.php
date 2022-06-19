<?php
namespace Controllers;

use MVC\Router;
use Model\Turnos;

class TurnosController {
    public static function index(Router $router){
        $turnos = Turnos::all();
        $router->render('admin/turnos/index',
        ['turnos'=>$turnos ]
        );
    }

    public static function crear(Router $router){
        $turnos = new Turnos;
        //alerts vacias
        $alertas =[];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $turnos->sincronizar($_POST);
            $alertas = $turnos->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $turnos->existeTurnos();

                if($resultado->num_rows){
                    $alertas = Turnos::getAlertas();
                }else{
                
                    //crear el Usuario
                    $resultado = $turnos->guardar();
                    if($resultado){
                        header('Location: /admin-turnos');
                    }
                }
            }
        }
        $router->render('admin/turnos/crear',[
            'alertas' => $alertas,
            'turnos' => $turnos
        ]);
    }

    public static function actualizar(Router $router) {
    // //     session_start();
    // //     isAdmin();

     if(!is_numeric($_GET['id'])) return;

     $turnos = Turnos::find($_GET['id']);
     $alertas = [];

        
      if($_SERVER['REQUEST_METHOD'] === 'POST') {
           $turnos->sincronizar($_POST);

           $alertas = $turnos->validar();

          if(empty($alertas)) {
             $turnos->guardar();
             header('Location: /admin-turnos
             ');
            }
        }

    $router->render('/admin/turnos/actualizar', [
      //'nombre' => $_SESSION['nombre'],
      'turnos' => $turnos,
      'alertas' => $alertas
       ]);
    }

    public static function eliminar() {
    //     session_start();
    //     isAdmin();
        
     if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $turnos = Turnos::find($id);
        $turnos->eliminar();
        header('Location: /admin-turnos');
     }
    }
}

?>