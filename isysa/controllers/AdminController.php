<?php
namespace Controllers;

use MVC\Router;
use Model\Home;

class AdminController{
    public static function index(Router $router){
      //  session_start();
        //isAdmin();

     //   $Home=Home::all();

    //mandar a una pagina.        
        $router->render('admin/index',[
           // 'nombre'=> $_SESSION['nombre'],
          //  'home'=> $Home
        ]);
    }
}
?>