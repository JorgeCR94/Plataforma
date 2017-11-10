<?php 

/**
* Alejandro
*/

		require_once("conect.php");
		include("academico.php");

		class configu extends conect
		{
			
			 public $noCuenta;
		     public $nombre;
		     public $phone;
		     public $correo;
		     public $tutor;
		     public $pass;

			function __construct()
			{
				parent::__construct("con");
				$this->setConection();
			}

		public function getDataUser(){
			$this->noCuenta = $_POST['cuent'];
			$this->nombre = $_POST['nombr'];
			$this->phone = $_POST['te'];
			$this->correo = $_POST['corre'];
			$this->tutor = $_POST['tuto'];
			$this->pass = $_POST['pass'];
			$us = new academico();
			$us->academico($this->noCuenta, $this->nombre, $this->phone,
			$this->correo, $this->tutor, $this->pass);

	
				$this->query = "INSERT INTO control.academico (No_Cuenta,Nombre,Telefono,Correo,Tutor, Password) values 
				('".$us->getNoCuenta()."','".$us->getNombre()."','".$us->getPhone()."','".$us->getCorreo()."','".$us->getTutor()."','".$us->getPassword()."')";


				$this->insert = mysqli_query($this->_db,$this->query);
				 if($this->query == false)
				 		echo " Errror al insertar password".mysqli_error($this->query);
				 else{
				 	header('location: index.html');
				 }
				 		
			}


		}

		$a = new configu();
		$a->getDataUser();

?>