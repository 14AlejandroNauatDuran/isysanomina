<?php
namespace Model;

class Tipo_empleado extends ActiveRecord{
    protected static $tabla = 'tipo_empleado';
    protected static $columnasDB = ['id', 'tipo_nombre'];

    public $id;
    public $tipo_nombre;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->tipo_nombre = $args['tipo_nombre'] ?? '';
    }

    public function validar(){
        if(!$this->tipo_nombre) {
            self::$alertas['error'][] = "Debes añadir un departamento";
        }
        return self::$alertas;
    }

    public function existeTipo_empleado(){
        $query = "SELECT * FROM".self::$tabla."WHERE tipo_nombre=".$this->tipo_nombre."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El dato ya esta registrado';
        }
        return $resultado;
    }
}


?>