<?php
namespace Model;

class Turnos extends ActiveRecord{
    protected static $tabla = 'turnos';
    protected static $columnasDB = ['id', 'turno_clave','turno_nombre', 'hora_inicio', 'hora_fin'];

    public $id ;
    public $turno_clave;
    public $turno_nombre;
    public $hora_inicio;
    public $hora_fin;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->turno_clave = $args['turno_clave'] ?? '';
        $this->turno_nombre = $args['turno_nombre'] ?? '';
        $this->hora_inicio = $args['hora_inicio'] ?? '';
        $this->hora_fin = $args['hora_fin'] ?? '';
    }

    public function validar(){
        if(!$this->turno_clave) {
            self::$alertas['error'][] = "Faltan datos";
        }
        if(!$this->turno_nombre) {
            self::$alertas['error'][] = "Faltan datos";
        }
        if(!$this->hora_inicio) {
            self::$alertas['error'][] = "Faltan datos";
        }
        if(!$this->hora_fin) {
            self::$alertas['error'][] = "Faltan datos";
        }
        return self::$alertas;
    }
    public function existeTurnos(){
        $query = "SELECT * FROM".self::$tabla."WHERE turno_clave=".$this->turno_clave."'LIMIT 1'";
       
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            self::$alertas['error'][]='El departamento ya esta registrado';
        }
        return $resultado;
    }
}
?>