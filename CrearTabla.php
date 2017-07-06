<?php
include("ConexionMySQL.php");

$NombreTabla="Usuario";
$NumDisp=4;
$consulta=mysqli_query($conexion,"CREATE TABLE `Domotica`.$NombreTabla ( `ID` INT(10) NOT NULL AUTO_INCREMENT , `NOMBRE` VARCHAR(10) NOT NULL , `ASIGNADO` VARCHAR(10) NOT NULL , `ESTADO` INT(1) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB") or die("Problemas en consulta: ");
for ($i = 1; $i <= $NumDisp; $i++) {
mysqli_query($conexion,"INSERT INTO $NombreTabla (NOMBRE,ASIGNADO,ESTADO) VALUES('','NO',0)");
}
//mysqli_free_result($consulta);
mysqli_close($conexion);
?>
