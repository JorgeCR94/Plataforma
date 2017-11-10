<?php


	class conect{

		protected $_request;
		protected $_db;
		protected $_response;
		public $conect;
		public  $conection;
		public $setConfig;
		const JS_OBJECTS_PATH = '../models/Js_Objects/';


		//The construct is used in others class with the following format "parent::__construct('configuracion');"
		function __construct($selectConection){

				$this->_request = file_get_contents('conection.json', FILE_USE_INCLUDE_PATH);
				$this->conection = json_decode($this->_request, true);

				self::confirmationJson();

				$this->setConfig = array();

				$position = 0;
				$dbChoose = '';

				for ($i=0; $i < count($this->conection['conectToServer'][3]['db']); $i++) {

					if(!empty($this->conection['conectToServer'][3]['db'][$i][$selectConection])){
						$position = $i;
						$dbChoose = $selectConection;
					}
				}

				array_push($this->setConfig, $position);
				array_push($this->setConfig, $dbChoose);

				$this->conect = array(
					'server' => $this->conection['conectToServer'][0]['host'],
					'user' => $this->conection['conectToServer'][1]['user'],
					'password' => $this->conection['conectToServer'][2]['pass'],
					'database' => $this->conection['conectToServer'][3]['db'][$this->setConfig[0]][$this->setConfig[1]],
					'coding' => $this->conection['conectToServer'][4]['charset']
				);
		}

		public static function confirmationJson(){
			switch(json_last_error()) {
				case JSON_ERROR_NONE:
						//echo 'success';
				break;
				case JSON_ERROR_DEPTH:
						echo ' - Excedido tamaño máximo de la pila';
				break;
				case JSON_ERROR_STATE_MISMATCH:
						echo ' - Desbordamiento de buffer o los modos no coinciden';
				break;
				case JSON_ERROR_CTRL_CHAR:
						echo ' - Encontrado carácter de control no esperado';
				break;
				case JSON_ERROR_SYNTAX:
						echo ' - Error de sintaxis, JSON mal formado';
				break;
				case JSON_ERROR_UTF8:
						echo ' - Caracteres UTF-8 malformados, posiblemente están mal codificados';
				break;
				default:
						return TRUE;
				break;
			}

			echo PHP_EOL;
		}

		public function setConection(){

			$this->_response = $this->conect;

			if(!empty($this->_response['database'])){
				$this->_db = new mysqli($this->_response['server'],	$this->_response['user'],	$this->_response['password'],	$this->_response['database']);
				if($this->_db->connect_errno)
					echo "Fallo al conectar al servidor MySQL: ". $this->_db->connect_error;

					$this->_db->set_charset($this->_response['coding']);
			}else
				echo "No se encontro la base de datos";
		}

		public function testConection(){
			if(mysqli_ping($this->_db))
				return TRUE;
			else
				return FALSE;
		}

		public function closeConection(){
			$this->_db->close();
		}
	}

?>
