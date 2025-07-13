<!DOCTYPE html>
<html>
<head>
	<title>Total Tools Ve</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="head">
		
		<div class="logo">
			<a href="index.php"><img src="img/total.png" class="imglogo"></a>
		</div>
		<nav class="navbar">
			<a href="ingreso.php">login/registro</a>
			<a href="../TotalMaster/index.php">Master</a>
			<a href="#">Productos</a>
			<a href="#">Precio</a>
		</nav>

	</div>

	<div class="container_slider">
		<div class="slider" id="slider">
			<div class="slider_section">
                <img src="img/slider/destornilladores.png" class="slider_img">
            </div>
            <div class="slider_section">
                <img src="img/slider/llaves.png"class="slider_img">
            </div> 
            <div class="slider_section">
                <img src="img/slider/sierra.png" class="slider_img">
            </div>
            <div class="slider_section">
                <img src="img/slider/soldadora.png" class="slider_img">
            </div>
             <div class="slider_section">
                <img src="img/slider/esmeril.png" class="slider_img">
            </div>
		</div>
		<div class="slider_btn slider_btn_right">&#62;</div>
		<div class="slider_btn slider_btn_left">&#60;</div>
	</div>

	<section class="content saw">
		<h2 class="title">Productos</h2>

		<div class="box-container">
			<div class="box">
				<h3>Electricidad</h3>
				<img src="img/destornilladores.png" class="cat_img">
			</div>
			<div class="box">
				<h3>Herrería</h3>
				<img src="img/soldadora.png" class="cat_img">
			</div>
			<div class="box">
				<h3>Mecánica</h3>
				<img src="img/llaves.png" class="cat_img">
			</div>
			<div class="box">
				<h3>Carpinteria</h3>
				<img src="img/sierra.png" class="cat_img">
			</div>

		</div>

	</section>

	<section class="content about">
		<h2 class="title">Nosotros</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<a href="#" class="btn">Saber mas</a>
		
	</section>

	<section class="content price">
		<article class="contain">
			<h2 class="title">Precio</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="#" class="btn">Saber precio</a>
		</article>
	</section>
	<section class="content contact">
		<h2 class="title">Contacto</h2>
		<p>12456789</p>
		<figure class="map">
			<img src="img/mapa.png" height="220px" width="100%" alt="Mapa">
		</figure>
	</section>
	<script type="text/javascript" src="js/slider.js"></script>
</body>
</html>