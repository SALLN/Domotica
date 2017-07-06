<?php
include("ConexionMySQL.php");

$NombreTabla="Usuario";
$PuertoDisp=4;
mysqli_query($conexion,"UPDATE $NombreTabla SET NOMBRE = '', ASIGNADO = 'NO' WHERE $NombreTabla.ID = $PuertoDisp");

mysqli_close($conexion);
?>
