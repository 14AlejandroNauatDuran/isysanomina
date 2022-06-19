<?php
namespace Controllers;

use MVC\Router;
use Model\Departamento;

class DepartamentoController {
    public static function index(Router $router){
        $departamento = Departamento::all();
        $router->render('admin/departamento/index',
        ['departamento'=>$departamento ]
        );
    }

    public static function crear(Router $router){
        $departamento = new Departamento;
        //alerts vacias
        $alertas =[];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $departamento->sincronizar($_POST);
            $alertas = $departamento->validar();
            //alert vacio
           if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $departamento->existeDepartamento();

                if($resultado->num_rows){
                    $alertas = Departamento::getAlertas();
                }else{
                
                    //crear el Usuario
                    $resultado = $departamento->guardar();
                    if($resultado){
                        header('Location: /admin-departamento');
                    }
                }
            }
        }
        $router->render('admin/departamento/crear',[
            'alertas' => $alertas,
            'departamento' => $departamento
        ]);
    }

    public static function actualizar(Router $router) {
    // //     session_start();
    // //     isAdmin();

     if(!is_numeric($_GET['id'])) return;

     $departamento = Departamento::find($_GET['id']);
     $alertas = [];

        
      if($_SERVER['REQUEST_METHOD'] === 'POST') {
           $departamento->sincronizar($_POST);

           $alertas = $departamento->validar();

          if(empty($alertas)) {
             $departamento->guardar();
             header('Location: /admin-departamento
             ');
            }
        }

    $router->render('/admin/departamento/actualizar', [
      //'nombre' => $_SESSION['nombre'],
      'departamento' => $departamento,
      'alertas' => $alertas
       ]);
    }

    public static function eliminar() {
    //     session_start();
    //     isAdmin();
        
     if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $departamento = Departamento::find($id);
        $departamento->eliminar();
        header('Location: /admin-departamento');
     }
    }
}

?>