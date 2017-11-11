<?php
/**
 * Created by PhpStorm.
 * User: JorgeArturo
 * Date: 10/11/2017
 * Time: 07:45 AM
 */




require_once("conect.php");
include("ListasEspeciales.php");

class addlist extends conect
{

    public $name;
    public $description;
    public $start;
    public $end;


    function __construct()
    {
        parent::__construct("con");
        $this->setConection();
    }

    public function getDataList(){
        $this->name = $_POST['name'];
        $this->description = $_POST['description'];
        $this->start = $_POST['start'];
        $this->end = $_POST['end'];
        header('Content-Type: application/json');
        $us = new ListasEspeciales();
        $us->lista($this->name, $this->description,
            $this->start, $this->end);

        $datos = array(
            'estado' => 'ok',
            'name' => $this->name,
            'description' => $this->description,
            'start' => $this->start,
            'end' => $this->end
        );


        $this->query = "INSERT INTO control.listas_especiales (Nombre,Descricion,Fecha_Inicio,Fecha_Final) values 
				('".$us->getNombre()."','".$us->getDescripcion()."','".$us->getFechaInicio()."','".$us->getFechaFin()."')";


        $this->insert = mysqli_query($this->_db,$this->query);
        if($this->query == false)
            echo " Errror al insertar ".mysqli_error($this->query);
        else{
            echo json_encode($this->query, JSON_FORCE_OBJECT);
        }

    }


}

$a = new addlist();
$a->getDataList();


?>