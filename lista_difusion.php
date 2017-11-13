<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 10/11/2017
 * Time: 10:13 AM
 */

class listaDifusion
{
    public $id;
    public $id_lista_especial;
    public $alumno_id;

    function __construct(){

    }

    public function lista($id_lista, $alumno){
        $this->id_lista_especial = $id_lista;
        $this->alumno_id = $alumno;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setIdListaEspecial($lista) {
        $this->id_lista_especial = $lista;
    }

    public function getIdListaEspecial() {
        return $this->id_lista_especial;
    }

    public function setAlumnoId($alumno) {
        $this->alumno_id = $alumno;
    }

    public function getAlumnoId() {
        return $this->alumno_id;
    }

}