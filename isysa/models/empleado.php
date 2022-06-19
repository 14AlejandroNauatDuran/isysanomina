<?php
namespace Model;

class Empleado extends ActiveRecord{
    protected static $tabla = 'empleado';
    protected static $columnasDB = ['id', 'empleado_clave','apellido_P', 'apellido_M', 'nombre','puesto_id','turnos_id','tipo_empleado_id','direccion_id'];

    public $id ;
    public $empleado_clave;
    public $apellido_P;
    public $apellido_M;
    public $nombre;
    public $puesto_id;
    public $turnos_id;
    public $tipo_empleado_id;
    public $direccion_id;


    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->empleado_clave = $args['empleado_clave'] ?? '';
        $this->apellido_P = $args['apellido_P'] ?? '';
        $this->apellido_M = $args['apellido_M'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->puesto_id = $args['puesto_id'] ?? '';
        $this->turnos_id = $args['turnos_id'] ?? '';
        $this->tipo_empleado_id = $args['tipo_empleado_id'] ?? '';
        $this->direccion_id = $args['direccion_id'] ?? '';

    }

    public function validar(){
        if(!$this->empleado_clave) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->apellido_P) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->apellido_M) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->nombre) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->puesto_id) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->turnos_id) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->tipo_empleado_id) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->direccion_id) {
            self::$alertas['error'][] = "Campos vacios";
        }

        return self::$alertas;
    }

    public function existe(){
        
    }
}
?>