
<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/estilos.css">
	<title>Login</title>
	
</head>

<body>
<div class="topnav">
    <a href="home.php">Home</a>
	<a href="change_password.php">Change-password</a>	
  </div>
  
	<div class="container">
		<div class="login">
		<div class="login-x">
			<h1>Bienvenido <?php echo $_SESSION['nombre'];?></h1>
			
		
		</div>
		</div>
	</div>
</body>
</html>