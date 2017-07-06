<?php
// session_start();
// include("ConexionMySQL.php");
//
// $consulta=mysql_query("INSERT INTO  Formulas (COEFICIENTES) VALUES (3)");
//
// mysql_free_result($consulta);
// mysql_close($conexion);

/* Abrir un soocket al puerto 1234 en localhost */
$socket = stream_socket_client('tcp://ticollcloud.ddns.net:55056');

/* Enviar información ordinaria mediante canales oridinarios. */
fwrite($socket, "Transmisión de información normal.");

/* Enviar más información fuera de banda. */
stream_socket_sendto($socket, "", STREAM_OOB);


// fclose($socket);

?>
