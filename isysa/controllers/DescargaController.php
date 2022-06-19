<?php

namespace Controllers;

use MVC\Router;

use Model\Descarga;
use Model\Des_in;

class DesController {
    public static function index(Router $router){
        $des_in = Des_in::all();
        $descarga = Descarga::all();

        $router->render('admin/incentivo/index',[
            'des_in' => $des_in,
            'descarga' => $descarga
        ]);
    }
    public static function creardes(Router $router){
        
    }
}