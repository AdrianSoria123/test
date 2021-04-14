<?php 
require_once '../conexionDB.php';
require_once '../modelo/model.php';

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$data = array(
		$nombre, $email, $password
	);
	
	$obj = new model();
	if($obj->register($data)==1){
		header('location:../index.php');
		
	}else{
		echo "Error";
	}


?>