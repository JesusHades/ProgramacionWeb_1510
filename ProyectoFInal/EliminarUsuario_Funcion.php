<?php

require "conexion.php";
mysqli_set_charset($conexion,'utf8');

$registroEliminado =$_POST['num_cuenta'];
$consulta="DELETE FROM persona WHERE num_cuenta = ";

?>