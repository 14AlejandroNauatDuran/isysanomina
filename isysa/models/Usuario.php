<?php 
namespace Model;

class Usuario extends ActiveRecord{
    //BASE DE DATOS
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id','nombre','apellido','email','password','telefono','admin','confirmado','token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre']?? '';
        $this->apellido = $args['apellido']?? '';
        $this->email = $args['email'] ??'';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? '0';
        $this->confirmado = $args['confirmado'] ?? '0';
        $this->token = $args['token'] ?? '';
    }

    //mensajes de validadcion para registro
    public function validarNuevaCuenta(){
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre del Cliente es obligatorio';
        }
        if(!$this->apellido){
            self::$alertas['error'][] = 'El apellido del Cliente es obligatorio';
        }
        
        if(!$this->email){
            self::$alertas['error'][] = 'El Correo del Cliente es obligatorio';
        }
        if(!$this->password){
            self::$alertas['error'][] = 'El password del Cliente es obligatorio';
        }
        if(strlen($this->password)<7){
            self::$alertas['error'][] = 'El password debe tener minimo 8 caracteres';
        }
        
       
        return self::$alertas;
    }
//validar los campos de login estan llenos
    public function validarLogin(){
        if(!$this->email){
            self::$alertas['error'][] = 'El correo es obligatorio';
        }
        if(!$this->password){
            self::$alertas['error'][] = 'La contraseña es obligatorio o incorrecta';
        }
        return self::$alertas;
    }
//validar email
    public function validarEmail() {
        if(!$this->email) {
            self::$alertas['error'][] = 'El email es Obligatorio';
        }
        return self::$alertas;
    }
//validar password
    public function validarPassword() {
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password es obligatorio';
        }
        if(strlen($this->password) < 7) {
            self::$alertas['error'][] = 'El Password debe tener al menos 8 caracteres';
        }

        return self::$alertas;
    }
//revisa si el usuario existe en la base de datos
    public function existeUsuario(){
        $query = "SELECT * FROM".self::$tabla."WHERE email=".$this->email."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El usuario ya esta registrado';
        }
        return $resultado;
    }
//encriptamos e password en hash
    public function hashPasSword(){
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }
//creamos un token de verificación de cuenta
    public function crearToken(){
        $this->token = uniqid();
    }
//verificar que el passwor es identico al del usuario registrado en DB
    public function comprobarPasswordAndVerificado($password){
        $resultado = password_verify($password, $this->password);

        if(!$resultado || !$this->confirmado){
            self::$alertas['error'][] = 'Contraseña Incorrecta o tu cuenta no ha sido confirmada';
        }else{
            return true;
        }
    }
}

?>