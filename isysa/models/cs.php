<?php
namespace Model;

class Cs extends ActiveRecord{
    protected static $tabla = 'cs';
    protected static $columnasDB = ['id', 'produc18_incen_id','factor'];

    public $id ;
    public $produc18_incen_id;
    public $factor;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->produc18_incen_id = $args['produc18_incen_id'] ?? '';

        $this->factor = $args['factor'] ?? '';
    }

    public function validar(){
        if(!$this->produc18_incen_id) {
            self::$alertas['error'][] = "Debes añadir un tipo";
        }
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