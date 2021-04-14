<?php 

class model{
	
	public function register($data){
		$con = new conexionBD();
		$conexion = $con->conexion();
		$sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$data[0]', '$data[1]', '$data[2]')";
		return $res = mysqli_query($conexion, $sql);
	}
	
	public function validacionUser($data){
		$con = new conexionBD();
		$conexion = $con->conexion();
		$sql ="SELECT id, nombre, email, password from usuarios WHERE email = '$data[0]' AND password = '$data[1]'";
		$res = mysqli_query($conexion, $sql);
		return mysqli_fetch_row($res);
	}
	
	public function change_password($data){
		$con = new conexionBD();
		$conexion = $con->conexion();
		$sql ="UPDATE usuarios SET password = '$data[1]' WHERE id =$data[0]";
		return $res = mysqli_query($conexion, $sql);
	}
}
?>