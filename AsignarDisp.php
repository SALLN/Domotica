<?php
include("ConexionMySQL.php");

$NombreTabla=$_POST['Usuario'];
$PuertoDisp=$_POST['PuertoDisp'];
$NombreDisp=$_POST['NombreDisp'];
//$NombreTabla="Usuario";
//$PuertoDisp=4;
//$NombreDisp="Lo que sea";
mysqli_query($conexion,"UPDATE $NombreTabla SET NOMBRE = '$NombreDisp', ASIGNADO = 'OK', ESTADO = '0' WHERE ID = $PuertoDisp") or die("ERROR: ".mysqli_error($conexion));
//$consulta=mysqli_query($conexion,"SELECT NOMBRE,ASIGNADO,ESTADO FROM $NombreTabla where ID=$PuertoDisp") or die("ERROR: ".mysqli_error($conexion);
//$reg=mysql_fetch_array($consulta);
//echo $reg['NOMBRE'];
//echo $reg['AISGNADO'];
//echo $reg['ESTADO'];
mysqli_close($conexion);
?>
