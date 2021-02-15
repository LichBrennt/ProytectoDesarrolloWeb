<?php
// Importar la conexion a la base de datos
require_once "conexiondb.php";
// Guardar los datos de la reserva
$tipoHabitacion=$_POST["tipoHabitacion"];
$cantidadPersonas=$_POST["cantidadPersonas"];
$fechaInicio=$_POST["fechaInicio"];
$fechaFinal=$_POST["fechaFinal"];
$costo=$_POST["costo"];
$id_user=$_POST["id_user"];
// Guardamos la query de una consulta en una variable
$insertar="INSERT INTO reservacion VALUES(NULL,$id_user,'$tipoHabitacion','$cantidadPersonas','$fechaInicio','$fechaFinal','$costo');";
// Se verifica que la sentencia sea correcta
if ($resultado=mysqli_query($conexion,$insertar)) {
	echo '<script language="javascript">';
    echo 'alert("Reserva realizada con exito"); window.location.href="../index.php";';
    echo '</script>';
 	header ('./index.php');

}	else {echo "Error al realizar la reserva".mysqli_error($conexion);}


 ?>