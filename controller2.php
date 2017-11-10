<?php 
		session_start();

		/**
		* Alejandro Rodríguez Mendoza
		*/

		require_once("conect.php");

		class respuesta extends conect 
		{
			
			public $user;
			public $pass;
			public $userFound;
			public $passFound;
			public $User;
			public $name;

			function __construct()
			{
				parent::__construct("con");
				$this->setConection();
			}

			protected function user(){
				$this->user = $_POST['usuario'];
				$this->pass = $_POST['password'];
			}

			public function validation(){
			$this->user();


			$this->query = "SELECT No_Cuenta,Nombre,Correo,Password FROM academico WHERE Correo = '".$this->user."'"."AND Password = '".$this->pass."'";
			$this->resultQuery= $this->_db->query($this->query) or die ($this->_db->error);

				if( $this->resultQuery->num_rows > 0 ){
					while( $this->element= $this->resultQuery->fetch_assoc() ){
						$this->userFound = $this->element['Correo'];
						$this->passFound = $this->element['Password'];
						$this->User = $this->element['No_Cuenta'];
						$this->name = $this->element['Nombre'];
					}
				}

				$_SESSION["Correo"] = $this->userFound ;
				$_SESSION["Nombre"] = $this->name;
				$_SESSION["Cuenta"] = $this->User;

				if ($this->respuesta() == 1)
					header('location: index2.php');
				
			}

			protected function respuesta(){
			if( !empty($this->User) && !empty($this->passFound) && !empty($this->userFound) ){
					return 1;
				} else
					header('location: index.html');			
			}
		}

		$ba = new respuesta();
		$ba->validation();
?>