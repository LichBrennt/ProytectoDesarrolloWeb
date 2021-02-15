<?php 
// Guardar datos para la conexion con la base de datos
$server="localhost:3306"; 
$usuario="root";
$pass="";
$basededatos="proyectodesarrolloweb";
// Guardar la conexion con la base de datos en una variable
$conexion= new mysqli($server, $usuario, $pass, $basededatos);
// Verificar si la conexion es exitosa
if (!$conexion) {
	die("no se puede conectar a la base de datos".mysqli_connect_error());

}else{
	return true;
}

 ?>