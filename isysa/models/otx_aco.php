<?php
namespace Model;

class Otx_aco extends ActiveRecord{
    protected static $tabla = 'otx_aco';
    protected static $columnasDB = ['id', 'produc15_incen_id', 'factor'];

    public $id ;
    public $produc15_incen_id;
   
    public $factor;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->produc15_incen_id = $args['produc15_incen_id'] ?? '';
      
        $this->factor = $args['factor'] ?? '';
    }

    public function validar(){
        if(!$this->produc15_incen_id) {
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