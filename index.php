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

	<!-- first content -->
	<div id="change_img" class="img_ini">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="title_p">
						<h3>HOTEL SOLENCY</h3>
						<h1>BOGOTÁ</h1>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End first content -->

	<!-- About US -->
	<section>
		<div class="container my-5 text-center">
			<div class="row my-5">
				<div class="col-12 my-5 about_us">
					<h3 class="title-2">Avenida Falsa 123, Bogotá, Colombia.</h3>
					<p><a href="#">+ 57 320 345 0023</a> <a href="#">INDICACIONES PARA LLEGAR</a></p>
					<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Aliquam, quaerat non, saepe quod asperiores ducimus eos. Eligendi animi expedita quia quasi facere, unde, accusamus dolores commodi vitae velit ut corrupti?
					Cupiditate dolores nesciunt beatae expedita voluptates eaque nihil autem! Nesciunt natus distinctio magnam cumque fugiat, animi fugit nulla omnis exercitationem culpa tenetur, eos vel obcaecati inventore quas debitis repellat quae.
					Ipsam sequi perspiciatis similique commodi incidunt, suscipit esse sint quam fuga voluptatum non quae corporis! Fuga, officia, in dolorum, laudantium illo cumque molestias eveniet aliquid adipisci labore sit ea quasi?
					Sed, commodi. Accusamus, cupiditate ut rerum quia quibusdam veritatis impedit vel placeat sequi laborum pariatur, nisi, ipsa asperiores laboriosam dolor provident soluta minus culpa ex libero deleniti et enim recusandae.
					Tenetur repellat odio ea, adipisci, quaerat exercitationem incidunt ut debitis voluptas numquam, quos ipsam distinctio dolorem natus dolor! Reprehenderit corporis eaque, numquam qui nam odit molestias consectetur nostrum, officia amet.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end About US  -->

	<!-- habitaciones -->
	<section class="border-top border-dark stylish-color">
		<div class="container py-5">
			<div class="row">
				<div class="col-12 text-center py-3">
					<h3 class="text-white">ALOJAMIENTO</h3>
				</div>
				<div id="carouselRooms" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselRooms" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselRooms" data-slide-to="1"></li>
				    <li data-target="#carouselRooms" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="images/rooms/room-1.jpg" alt="Guest room">
				      <div class="carousel-caption d-none d-md-block">
				      	<h5>GUEST ROOM</h5>
				      	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, distinctio aperiam, dicta qui dolor deleniti id debitis.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="images/rooms/room-2.jpg" alt="Premium room">
				      <a>
				        <div class="mask img-gradient"></div>
				       </a>
				      <div class="carousel-caption d-none d-md-block">
				      	<h5>PREMIUM ROOM</h5>
				      	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, distinctio aperiam, dicta qui dolor deleniti id debitis.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="images/rooms/room-3.jpg" alt="Suite">
				      <div class="carousel-caption d-none d-md-block text-carousel">
				      	<h5>SUIT</h5>
				      	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, distinctio aperiam, dicta qui dolor deleniti id debitis.</p>
				      </div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselRooms" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselRooms" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</section>
	<!-- end habitaciones -->


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

	<script>
	let n = 0;
	let main_img = document.getElementById('change_img')
	let ph = 1;	
		window.setInterval(function(){
	if (n==1) {
		switch(ph){
			case 1:
				n=0;
				ph=2;
				main_img.style.backgroundImage ='url("./images/rooms/back_'+ph+'.JPG")';
				break;
			case 2:
				n=0;
				ph=3;
				main_img.style.backgroundImage ='url("./images/rooms/back_'+ph+'.JPG")';
				break;
			case 3:
				n=0;
				ph=4;
				main_img.style.backgroundImage ='url("./images/rooms/back_'+ph+'.JPG")';
				break;
			case 4:
				n=0;
				ph=1;
				main_img.style.backgroundImage ='url("./images/rooms/back_'+ph+'.JPG")';
				break;
		}
	}
  	n++;
},2500);
	</script>
</body>
</html>