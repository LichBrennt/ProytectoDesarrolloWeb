<?php 
	session_start();
	
	if (isset($_SESSION['usuario'])) {
		$verificarsesion=$_SESSION['usuario'];
	}else{
		$verificarsesion=null;
	}
	
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hotel Solency |	Home</title>
	<!-- CSS personalizado -->
	<link rel="stylesheet" href="css/main.css">
	<!-- Fav Icon -->
	<link rel="icon" href="images/icons/fav-icon.svg">
	<!-- Material Design For Bootstrap -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<!-- NavBar -->
	<nav class="navbar navbar-expand-lg navbar-dark elegant-color">
	  <a class="col-1 navbar-brand text-center" href="index.php"><img src="images/icons/copa-de-vino.svg" alt="logo" width="50%"></a>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Inicio
	          <span class="sr-only">(current)</span>
	        </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="habitaciones.php">Habitaciones</a>
	      </li>
	    </ul>

	    <?php 
	    	if ($verificarsesion==null || $verificarsesion=='') {
	    ?>
	    <a class="btn btn-sm align-middle btn-outline-white" href="login.php">LOGIN</a>
	    <a class="btn btn-sm align-middle btn-outline-white" href="signup.php">SIGN UP</a>
	    <?php
	    	}else{
	     ?>
	     <ul class="navbar-nav">
	     	<li class="nav-item dropdown">
	     	    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
	     	      aria-haspopup="true" aria-expanded="false">
	     	     <img src="images/icons/user.svg" width="20px" alt="user image">
	     	    </a>
	     	    <div class="dropdown-menu dropdown-menu-right dropdown-default"
	     	      aria-labelledby="navbarDropdownMenuLink-333">
	     	      <a class="dropdown-item" href="#">Reservas</a>
	     	      <a class="dropdown-item" href="scripts/logout.php">Cerrar sesion</a>
	     	    </div>
	     	  </li>	
	     </ul>		
	     <?php
			}
		  ?>
	    
		</div>
	</nav>
	<!-- EndNavBar -->

	<section class="img_login">
		<!-- Default form login -->
		<div class="container py-5">
			<div class="row">
				<div class="col-6">
					<form class="text-center border border-light p-5 blue-grey lighten-5" action="scripts/login.php" method="POST">

						<?php 
							if (isset($_GET['error'])) {
						?>
							<div class="alert alert-danger" role="alert">
							 <?php echo $_GET['error']; ?>
							</div>
						<?php
							}
						 ?>


					    <p class="h4 mb-4">INICIAR SESION</p>
					    <h7>Suspendisse lacus nulla, tincidunt ultrices eleifend id, blandit quis mi.</h7><br><br><br>

					    <!-- Email -->
					    <input type="email" name="correo" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail*">

					    <!-- Password -->
					    <input type="password" name="numDocumento" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Numero de Documento*">

					    <!-- Register -->
					    <p>¿Todavía no tiene una cuenta?
					        <a href="signup.php">Registrese</a>
					    </p>
					    <!-- Sign in button -->
					    <button class="btn btn-elegant	btn-block my-4" type="submit">Siguiente</button> 
					</form>
				</div>
				<div class="col-6"></div>
			</div>
			</div>
		<!-- Default form login -->		
	</section>	


	
	<!-- Footer -->
	<footer class="page-footer font-small elegant-color">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 py-3 text-center">
	        	<img class="py-3" src="images/icons/copa-de-vino.svg" alt="logo" width="5%">
	        	<h4>HOTEL SOLENCY</h4>
	      </div>
	    </div>
	  </div>
	  <!-- Copyright -->
	  <div class="container text-center">
	  	<div class="row">
	  		<div class="linea_footer"></div>
	  		<div class="col-6 text-center my-5">
	  			<div class="icons_footer">
	  			  <!-- Facebook -->
	  			  <a href="#">
	  			    <img src="images/icons/gorjeo.svg" alt="twitter">
	  			  </a>
	  			  <!-- Twitter -->
	  			  <a href="#">
	  			    <img src="images/icons/facebook.svg" alt="facebook">
	  			  </a>
	  			  <!--Linkedin -->
	  			  <a href="#">
	  			    <img src="images/icons/instagram.svg" alt="instagram">
	  			  </a>
	  			  <!--Instagram-->
	  			  <a href="#">
	  			    <img src="images/icons/youtube.svg" alt="youtube">
	  			  </a>
	  			</div>
	  		</div>
	  		<div class="col-6 my-5">
	  			<p>Solency, Bogotá. Copyrigth © 2020</p>
	  		</div>
	  	</div>
	  </div>
	  <!-- Copyright -->
	</footer>
	<!-- Footer -->


	<!-- JS personalizado -->
	<script type="text/javascript" src="js/main.js"></script>
	<!-- Material Design For Bootstrap -->
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>