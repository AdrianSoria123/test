<?php 

	class conexionBD{
		private $serv ="localhost";
		private $user = "root";
		private $password = "";
		private $baseD = "test";
		
		
		public function conexion(){
			$conexion = mysqli_connect($this->serv, $this->user, $this->password, $this->baseD);
			return $conexion;
		}
		
	}
?>