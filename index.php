<!DOCTYPE html>
<html lang="en">
 
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="Index">
	<meta name="description" content="Bienvenidos a Mis Lindas Chacharas, somos una empresa dedicada a la venta de productos de belleza como maquillaje, mascarillas, cremas, al igual que ropa para dama, accesorios de uso diario, productos de oficina, bisuteria, entre otros">
	<meta name="keywords" content="lindas,chacharas,venta,ropa,maquillaje,mascarillas,accesorios">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="css/styles-icons.css">
	<link rel="stylesheet" href="css/styles-index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="icon" href="img/Logo.ico" type="image/png" alt="icon"/>
	<script src="js/NavarResponsive.js"></script>
	<title>PUFFULIZ</title>
</head>
<body>
<header class="navbar navbar-expand-lg navbar-whithe texto-blanco" style="background-color: black;">
    <div class="container">
        <img src="img/Logo.jpg" style="height: 100px; width: 100px; margin-top: 0px; margin-right: 20px;" title="imglogo" alt="logo">
        <a href="index.php" class="navbar-brand" title="index" style="color: white;">
            <strong style="margin-right: 30px;" style="color: white;">PUFFULIZ</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
            aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarHeader">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" >
                    <a href="Catalogo.php" class="nav-link" style="color: white;" title="Catalogo">Catalogo</a>
                </li>
                
                <li class="nav-item">
                    <a href="PreguntasFrecuentes.html" class="nav-link" style="color: white;" title="Preguntas Frecuentes">Preguntas Frecuentes</a>
                </li>
				<?php
                session_start();
                if (isset($_SESSION["nombre_usuario"])) {
                    echo '<ul class="navbar-nav mb-2 mb-lg-0">';
                    echo '<li class="nav-item"><a class="nav-link" style="color: white;">' . $_SESSION["nombre_usuario"] . '</a></li>';
                    echo '<li class="nav-item"><a href="logout.php" class="nav-link" style="color: white;">Cerrar Sesión</a></li>';
                    echo '</ul>';
                } else {
                    echo '<ul class="navbar-nav mb-2 mb-lg-0">';
                    echo '<li class="nav-item"><a href="login.php" class="nav-link" title="Iniciar Sesión" style="color: white;">Iniciar Sesión</a></li>';
                    echo '</ul>';
                }
            ?>
            </ul>
            
        </div>
    </div>
