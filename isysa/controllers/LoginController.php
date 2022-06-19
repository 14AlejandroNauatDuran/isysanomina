<?php
//este controlador es con el cual public/index se comunica y de aqui se llaman los modelos
namespace Controllers;
use Classes\Email;
use Model\Usuario;
use MVC\Router;


class LoginController{
    //funcion para loguarse 
    public static function login(Router $router){
        //echo "Login";
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $auth = new Usuario($_POST);
           $alertas = $auth->validarLogin();

           if(empty($alertas)){
               //comprobar que exista el usuario
               $usuario = Usuario::where('email', $auth->email);

               if($usuario){
                   //verificar el password
                   if($usuario->comprobarPasswordAndVerificado($auth->password)){
                       //autenticar el usuario
                       session_start();

                       $_SESSION['id'] = $usuario->id;
                       $_SESSION['nombre'] = $usuario->nombre . " " . $usuario->apellido;
                       $_SESSION['email'] = $usuario->email;
                       $_SESSION['login'] = true;

                       //redireccinamiento
                       if($usuario->admin === "1"){
                           $_SESSION['admin'] = $usuario->admin ?? null;
                           header('Location: /admin');
                       }else{
                           header('Location: /admin');
                       }
                   }
               }else{
                   Usuario::setAlerta('error', 'Usuario no encontrado');
               }
           }
        }

        $alertas = Usuario::getAlertas();
        
        $router->render('auth/login',[
            'alertas' => $alertas,
        ]);

    }

    public static function logout(){
        session_start();
        $_SESSION = [];
        header('Location: /');
    }

    public static function olvide(Router $router){
        //echo "olvide";
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $auth = new Usuario($_POST);
            $alertas = $auth->validarEmail();

            if(empty($alertas)){
                $usuario = Usuario::where('email', $auth->email);
                if($usuario && $usuario->confirmado === "1"){
                    //generar un token nuevo login
                    $usuario->crearToken();
                    $usuario->guardar();
                    //enviar el mail
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                    $email->enviarInstrucciones();
                    //alerta de existo
                    Usuario::setAlerta('exito', 'Revisa tu email');
                }else{
                    Usuario::setAlerta('error', 'El usuario no existe o no esta confirmado');
                }
            }
        }
        $alertas = Usuario::getAlertas();
        $router->render('auth/olvide_contrasena', [
            'alertas' => $alertas
        ]);
    }

    public static function recuperar(Router $router){
       // echo "recuperar";
       $alertas = [];
       $error = false;

       $token = s($_GET['token']);

       //Buscar usuario por su token
       $usuario = Usuario::where('token', $token);

       if(empty($usuario)){
           Usuario::setAlerta('error', 'Token No valido');
           $error = true;
       }

       if($_SERVER['REQUEST_METHOD'] === 'POST'){
           //leer el nuevo password y guardarlo
           $password = new Usuario($_POST);
           $alertas = $password->validarPassword();

           if(empty($alertas)){
               $usuario->password = null;

               $usuario->password = $password->password;
               $usuario->hashPassword();
               $usuario->token = null;

               $resultado = $usuario->guardar();
               if($resultado){
                   header('Location: /');
               }
            }
       }

       $alertas = Usuario::getAlertas();
       $router->render('auth/recuperar-password', [
           'alertas' => $alertas,
           'error' => $error
       ]);

    }

    public static function crear(Router $router){
        $usuario = new Usuario;

        //alertas vacias
        $alertas =[];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

           //revisar que alerta este vacio
            if(empty($alertas)){
               //verificar que no este registrados
                $resultado = $usuario->existeUsuario();

                if($resultado->num_rows){
                    $alertas = Usuario::getAlertas();
                }else{
                    //no esta registrado
                    //hash
                    $usuario->hashPassword();
                    //generar un token único
                    $usuario->crearToken();

                    //enviar el email
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                    $email->enviarConfirmacion();
                
                    //crear el Usuario
                    $resultado = $usuario->guardar();
                    if($resultado){
                        header('Location: /mensaje');
                    }
                }
            }
        }
        $router->render('auth/crear-cuenta',[
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    public static function mensaje(Router $router){
        $router->render('auth/mensaje');
    }

    public static function confirmar(Router $router){
      $alertas = [];

      $token = s($_GET['token']);

      $usuario = Usuario::where('token',$token);

      if(empty($usuario)) {
        // Mostrar mensaje de error
             Usuario::setAlerta('error', 'Token No Válido');
        } else {
        // Modificar a usuario confirmado
            $usuario->confirmado = "1";
            $usuario->token = null;
            $usuario->guardar();
            Usuario::setAlerta('exito', 'Cuenta Comprobada Correctamente');
        }
        
        //obtener alertas
        $alertas = Usuario::getAlertas();

        //renderizar la vista
        $router->render('auth/confirmar-cuenta',[
            'alertas' => $alertas
        ]);
    }
}