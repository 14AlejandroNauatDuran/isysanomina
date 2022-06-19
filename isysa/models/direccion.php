<?php
namespace Model;

class Direccion extends ActiveRecord{
    protected static $tabla = 'direccion';
    protected static $columnasDB = ['id', 'calle_cruzamiento','no_ext', 'no_int', 'colonia','poblacion','municipio','entidad_fede','pais','cp'];

    public $id ;
    public $calle_cruzamiento;
    public $no_ext;
    public $no_int;
    public $colonia;
    public $poblacion;
    public $municipio;
    public $entidad_fede;
    public $pais;
    public $cp;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->calle_cruzamiento = $args['calle_cruzamiento'] ?? '';
        $this->no_ext = $args['no_ext'] ?? '';
        $this->no_int = $args['no_int'] ?? '';
        $this->colonia = $args['colonia'] ?? '';
        $this->poblacion = $args['poblacion'] ?? '';
        $this->municipio = $args['municipio'] ?? '';
        $this->entidad_fede = $args['entidad_fede'] ?? '';
        $this->pais = $args['pais'] ?? '';
        $this->cp = $args['cp'] ?? '';
    }

    public function validar(){
        if(!$this->calle_cruzamiento) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->no_ext) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->no_int) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->colonia) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->poblacion) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->municipio) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->entidad_fede) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->pais) {
            self::$alertas['error'][] = "Campos vacios";
        }
        if(!$this->cp) {
            self::$alertas['error'][] = "Campos vacios";
        }
        return self::$alertas;
    }
    public function existe(){
        
    }
}
?>