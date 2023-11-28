<?php

$host_db="sql202.infinityfree.com";
$user_db="if0_35173754";
$pass_db="qBrKWjZGEYgOj";
$db_name="if0_35173754_proyecto";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
} else {
    echo"<h2 style='color: greenyellow; text-align: center;'>Hola, tu conexión está funcionando.</h2>";
}


?>