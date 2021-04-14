<?php 
require_once '../conexionDB.php';
require_once '../modelo/model.php';

$id = $_POST['id'];
$password = md5($_POST['password']);

$data =array(
	$id, $password
);

$obj =  new model();
if($obj->change_password($data)==1){
	header('location:../index.php');
	session_destroy();
	
}else{
	echo "Error";
}

	
?>