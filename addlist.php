<?php
/**
 * Created by PhpStorm.
 * User: JorgeArturo
 * Date: 10/11/2017
 * Time: 07:45 AM
 */

session_start();

require_once("conect.php");
include("ListasEspeciales.php");

class addlist extends conect
{

    public $name;
    public $description;
    public $start;
    public $end;
    public $academico;


    function __construct()
    {
        parent::__construct("con");
        $this->setConection();
    }



    public function putDataList(){
        $this->name = $_POST['name'];
        $this->description = $_POST['description'];
        $this->start = $_POST['start'];
        $this->end = $_POST['end'];
        $this->academico = $_SESSION["Cuenta"];
        header('Content-Type: application/json');
        $us = new ListasEspeciales();
        $us->lista($this->name, $this->description,
            $this->start, $this->end,$this->academico);



        $this->query = "INSERT INTO control.listas_especiales (Nombre,Descripcion,Fecha_Inicio,Fecha_Final,academico_id) values 
				('".$us->getNombre()."','".$us->getDescripcion()."','".$us->getFechaInicio()."','".$us->getFechaFin()."','".$us->academico()."')";


        $this->insert = mysqli_query($this->_db,$this->query);
        if($this->query == false)
            echo " Errror al insertar ".mysqli_error($this->query);
        else{
            echo json_encode($this->query, JSON_FORCE_OBJECT);
        }

    }

    public function getDataList(){
        $this->query= "SELECT Nombre,Descripcion,Fecha_Inicio,Fecha_Final  FROM control.listas_especiales";
        $this->select = mysqli_query($this->_db, $this->query);
        $this->resultQuery= $this->_db->query($this->query) or die ($this->_db->error);
        $i = 0;

        if( $this->resultQuery->num_rows > 0 ){
            while( $this->element= $this->resultQuery->fetch_assoc() ){
                $aux[$i] = [
                  'nombre' => $this->element['Nombre'],
                  'descripcion' => $this->element['Descripcion'],
                  'fechai' => $this->element['Fecha_Inicio'],
                  'fechaf' => $this->element['Fecha_Final']
                ];
                $i++;
            }
        }

        if($this->query == false)
            echo " Errror al obtener ".mysqli_error($this->query);
        else{
            echo json_encode($aux, $this->resultQuery->num_rows , JSON_FORCE_OBJECT);
        }
    }


}
    $id = $_POST['id'];
    if ($id == 0){
        $a = new addlist();
        $a->putDataList();
    }elseif ($id == 1){
        $a = new addlist();
        $a->getDataList();
    }



?>