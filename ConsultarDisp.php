<?php
include("ConexionMySQL.php");

//$NombreTabla=$_POST['Usuario'];
$NombreTabla="Usuario";

$consulta=mysqli_query($conexion,"SELECT ID FROM $NombreTabla WHERE  ASIGNADO = 'NO'") or die("ERROR: ".mysqli_error($conexion));
while($reg=mysql_fetch_array($consulta)){
	echo $reg['ID'];
}
mysqli_close($conexion);
?>
