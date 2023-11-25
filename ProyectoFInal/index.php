<?php

require "conexion.php";
mysqli_set_charset($conexion,'utf8');


//genear el query
$consulta_sql="SELECT * FROM usuario";


//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);


// Retorna el numero de filas del resultado.
$count = mysqli_num_rows($resultado);


echo "<table border = '2'>

    <tr>
    
        <th>ID</th>
        <th>Nombre</th>
        <th>No de Cuenta</th>
        <th>Usuario</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>
    
    </tr>";









</table>











?>