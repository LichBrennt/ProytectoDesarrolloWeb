<?php 
	require_once 'conexiondb.php';

	$correo=$_POST['correo'];
	$numDocumento=$_POST['numDocumento'];

	$verificar="SELECT * FROM usuario WHERE NumeroDeDocumento = $numDocumento and Correo = '$correo'";

	if ($resultado=mysqli_query($conexion,$verificar)) {
		$row=mysqli_fetch_assoc($resultado);
	}else{
		$row=null;
	}

	if ($row>0) {
		$usuario=$row['Nombres'];
		$apellido=$row['Apellidos'];
		$tipoDocumento=$row['TipoDeDocumento'];
		$numDocumento=$row['NumeroDeDocumento'];
		$correo=$row['Correo'];
		$telefono=$row['Telefono'];
		$idusuario=$row['id'];
		session_start();
		$_SESSION['usuario']=$usuario;
		$_SESSION['apellido']=$apellido;
		$_SESSION['tipoDocumento']=$tipoDocumento;
		$_SESSION['numDocumento']=$numDocumento;
		$_SESSION['correo']=$correo;
		$_SESSION['telefono']=$telefono;
		$_SESSION['id']=$idusuario;
		header('Location:../index.php');
	} else{
		header('Location:../login.php?error=Correo y/o documento incorrecto');	
	}

 ?>	
