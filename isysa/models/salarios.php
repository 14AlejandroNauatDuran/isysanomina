<?php
namespace Model;

class Salarios extends ActiveRecord{
    protected static $tabla = 'salarios';
    protected static $columnasDB = ['id', 'departamento1_id','puesto1_id', 'monto'];

    public $id ;
    public $departamento1_id;
    public $puesto1_id;
    public $monto;


    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->departamento1_id = $args['departamento1_id'] ?? '';
        $this->puesto1_id = $args['puesto1_id'] ?? '';
        $this->monto = $args['monto'] ?? '';

    }

    public function validar(){
        if(!$this->departamento1_id) {
            self::$alertas['error'][] = "Falta datos";
        }
        if(!$this->puesto1_id) {
            self::$alertas['error'][] = "Falta datos";
        }
        if(!is_numeric($this->monto)) {
            self::$alertas['error'][] = "Falta datos";
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