<?php
namespace Model;

class Descarga extends ActiveRecord{
    protected static $tabla = 'descarga';
    protected static $columnasDB = ['id', 'des_in_id','detalle', 'factor'];

    public $id ;
    public $des_in_id;
    public $detalle;
 
    public $factor;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->des_in_id = $args['des_in_id'] ?? '';
        $this->detalle = $args['detalle'] ?? '';

        $this->factor = $args['factor'] ?? '';
    }

    public function validar(){
        if(!$this->des_in_id) {
            self::$alertas['error'][] = "Debes añadir un tipo";
        }
        if(!is_numeric($this->detalle)) {
            self::$alertas['error'][] = "Debes añadir un rango";
        }

        if(!is_numeric($this->factor)) {
            self::$alertas['error'][] = "Debes añadir un factor";
        }
        return self::$alertas;
    }

    public function existe(){
        $query = "SELECT * FROM".self::$tabla."WHERE detalle=".$this->detalle."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El departamento ya esta registrado';
        }
        return $resultado;
    }
}
?>