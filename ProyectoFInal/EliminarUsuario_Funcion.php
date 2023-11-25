<?php

require "conexion.php";
mysqli_set_charset($conexion,'utf8');

$registroEliminado =$_POST['num_cuenta'];
$consulta="DELETE FROM usuarios WHERE num_cuenta = ";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);

?>