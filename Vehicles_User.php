<?php
session_start();
include("ConexionMySQL.php");

$consulta=mysqli_query($conexion,"CREATE TABLE `Domotica`.`usuario` ( `ID` INT(10) NOT NULL AUTO_INCREMENT , `NOMBRE` VARCHAR(10) NOT NULL , `ASIGNADO` VARCHAR(10) NOT NULL , `ESTADO` INT(1) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB") or die("Problemas en consulta: ");

mysqli_free_result($consulta);
mysqli_close($conexion);


?>