</header>
	<!--Carrusel-->
	<div class=" slider bg-light carru-font carrusel">
		<div class="col">
			<div class="carousel slide" id="slider" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
					<li data-target="#slider" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner ">
					<br>
					<h3 class="text-center">Comodidad y estilo en un solo lugar: descubre nuestra tienda en línea hoy mismo</h3>
					<h4 class="text-center">Lo más nuevo</h4>

					<div class="carousel-item active">
						<img src="img/img1.jpg" title="vasos" alt="Slide #1" class="d-block imgCarru ">
					</div>
					<div class="carousel-item">
						<img src="img/img3.jpg"title="vasos" alt="Slide #2" class="d-block imgCarru">
					</div>
					<div class="carousel-item">
						<img src="img/img4.jpg" title="vasos" title="falda" class="d-block imgCarru">
					</div>
					<div class="carousel-item">
						<img src="img/img5.jpg" title="vasos" title="vestido" class="d-block imgCarru">
					</div>
				</div>
				<a href="#slider" class="carousel-control-prev bg-light" data-slide="prev" title="Carrusel">
				</a>
				<a href="#slider" class="carousel-control-next" data-slide="next" title="Carruselnext">
				</a>
			</div>
		</div>
	</div>
	</div>
	</div>

	<div class="py-5 bg-light border-top">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-4">
					<div class="card mb-4 ">
						<img src="img/Aretes de panda.png" style="padding-top: 15px;" title="pandas" alt="imgpanda" class="cardimg">
						<div class="card-body">
							<ul class="list-unstyled text-left">
								<li>
									<p class="card-text">Realza tu estilo con nuestros hermosos aretes. Añade un toque
										de elegancia y brillo a cualquier atuendo.</p>
								<li><a href="#" title="referencia"><span class="text-success">Ver descuentos del 5%</span></a></li>
							</ul>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="Aretes.html" title="aretes"><button
											class="btn btn-sm btn-outline-secondary">Ir</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4">
					<div class="card mb-4 ">
						<img src="img/Pantalon gris.jpeg" style="padding-top: 15px;" title="imgpantalon" alt="pantalon" class="cardimg">
						<div class="card-body">
							<ul class="list-unstyled text-left">
								<li>
									<p class="card-text">Viste con estilo y comodidad. Encuentra tu look perfecto hoy
										mismo.</p>
								<li><a href="#" title="ref"><span class="text-success">Ver descuentos del 10%</span></a></li>
							</ul>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="Ropa.html" title="ropa"><button class="btn btn-sm btn-outline-secondary">Ir</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4">
					<div class="card mb-4 ">
						<img src="img/Crema.jpeg" style="padding-top: 15px;" title="cremaparamanos" alt="imcrema" class="cardimg">
						<div class="card-body">
							<ul class="list-unstyled text-left">
								<li>
									<p class="card-text">Cuida tu cuerpo y mente con nuestros productos de cuidado
										personal. ¡Siéntete bien y brilla con confianza!</p>
								<li><a href="#" title="ref"><span class="text-success">Ver descuentos del 5%</span></a></li>
							</ul>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="Cuidado Personal.html" title="cuidadopersonal"><button
											class="btn btn-sm btn-outline-secondary">Ir</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4">
					<div class="card mb-4 ">
						<img src="img/Collar de cadena.png" style="padding-top: 40px;" title="cadena" alt="cadena" class="cardimg">
						<div class="card-body">
							<ul class="list-unstyled text-left">
								<li>
									<p class="card-text">Resalta tu estilo con nuestros hermosos collares. ¡Explora y
										sorpréndete!</p>
								<li><a href="#" title="ref"><span class="text-success">Ver descuentos del 40%</span></a></li>
							</ul>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="Collares.html" title="collares"><button
											class="btn btn-sm btn-outline-secondary">Ir</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="aviso-cookies " id="aviso-cookies"  >
			<h3 class="titulo">Cookies</h3>
			<p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
			<button class="boton" id="btn-aceptar-cookies" style="background-color: rgb(133, 71, 122);" >De acuerdo</button>
			<a class="enlace" href="aviso-cookies.html" title="cookies">Aviso de Cookies</a>
		</div>
		<div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

		<!--Footer-->
		<footer class="container-fluid py-5 my-5 border-top" style="background-color: black;">
			<div class="row justify-content-center">
			  <div class="col-12 col-md-3 order-2 order-md-1 text-center">
				<small class="d-block text-light">© 2022-2024 PUFFULIZ</small>
			  </div>
			  <div class="col-6 col-md-3 order-1 order-md-2 text-center">
				<h5 class="text-light">Características</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted-light" style="color: white;">Buenos </a></li>
					<li><a class="text-muted-light" style="color: white;">Bonitos</a></li>
					<li><a class="text-muted-light" style="color: white;">Baratos</a></li>
					<li><a class="text-muted-light" style="color: white;">Disponibles</a></li>
					
				</ul>
			  </div>
			  <div class="col-6 col-md-3 order-1 order-md-2 text-center">
				<h5 class="text-light">Contactanos</h5>
				<ul class="list-unstyled text-small">
				  <li><a href="https://www.facebook.com/PuffuLiz?mibextid=ZbWKwL" class="text-light" title="facebook">Facebook</a></li>
				</ul>
			  </div>
			</div>
		  </footer>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="Productos.json"></script>
		<script src="js/aviso-cookies.js"></script>
</body>

</html>