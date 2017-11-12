<?php
/**
 * Created by PhpStorm.
 * User: JorgeArturo
 * Date: 10/11/2017
 * Time: 10:13 AM
 */

class ListasEspeciales
{
    public $nombre;
    public $descripcion;
    public $fecha_inicio;
    public $fecha_fin;
    public $academico;

    function __construct(){

    }

    public function lista($no, $des, $fei, $fef, $aca){
        $this->nombre = $no;
        $this->descripcion = $des;
        $this->fecha_inicio = $fei;
        $this->fecha_fin = $fef;
        $this->academico = $aca;
    }
    public function setAcademico($academico) {
        $this->academico = $academico;
    }
    public function academico(){
        return $this->academico;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }
    public function setTutor($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getFechaInicio() {
        return $this->fecha_inicio;
    }

    public function setFechaInicio($fecha) {
        $this->fecha_inicio = $fecha;
    }
    public function getFechaFin() {
        return $this->fecha_fin;
    }

    public function setFechaFin($fecha) {
        $this->fecha_fin = $fecha;
    }


}