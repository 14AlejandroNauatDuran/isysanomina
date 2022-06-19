<?php
namespace Model;

class Incidencia extends ActiveRecord{
    protected static $tabla = 'incidencia';
    protected static $columnasDB = ['id', 'codigo','concepto'];

    public $id ;
    public $codigo;
    public $concepto;
 


    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->codigo = $args['codigo'] ?? '';
        $this->concepto = $args['concepto'] ?? '';


    }

    public function validar(){
        if(!$this->codigo) {
            self::$alertas['error'][] = "Debes añadir un tipo";
        }
        if(!is_numeric($this->concepto)) {
            self::$alertas['error'][] = "Debes añadir un rango";
        }


        return self::$alertas;
    }

    public function existe(){
        $query = "SELECT * FROM".self::$tabla."WHERE codigo=".$this->codigo."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El departamento ya esta registrado';
        }
        return $resultado;
    }
}
?>