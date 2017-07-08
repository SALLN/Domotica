<?php
include("ConexionMySQL.php");

//$NombreTabla=$_POST['Usuario'];
//$PuertoDisp=$_POST['PuertoDisp'];
//$NombreDisp=$_POST['NombreDisp'];
$NombreTabla="Usuario";
$PuertoDisp=4;
$NombreDisp="Lo que sea";
mysqli_query($conexion,"UPDATE $NombreTabla SET NOMBRE = '$NombreDisp', ASIGNADO = 'OK', ESTADO = '0' WHERE $NombreTabla.ID = $PuertoDisp") or die("Problemas en consulta: ".mysqli_error($conexion));
mysqli_close($conexion);
?>
