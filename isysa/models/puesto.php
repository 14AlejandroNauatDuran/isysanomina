<?php
namespace Model;

class Puesto extends ActiveRecord{
    protected static $tabla = 'puesto';
    protected static $columnasDB = ['id', 'puesto_clave','puesto_nombre', 'departamento_id'];

    public $id ;
    public $puesto_clave;
    public $puesto_nombre;
    public $departamento_id;


    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->puesto_clave = $args['puesto_clave'] ?? '';
        $this->puesto_nombre = $args['puesto_nombre'] ?? '';
        $this->departamento_id = $args['departamento_id'] ?? '';

    }

    public function validar(){
        if(!$this->puesto_clave) {
            self::$alertas['error'][] = "Falta datos";
        }
        if(!$this->puesto_nombre) {
            self::$alertas['error'][] = "Falta datos";
        }
        if(!$this->departamento_id) {
            self::$alertas['error'][] = "Falta datos";
        }

        return self::$alertas;
    }

    public function existePuesto(){
        $query = "SELECT * FROM".self::$tabla."WHERE puesto_clave=".$this->puesto_clave."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El departamento ya esta registrado';
        }
        return $resultado;
    }
}
?>