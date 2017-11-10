<?php 

/**
* Alejandro
*/

		require_once("conect.php");
		include("user.php");

		class configu extends conect
		{
			
			 public $noCuenta;
		     public $academico;
		     public $licenciatura;
		     public $nombre;
		     public $phone;
		     public $correo;
		     public $turno;
		     public $pass;

			function __construct()
			{
				parent::__construct("con");
				$this->setConection();
			}

		public function getDataUser(){
			$this->noCuenta = $_POST['cuenta'];
			$this->academico = $_POST['tutor'];
			$this->licenciatura = $_POST['lic'];
			$this->nombre = $_POST['nombre'];
			$this->phone = $_POST['tel'];
			$this->correo = $_POST['correo'];
			$this->turno = $_POST['turno'];
			$this->pass = $_POST['pas'];
			$us = new user();
			$us->user($this->noCuenta, $this->academico, $this->licenciatura, $this->nombre, $this->phone,
			$this->correo, $this->turno, $this->pass);

	
				$this->query = "INSERT INTO control.alumno (No_Cuenta,Nombre,Phone,Correo,Turno,Id_Licenciatura, No_Cuenta_Academico, Password) values 
				('".$us->getNoCuenta()."','".$us->getNombre()."','".$us->getPhone()."','".$us->getCorreo()."','".$us->getTurno()."','".$us->getLicenciatura()."','".$us->getAcademico()."','".$us->getPassword()."')";

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