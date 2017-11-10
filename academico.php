<?php 
	class academico {
			
			 public $noCuenta;
		     public $nombre;
		     public $phone;
		     public $correo;
		     public $tutor;
		     public $pass;

			function __construct(){
		
			}

				public function academico($cu, $no, $ph, $co, $tu, $con){
					$this->noCuenta = $cu;
				    $this->nombre = $no;
				    $this->phone = $ph;
				    $this->correo = $co;
				    $this->tutor = $tu;
				    $this->pass = $con;
				}

			    public function getNoCuenta() {
			        return $this->noCuenta;
			    }
			    
			    public function setNoCuenta($noCuenta) {
			        $this->noCuenta = $noCuenta;
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
			    public function getTutor() {
			        return $this->tutor;
			    }
			    
			    public function setTutor($tutor) {
			        $this->tutor = $tutor;
			    }

			    public function getPassword(){
			    	return $this->pass;
			    }

			    public function setPassword(){
			    	$this->pass = $pass;
			    }

		}
?>