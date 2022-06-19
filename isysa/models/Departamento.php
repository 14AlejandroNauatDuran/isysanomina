<?php
namespace Model;

class Departamento extends ActiveRecord{
    protected static $tabla = 'departamento';
    protected static $columnasDB = ['id', 'depto_nombre'];

    public $id;
    public $depto_nombre;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->depto_nombre = $args['depto_nombre'] ?? '';
    }

    public function validar(){
        if(!$this->depto_nombre) {
            self::$alertas['error'][] = "Debes añadir un departamento";
        }
        return self::$alertas;
    }

    public function existeDepartamento(){
        $query = "SELECT * FROM".self::$tabla."WHERE depto_nombre=".$this->depto_nombre."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El departamento ya esta registrado';
        }
        return $resultado;
    }
}


?>