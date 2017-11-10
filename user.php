<?php 

		/**
		* Alejandro Rodríguez Mendoza
		*/

		class user {
			
			 public $noCuenta;
		     public $academico;
		     public $licenciatura;
		     public $nombre;
		     public $phone;
		     public $correo;
		     public $turno;
		     public $pass;

			function __construct(){
		
			}

				public function user($cu, $aca, $li, $no, $ph, $co, $tu, $con){
					$this->noCuenta = $cu;
				    $this->academico = $aca;
				    $this->licenciatura = $li;
				    $this->nombre = $no;
				    $this->phone = $ph;
				    $this->correo = $co;
				    $this->turno = $tu;
				    $this->pass = $con;
				}

			    public function getNoCuenta() {
			        return $this->noCuenta;
			    }
			    
			    public function setNoCuenta($noCuenta) {
			        $this->noCuenta = $noCuenta;
			    }
			    public function getAcademico() {
			        return $this->academico;
			    }
			    
			    public function setAcademico($academico) {
			        $this->academico = $academico;
			    }
			    public function getLicenciatura() {
			        return $this->licenciatura;
			    }
			    
			    public function setLicenciatura($licenciatura) {
			        $this->licenciatura = $licenciatura;
			    }
			    public function getNombre() {
			        return $this->nombre;
			    }
			    
			    public function setNombre($nombre) {
			        $this->nombre = $nombre;
			    }
			    public function getPhone() {
			        return $this->phone;
			    }
			    
			    public function setPhone($phone) {
			        $this->phone = $phone;
			    }
			    public function getCorreo() {
			        return $this->correo;
			    }
			    
			    public function setCorreo($correo) {
			        $this->correo = $correo;
			    }
			    public function getTurno() {
			        return $this->turno;
			    }
			    
			    public function setTurno($turno) {
			        $this->turno = $turno;
			    }

			    public function getPassword(){
			    	return $this->pass;
			    }

			    public function setPassword(){
			    	$this->pass = $pass;
			    }

		}
?>

