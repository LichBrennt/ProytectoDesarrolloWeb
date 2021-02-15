<?php 
	session_start();
	
	if (isset($_SESSION['usuario'])) {
		$verificarsesion=$_SESSION['usuario'];
	}else{
		$verificarsesion=null;
		header('Location:login.php?error=Por favor inicie sesion o registrese');
	}

	require_once 'scripts/conexiondb.php';
	$conexion->set_charset("utf8");
	$id_room = $_GET['id_room'];
	$consulta = "SELECT * FROM habitaciones WHERE id=$id_room";
	$resultado = mysqli_query($conexion,$consulta);
	$row = mysqli_fetch_assoc($resultado);
	if ($row>0) {
		$tipoRoom = $row['tipo'];
		$camasRoom = $row['camas'];
		$perRoom = $row['personas'];
		$valRoom = $row['precio'];
		$admRoom = $row['administracion'];
		$desRoom = $row['descripcion'];
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
	      <li class="nav-item">
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
	     	      <span class="mx-2"><?php echo $_SESSION['usuario']; ?></span>
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

	<section>
		
		<div class="container">
			<div class="row">
				<div class="col-4 my-5">
					<div class="jumbotron">
					  <h3>Tú reservación</h3>
					  <p class="lead">Bogotá</p>
					  <p id="room" class="lead"><?php echo $tipoRoom ?></p>
					  <p class="lead"><span id="beds"><?php echo $camasRoom ?></span> - Cama(s)  <span id="numPerson"><?php echo $perRoom ?></span> - Persona(s)</p>
					  <hr class="my-4">
					  <p class="lead">Tú habitación</p>
					  <p>Detalles</p>
					  <p id="desRoom"><?php echo $desRoom ?></p>
					  <p>Sub-total:<span id="valNoche" class="float-right"><?php echo $valRoom ?></span></p>
					  <p>Noches:<span id="cantNoche" class="float-right">1</span></p>
					  <p>Administración:<span id="valAdmin" class="float-right"><?php echo $admRoom ?></span></p>
					  <p class="lead">TOTAL:<span id="Total" class="float-right"><?php echo $admRoom+$valRoom ?></span></p>
					</div>
				</div>
				<div class="col-8 my-5">
					


                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">PARA MÍ</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">PARA ALGUIEN MÁS</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="container">
                      	<!-- FORM FOR MYSELF -->
                      	<div class="row my-4">
	                      	<div class="col-12">
	                      		<!-- Default form register -->
	                      		<form class="text-center p-5" action="scripts/reserva.php" method="POST">
	                      			<input type="hidden" name="id_user" id="id_user" value="<?php echo $_SESSION['id'] ?>">
	                      			<input type="hidden" id="tipoHabitacion" name="tipoHabitacion" value="<?php echo $tipoRoom ?>">
	                      			<input type="hidden" name="cantidadPersonas" id="cantidadPersonas" value="<?php echo $perRoom ?>">
	                      			<input type="hidden" name="costo" id="costo">
	                      		    <p class="h4 mb-4">Detalles personales</p>
	                      		    <hr class="border-bottom border-dark">
	                      		    <div class="form-row mb-4">
	                      		        <div class="col">
	                      		            <!-- First name -->
	                      		            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombres*">
	                      		        </div>
	                      		        <div class="col">
	                      		            <!-- Last name -->
	                      		            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellidos*">
	                      		        </div>
	                      		    </div>
	                      		    <!-- check in -->
	                      		    <label class="float-left" for="fechaInicio">Check In</label>
	                      		    <input type="date" name="fechaInicio" id="fecha" class="form-control mb-4 fechaInicio" >


	                      		    <!-- check out -->
	                      		    <label class="float-left" for="fechaFinal">Check In</label>
	                      		    <input type="date" name="fechaFinal" id="fecha" class="form-control mb-4 fechaFinal" >

	                      		    <!-- Phone number -->
	                      		    <input type="text" id="defaultRegisterPhonePassword" class="mb-4 form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">


	                      		    <!-- E-mail -->
	                      		    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

	                      		    <p class="h4 mb-4">Detalles Tarjeta de Credito</p>
	                      		    <hr class="border-bottom border-dark">

	                      		    <!-- name on card-->
	                      		    <input type="text" id="defaultRegisterFormFirstName" class="mb-4 form-control" placeholder="Nombre en la tarjeta*">

	                      		    <!-- First name -->
	                      		    <input type="text" id="defaultRegisterFormFirstName" class="mb-4 form-control" placeholder="Numero de la tajeta*">


	                      		    <div class="form-row mb-4">
	                      		    	<div class="col-6">
	                      		    	    <!-- CVV -->
	                      		    	    <label class="float-left" for="Mestarjeta">Fecha de expiracion de tarjeta</label>
	                      		    	</div>
	                      		        <div class="col-3">
	                      		            <!-- First name -->
	                      		            <input type="text" name="Mestarjeta" id="defaultRegisterFormFirstName" class="form-control" placeholder="MES*">
	                      		        </div>
	                      		        <div class="col-3">
	                      		            <!-- Last name -->
	                      		            <input type="text" name="Mestarjeta" id="defaultRegisterFormFirstName" class="form-control" placeholder="AÑO*">
	                      		        </div>
	                      		    </div>


	                      		    <!-- Sign up button -->
	                      		    <button class="btn btn-elegant my-5 btn-block" type="submit">Sign in</button>


	                      		    <hr>

	                      		</form>
	                      		<!-- Default form register -->
	                      	</div>
	                     </div>
                      	<!-- END FORM FOR MYSELF-->
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="container">
                      	<!-- FORM FOR SOMEONE ELSE -->
                      	<div class="row my-4">
	                      	<div class="col-12">
	                      		<!-- Default form register -->
	                      		<form class="text-center p-5" action="scripts/reserva.php" method="POST">
	                      			<input type="hidden" name="id_user" id="id_user" value="<?php echo $_SESSION['id'] ?>">
	                      			<input type="hidden" id="tipoHabitacion" name="tipoHabitacion" value="<?php echo $tipoRoom ?>">
	                      			<input type="hidden" name="cantidadPersonas" id="cantidadPersonas" value="<?php echo $perRoom ?>">

	                      			<input type="hidden" name="costo" id="costo">
	                      		    



	                      			<p class="h4 mb-4">Detalles hospedado</p>
	                      			<hr class="border-bottom border-dark">
	                      			<div class="form-row mb-4">
	                      			    <div class="col">
	                      			        <!-- First name -->
	                      			        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombres*">
	                      			    </div>
	                      			    <div class="col">
	                      			        <!-- Last name -->
	                      			        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellidos*">
	                      			    </div>
	                      			</div>

	                      			<select class="browser-default custom-select mb-4" name="tipoDocumento" required>
	                      			  <option selected>Tipo de documento</option>
	                      			  <option value="C.C">Cedula de Ciudanania</option>
	                      			  <option value="C.E">Cedula de Extranjeria</option>
	                      			  <option value="PAS">Pasaporte</option>
	                      			</select>
	                      			
	                      			<input type="text" name="documentoGuest" id="fecha" class="form-control mb-5 fechaFinal" placeholder="Numero de documento*">

	                      		    <p class="h4 mb-4">Detalles personales</p>
	                      		    <hr class="border-bottom border-dark">
	                      		    <div class="form-row mb-4">
	                      		        <div class="col">
	                      		            <!-- First name -->
	                      		            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombres*">
	                      		        </div>
	                      		        <div class="col">
	                      		            <!-- Last name -->
	                      		            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellidos*">
	                      		        </div>
	                      		    </div>
	                      		    <!-- check in -->
	                      		    <label class="float-left" for="fechaInicio">Check In</label>
	                      		    <input type="date" name="fechaInicio" id="fecha" class="form-control mb-4 fechaInicio" >


	                      		    <!-- check out -->
	                      		    <label class="float-left" for="fechaFinal">Check In</label>
	                      		    <input type="date" name="fechaFinal" id="fecha" class="form-control mb-4 fechaFinal">

	                      		    <!-- Phone number -->
	                      		    <input type="text" id="defaultRegisterPhonePassword" class="mb-4 form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">


	                      		    <!-- E-mail -->
	                      		    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

	                      		    <p class="h4 mb-4">Detalles Tarjeta de Credito</p>
	                      		    <hr class="border-bottom border-dark">

	                      		    <!-- name on card-->
	                      		    <input type="text" id="defaultRegisterFormFirstName" class="mb-4 form-control" placeholder="Nombre en la tarjeta*">

	                      		    <!-- First name -->
	                      		    <input type="text" id="defaultRegisterFormFirstName" class="mb-4 form-control" placeholder="Numero de la tajeta*">


	                      		    <div class="form-row mb-4">
	                      		    	<div class="col-6">
	                      		    	    <!-- CVV -->
	                      		    	    <label class="float-left" for="Mestarjeta">Fecha de expiracion de tarjeta</label>
	                      		    	</div>
	                      		        <div class="col-3">
	                      		            <!-- First name -->
	                      		            <input type="text" name="Mestarjeta" id="defaultRegisterFormFirstName" class="form-control" placeholder="MES*">
	                      		        </div>
	                      		        <div class="col-3">
	                      		            <!-- Last name -->
	                      		            <input type="text" name="Mestarjeta" id="defaultRegisterFormFirstName" class="form-control" placeholder="AÑO*">
	                      		        </div>
	                      		    </div>


	                      		    <!-- Sign up button -->
	                      		    <button class="btn btn-elegant my-5 btn-block" type="submit">Sign in</button>


	                      		    <hr>

	                      		</form>
	                      		<!-- Default form register -->
	                      	</div>	
	                     </div>
                      	<!-- FORM FOR SOMEONE ELSE -->
                      </div>
                    </div>

                  </div>





				</div>
			</div>
		</div>

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

	<!-- Material Design For Bootstrap -->
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
	<!-- JS personalizado -->
	<script type="text/javascript" src="js/main.js" defer></script>
</body>
</html>