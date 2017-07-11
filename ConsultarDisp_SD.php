<?php
include("ConexionMySQL.php");

$NombreTabla=$_POST['Usuario'];
//$NombreTabla="Usuario";
$Nombre="";
$Estado="";
$ID="";

$consulta=mysqli_query($conexion,"SELECT ID,NOMBRE,ESTADO FROM $NombreTabla WHERE  ASIGNADO = 'OK'") or die("ERROR: ".mysqli_error($conexion));
while($reg=mysqli_fetch_array($consulta)){
	$ID.$reg['ID']."-";
	$Nombre.$reg['NOMBRE']."-";
	$Estado.$reg['ESTADO']."-";
}
echo $ID."&".$Nombre."&".$Estado;
mysqli_close($conexion);
?>
