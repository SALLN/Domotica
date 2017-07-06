<?php
include("ConexionMySQL.php");

$NombreTabla="Usuario";
$PuertoDisp=4;
$NomDisp="Primer Dispositivo";
mysqli_query($conexion,"UPDATE $NombreTabla SET NOMBRE = '$NomDisp', ASIGNADO = 'OK', ESTADO = '0' WHERE $NombreTabla.ID = $PuertoDisp");
mysqli_close($conexion);
?>
