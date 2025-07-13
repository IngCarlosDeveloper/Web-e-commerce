<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" href="css/ingreso.css">
</head>
<body>
<?php
	include("php/ingreso.php");
?>
<!---------------------------------------------------------------------ENCABEZADO----------------------------------------------------------------->
<div class="head">
		
	<div class="logo">
			<a href="index.php"><img src="img/total.png" class="imglogo"></a>
		</div>
		<nav class="navbar">
			<a href="ingreso.php">login/registro</a>
			<a href="#">Contacto</a>
			<a href="#">Productos</a>
			<a href="#">Precio</a>
		</nav>
</div>

<!---------------------------------------------------------------------FORMULARIO----------------------------------------------------------------->
<div class="formularios">

<!---------------------------------------------------------------------REGISTRO----------------------------------------------------------------->


<form method="post" class="registro">
	<h2>Logo de Total</h2>
	<p>Inicia tu registro</p>
	<?php
	if($status==1){
		?>
		<h3 class="success">Tu registro se ha completado</h3>
		<?php
	}elseif($status== 2){
		?>
		<h3 class="error">Ocurrio un error</h3>
		<?php
	}elseif($status== 3){
		?>
		<h3 class="error">Llena todos los campos</h3>
		<?php
	}
	?>

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

<!---------------------------------------------------------------------LOGIN----------------------------------------------------------------->


<form method="post" class="login">
	<h2>Logo de Total</h2>
	<p>Inicia tu login</p>
	<?php
	if($status== 3){
		?>
		<h3 class="error">Llena todos los campos</h3>
		<?php
	}elseif($status== 4){
		?>
		<h3 class="error">Usuario o contraseña incorrectos</h3>
		<?php
	}
	?>

	<div class="menu">
		<input type="text" name="username" placeholder="Nombre de Usuario">
		<img src="img/registro/name.svg" class="menu_icono">
	</div>

	<div class="menu">
		<input type="password" name="password" placeholder="Contraseña">
		<img src="img/registro/password.svg" class="menu_icono">
	</div>

	<input type="submit" class="btn" name="login" value="enviar">

</form>

<div class="cortina" id="cortina">
		<img src="img/slider_ingreso/cortina.webp" alt=""class="cortina_img">
		<div class="slider_btn slider_btn_right">&#62;</div>
		<div class="slider_btn slider_btn_left">&#60;</div>
</div>

</div>
<script type="text/javascript" src="js/cortina.js"></script>
</body>
</html>