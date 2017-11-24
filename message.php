<?php 
	session_start();

	require_once("conect.php");

	/**
	* 
	*/
	class message extends conect
	{
		public $listName;
		public $subject;
		public $messageContent;
		public $date;
		public $listId;

		function __construct()
		{
			parent::__construct("con");
       		 $this->setConection();
		}

		public function sendMessage(){
			$this->academico = $_SESSION["Cuenta"];;
			$this->listName = $_POST['name'];
			$this->subject = $_POST['subject'];	
			$this->messageContent = $_POST['message_content'];
			$this->date = $_POST['date'];
			header('Content-Type: application/json');

			$this->query= "SELECT *  FROM control.listas_especiales es where es.Nombre = '".$this->listName."' AND es.academico_id = '".$this->academico."'";
			echo $this->query;
			$this->select = mysqli_query($this->_db, $this->query);
        	$this->resultQuery= $this->_db->query($this->query) or die ($this->_db->error);
        	$i = 0;

	        if( $this->resultQuery->num_rows > 0 ){
	            while( $this->element= $this->resultQuery->fetch_assoc() ){
	                $aux[$i] = [
	                  'id' => $this->element['Id']
	                ];
	                $i++;
	            }
	        }
	        $this->listId = $aux[0]['id'];
			$this->queryInsert = "INSERT INTO control.mensaje (Asunto, Contenido, listas_especiales_id) VALUES ('".$this->subject."','".$this->messageContent."','".$this->listId."')";
			$this->insert = mysqli_query($this->_db,$this->queryInsert);
	        if($this->queryInsert == false)
	            echo " Errror al insertar ".mysqli_error($this->queryInsert);
	        else{
	            echo json_encode($this->queryInsert, JSON_FORCE_OBJECT);
	        }
		}
	}

	$id = $_POST['id'];
    if ($id == 0){
        $a = new message();
        $a->sendMessage();
    }

?>