<?php
namespace Model;

class Semana extends ActiveRecord{
    protected static $tabla = 'semana';
    protected static $columnasDB = ['id', 'n_semana_con','fecha_ini', 'fecha_fin', 'empleado_id','turno_id','miercoles','jueves','viernes','sabado','domingo','lunes','martes'];

    public $id ;
    public $n_semana_con;
    public $fecha_ini;
    public $fecha_fin;
    public $empleado_id;
    public $turno_id;
    public $miercoles;
    public $jueves;
    public $viernes;
    public $sabado;
    public $domingo;
    public $lunes;
    public $martes;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->n_semana_con = $args['n_semana_con'] ?? '';
        $this->fecha_ini = $args['fecha_ini'] ?? '';
        $this->fecha_fin = $args['fecha_fin'] ?? '';
        $this->empleado_id = $args['empleado_id'] ?? '';
        $this->turno_id = $args['turno_id'] ?? '';
        $this->miercoles = $args['miercoles'] ?? '';
        $this->jueves = $args['jueves'] ?? '';
        $this->viernes = $args['viernes'] ?? '';
        $this->sabado = $args['sabado'] ?? '';
        $this->domingo = $args['domingo'] ?? '';
        $this->lunes = $args['lunes'] ?? '';
        $this->martes = $args['martes'] ?? '';
    }

    public function validar(){
        if(!$this->n_semana_con) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->fecha_ini) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->fecha_fin) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->empleado_id) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->turno_id) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->miercoles) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->jueves) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->viernes) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->sabado) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->domingo) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->lunes) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->martes) {
            self::$alertas['error'][] = "Campos vacios";
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