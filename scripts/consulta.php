<?php 
require_once "conexiondb.php";
require_once "../consulta.html";
$documento=$_POST["buscar"];
$consulta="SELECT usuario.Nombres, usuario.NumeroDeDocumento, reservacion.TipoDeHabitacion, reservacion.CantidadDePersonas, reservacion.FechaInicio, reservacion.FechaFinal	FROM usuario JOIN reservacion ON usuario.id= reservacion.Usuario WHERE usuario.NumeroDeDocumento='$documento';";
if ($resultado=mysqli_query($conexion, $consulta)) {
	while ($row=mysqli_fetch_assoc($resultado)) {
?>
<p>Nombres:  <?php echo $row["Nombres"] ?></p>
<p>Numero De Documento:  <?php echo $row["NumeroDeDocumento"] ?></p>
<p>Tipo De Habitacion:  <?php echo $row["TipoDeHabitacion"] ?></p>
<p>Cantidad De Personas:  <?php echo $row["CantidadDePersonas"] ?></p>
<p>Fecha de Inicio:  <?php echo $row["FechaInicio"] ?></p>
<p>Fecha de Fin:  <?php echo $row["FechaFinal"] ?></p>
<?php
}

}
else{echo mysqli_error($conexion);
}
 ?>
