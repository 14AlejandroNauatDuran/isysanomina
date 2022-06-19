<?php
namespace Model;

class Produc_incen extends ActiveRecord{
    protected static $tabla = 'produc_incen';
    protected static $columnasDB = ['id', 'nombreP'];

    public $id;
    public $nombreP;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->nombreP = $args['nombreP'] ?? '';
    }

    public function validar(){
        if(!$this->nombreP) {
            self::$alertas['error'][] = "Debes añadir un producto";
        }
        return self::$alertas;
    }

    public function existe(){
        $query = "SELECT * FROM".self::$tabla."WHERE nombreP=".$this->nombreP."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El departamento ya esta registrado';
        }
        return $resultado;
    }

}


?>