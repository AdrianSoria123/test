<?php 
require_once '../conexionDB.php';
require_once '../modelo/model.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$data = array(
	$email, $password
);

$obj = new model();
$val = $obj->validacionUser($data);

if($val){
	session_start();
	$_SESSION['id'] = $val[0];
	$_SESSION['nombre'] = $val[1];
	$_SESSION['email'] = $val[2];
	$_SESSION['password'] = $val[3];
	header('location:../home.php');
}else{
	echo "error";
}
?>