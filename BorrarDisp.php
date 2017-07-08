<?php
include("ConexionMySQL.php");

$NombreTabla="Usuario";
$PuertoDisp=4;
mysqli_query($conexion,"UPDATE $NombreTabla SET  ASIGNADO = 'NO' WHERE $NombreTabla.ID = $PuertoDisp") or die("ERROR: ".mysqli_error($conexion));

mysqli_close($conexion);
?>
