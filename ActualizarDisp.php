<?php
include("ConexionMySQL.php");

$EstadoDisp=$_POST['Estado'];
$PuertoDisp=$_POST['PuertoDisp'];
$NombreTabla=$_POST['Usuario'];

mysqli_query($conexion,"UPDATE $NombreTabla SET ESTADO = '$EstadoDisp' WHERE $NombreTabla.ID = $PuertoDisp") or die("ERROR: ".mysqli_error($conexion));
mysqli_close($conexion);
?>
