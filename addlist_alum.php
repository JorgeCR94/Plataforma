<?php
/**
 * Created by PhpStorm.
 * User: JorgeArturo
 * Date: 10/11/2017
 * Time: 07:45 AM
 */

session_start();

require_once("conect.php");
include("lista_difusion.php");

class addlist extends conect
{

    public $id_lista_especial;
    public $alumno_id;
    public $cuenta;


    function __construct()
    {
        parent::__construct("con");
        $this->setConection();
    }



    public function putDataList(){
        $this->id_lista_especial = $_POST['id_lista_especial'];
        $this->alumno_id = $_POST['alumno_id'];
        header('Content-Type: application/json');
        $us = new listaDifusion();
        $us->lista($this->id_lista_especial,
            $this->alumno_id);

        $this->query = "INSERT INTO control.lista_difusion (Id_Lista_Especial,alumno_id) values 
				('".$us->getIdListaEspecial()."','".$us->getAlumnoId()."')";
        $this->insert = mysqli_query($this->_db,$this->query);
        if($this->query == false)
            echo " Errror al insertar ".mysqli_error($this->query);
        else{
            echo json_encode($this->query, JSON_FORCE_OBJECT);
        }

    }

    public function getDataList(){
        $this->query= "SELECT *  FROM control.listas_especiales";
        $this->select = mysqli_query($this->_db, $this->query);
        $this->resultQuery= $this->_db->query($this->query) or die ($this->_db->error);
        $i = 0;

        if( $this->resultQuery->num_rows > 0 ){
            while( $this->element= $this->resultQuery->fetch_assoc() ){
                $aux[$i] = [
                  'id' => $this->element['Id'],
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

        public function getData(){
        $this->cuenta = $_POST['cuenta'];
        $this->query= "SELECT es.Nombre, es.Descripcion FROM control.lista_difusion di INNER JOIN control.listas_especiales es ON di.Id_Lista_Especial = es.Id WHERE di.alumno_id = '". $this->cuenta."'";
        $this->select = mysqli_query($this->_db, $this->query);
        $this->resultQuery= $this->_db->query($this->query) or die ($this->_db->error);
        $i = 0;

        if( $this->resultQuery->num_rows > 0 ){
            while( $this->element= $this->resultQuery->fetch_assoc() ){
                $aux1[$i] = [
                  'nombre' => $this->element['Nombre'],
                  'descripcion' => $this->element['Descripcion']
                ];
                $i++;
            }
        }

        if($this->query == false)
            echo " Errror al obtener ".mysqli_error($this->query);
        else{
            echo json_encode($aux1, $this->resultQuery->num_rows , JSON_FORCE_OBJECT);
        }
    }

        public function getSpecialListWithEndTime(){
        $this->query= "SELECT * FROM control.listas_especiales WHERE Fecha_Final <= now()";
        $this->select = mysqli_query($this->_db, $this->query);
        $this->resultQuery= $this->_db->query($this->query) or die ($this->_db->error);
        $i = 0;

        if( $this->resultQuery->num_rows > 0 ){
            while( $this->element= $this->resultQuery->fetch_assoc() ){
                $aux3[$i] = [
                  'id' => $this->element['Id'],
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
            echo json_encode($aux3, $this->resultQuery->num_rows , JSON_FORCE_OBJECT);
        }
    }


}
    $id = $_POST['id'];
    if ($id == 0){
        $a = new addlist();
        $a->putDataList();
    }else if ($id == 1){
        $a = new addlist();
        $a->getDataList();
    }else if ($id == 2){
        $a = new addlist();
        $a->getData();
    }else if ($id == 3){
        $a = new addlist();
        $a->getSpecialListWithEndTime();
    }
?>