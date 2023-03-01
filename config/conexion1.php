<?php
		session_start();

		class Conectar{
			protected $dbh;

		protected function Conexion(){
			try{
				//local
	   			$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=services","root","");
				//$conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=andercode_helpdesk1","andercode","contraseña");
	   			return $conectar;
			} catch (Exception $e){
				print "!Error BD!:" . $e->getMessage() . "<br/>";
				die();

		}

	}
	public function set_names(){
		return $this->dbh->query("SET NAMES 'utf8'");
}

	public static function ruta(){
	//Local
	return "http://localhost/services/";
	//Produccion
	//return "http://helpdesk.anderson-bastidas.com/";

	}
}
?>

