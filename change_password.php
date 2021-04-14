<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/estilos.css">
	<title>Change-password</title>
	
</head>

<body>
<div class="topnav">
    <a href="home.php">Home</a>
	<a href="change_password.php">Change-password</a>
  </div>
	<div class="container">
		<div class="login">
		<div class="login-x">
			<h5>Change-password</h5>
			
			<form action="controlador/change_passwordC.php" method="post">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" value="<?php echo $_SESSION['nombre'];?>" disabled>
				<input type="hidden" name="id" class="form-control" value="<?php echo $_SESSION['id'];?>">
				<br>
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email'];?>" disabled>
				<br>
				<label>Password</label>
				<input type="password" name="password" class="form-control" autocomplete="off" required>
				<br>
				<button class="btn btn-primary">Update</button>
				
			</form>
		</div>
		</div>
	</div>
</body>
</html>