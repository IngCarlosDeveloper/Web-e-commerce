<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
<!---------------------------------------------------------------------ENCABEZADO----------------------------------------------------------------->
<div class="head">
		
		<div class="logo">
			<a href="#"><img src="img/total.png" class="imglogo"></a>
		</div>
		<nav class="navbar">
			<a href="#">Inicio</a>
			<a href="registro.php">Registro</a>
			<a href="#">Contacto</a>
			<a href="#">Productos</a>
			<a href="#">Precio</a>
		</nav>
</div>

<!---------------------------------------------------------------------FORMULARIO----------------------------------------------------------------->

<form method="post">
	<h2>Logo de Total</h2>
	<p>Inicia tu registro</p>

	<div class="menu">
		<input type="text" name="name" placeholder="Nombre Y Apellido">
		<img src="img/registro/name.svg" class="menu_icono">
	</div>

	<div class="menu">
		<input type="text" name="username" placeholder="Nombre de Usuario">
		<img src="img/registro/name.svg" class="menu_icono">
	</div>

	<div class="menu">
		<input type="text" name="correo" placeholder="Correo">
		<img src="img/registro/email.svg" class="menu_icono">
	</div>

	<div class="menu">
		<input type="text" name="direction" placeholder="Dirección">
		<img src="img/registro/direction.svg" class="menu_icono">
	</div>

	<div class="menu">
		<input type="number" name="phone" placeholder="Telefono">
		<img src="img/registro/phone.svg" class="menu_icono">
	</div>

	<div class="menu">
		<input type="password" name="password" placeholder="Contraseña">
		<img src="img/registro/password.svg" class="menu_icono">
	</div>

	<input type="submit" class="btn" name="register" value="enviar">

</form>

<?php
	include("php/registro/registrar.php")
?>
    
</body>
</html>