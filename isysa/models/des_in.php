<?php
namespace Model;

class Des_in extends ActiveRecord{
    protected static $tabla = 'des_in';
    protected static $columnasDB = ['id', 'nombreD'];

    public $id;
    public $nombreD;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->nombreD = $args['nombreD'] ?? '';
    }

    public function validar(){
        if(!$this->nombreD) {
            self::$alertas['error'][] = "Debes añadir un departamento";
        }
        return self::$alertas;
    }

    public function existe(){
        $query = "SELECT * FROM".self::$tabla."WHERE nombreD=".$this->nombreD."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El departamento ya esta registrado';
        }
        return $resultado;
    }

}


?>