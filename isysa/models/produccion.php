<?php
namespace Model;

class Produccion extends ActiveRecord{
    protected static $tabla = 'produccion';
    protected static $columnasDB = ['id', 'prod_incen_id','turnos1_id', 'fecha', 'cantidad'];

    public $id ;
    public $prod_incen_id;
    public $turnos1_id;
    public $fecha;
    public $cantidad;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->prod_incen_id = $args['prod_incen_id'] ?? '';
        $this->turnos1_id = $args['turnos1_id'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
    }

    public function validar(){
        if(!$this->prod_incen_id) {
            self::$alertas['error'][] = "Debes añadir un tipo";
        }
        if(!$this->turnos1_id) {
            self::$alertas['error'][] = "Debes añadir un rango";
        }
        if(!$this->fecha) {
            self::$alertas['error'][] = "Debes añadir un rango";
        }
        if(!$this->cantidad) {
            self::$alertas['error'][] = "Debes añadir un cantidad";
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