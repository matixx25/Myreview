<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myreview login</title>
	<link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<?php require 'partials/header.php'?>
<h1>Login</h1>
<span>or <a href="Singup.php">Sign up</a></span><!--Muestra un enlace a Register-->

	
<form method="post" action="Validate_login.php" name="Login" >


	<!--Usuario-->
		<input type="text" name="Correo" placeholder="Myreview@gmail.com" minlenght="5" maxlenght="60"required>
	<!--Contraseña-->
		<input type="password" name="Contraseña" placeholder="Password" minlenght="5" maxlenght="60" required>
	<!--Enviar-->
		<button type="submit">Log In</button>
	



</form>



</body>
</html>