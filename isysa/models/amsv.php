<?php
namespace Model;

class Amsv extends ActiveRecord{
    protected static $tabla = 'amsv';
    protected static $columnasDB = ['id', 'produc13_incen_id', 'factor'];
    //protected static $columnasDB = ['id', 'produc13_incen_id','rangoA', 'rangoB', 'factor'];

    public $id ;
    public $produc13_incen_id;
    // public $rangoA;
    // public $rangoB;
    public $factor;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->produc13_incen_id = $args['produc13_incen_id'] ?? '';
        // $this->rangoA = $args['rangoA'] ?? '';
        // $this->rangoB = $args['rangoB'] ?? '';
        $this->factor = $args['factor'] ?? '';
    }

    public function validar(){
        if(!$this->produc13_incen_id) {
            self::$alertas['error'][] = "Debes añadir un tipo";
        }
        // if(!is_numeric($this->rangoA)) {
        //     self::$alertas['error'][] = "Debes añadir un rango";
        // }
        // if(!is_numeric($this->rangoB)) {
        //     self::$alertas['error'][] = "Debes añadir un rango";
        // }
        if(!is_numeric($this->factor)) {
            self::$alertas['error'][] = "Debes añadir un factor";
        }
        return self::$alertas;
    }
    public function existe(){
        $query = "SELECT * FROM".self::$tabla."WHERE id=".$this->id."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El departamento ya esta registrado';
        }
        return $resultado;
    }
}
?>