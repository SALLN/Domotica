<?php
    $ticker = "TOMALO DESDE PHP";
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    if($socket === FALSE){        echo 'Creacion del socket fallida.';
    }else{
        $resultado = socket_connect($socket, '190.165.40.66', '55500');
        if($resultado === FALSE){
            echo 'Conexion al socket fallida.';
        }else{
            socket_write($socket, $ticker, strlen($ticker));
            // $precio = socket_read($socket, 1024);
            // echo " $precio";
        }
    }
?>
