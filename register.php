<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/estilos.css">
	<title>Login</title>
	
</head>

<body>
<div class="topnav">
    <a href="#">Registrarme</a>
	<a href="index.php">Login</a>
  </div>
  
	<div class="container">
		<div class="login">
		<div class="login-x">
			<h1>Registro</h1>
			
			<form action="controlador/registerC.php" method="post">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" required>
				<br>
				
				<label>Email</label>
				<input type="email" name="email" class="form-control" required>
				<br>
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
				<br>
				<button class="btn btn-primary">Registrarme</button>

			</form>
		</div>
		</div>
	</div>
</body>
</html>