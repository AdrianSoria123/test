<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/estilos.css">
	<title>Login</title>
	
</head>

<body>
<div class="topnav">
    <a href="register.php">Registrarme</a>
  </div>
  
	<div class="container">
		<div class="login">
		<div class="login-x">
			<h1>Login</h1>
			
			<form action="controlador/signinC.php" method="post">
				<label>Email</label>
				<input type="email" name="email" class="form-control" required>
				<br>
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
				<br>
				<button class="btn btn-primary">Login</button>
				
			</form>
		</div>
		</div>
	</div>
</body>
</html>