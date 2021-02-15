<?php
// Importar la conexion a la base de datos
require_once "conexiondb.php";
// Guardar los datos de usuario recibidos
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$tipoDocumento=$_POST["tipoDocumento"];
$numDocumento=$_POST["numDocumento"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
// Guardamos la query de una consulta en una variable
$insertar="INSERT INTO usuario VALUES(NULL,'".$nombre."','".$apellido."','".$tipoDocumento."','".$numDocumento."','".$correo."','".$telefono."');";
// Se verifica que la sentencia sea correcta
if ($resultado=mysqli_query($conexion,$insertar)) {
	echo '<script language="javascript">';
    echo 'alert("Registro de usuario realizado con exito"); window.location.href="../index.php"';
    echo '</script>';

}	else {
	header("Location:../signup.php?error=Error al registrar usuario, intente de nuevo mas tarde");
}


 ?>