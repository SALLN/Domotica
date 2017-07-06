<?php
include("ConexionMySQL.php");

$NombreTabla=$_POST['NombreTabla'];
$PuertoDisp=$_POST['PuertoDisp'];
$NombreDisp=$_POST['NombreDisp'];
mysqli_query($conexion,"UPDATE $NombreTabla SET NOMBRE = '$NombreDisp', ASIGNADO = 'OK', ESTADO = '0' WHERE $NombreTabla.ID = $PuertoDisp");
mysqli_close($conexion);
?>
