<?php

//Conexion a la base de datos
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

//Declaracion de variables

$buscarUsuario = "SELECT * FROM usuarios where nombre_usuario = '$_POST[nombre_usuario]'";

$resultado = $conexion -> query($buscarUsuario);
$contar = mysqli_num_rows($resultado);

if($contar == 1) {
    echo'El nombre de usuario ya ha sido ocupado';
    header('Location: ./Formulario.php');
} else {
    mysqli_query($conexion, "INSERT INTO usuarios (
    nombre,
    num_cuenta,
    nombre_usuario,
    direccion,
    telefono,
    correo)
        VALUES(
    '$_POST[nombre]',
    '$_POST[num_cuenta]',
    '$_POST[nombre_usuario]',
    '$_POST[direccion]',
    '$_POST[telefono]',
    '$_POST[correo]'      
    )");

echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
echo "<h4>" . "Bienvenido: " . $_POST['nombre'] . "</h4>" . "\n\n";
echo "<h5>" . "<a href='./Formulario.php'>Registro</a>" . "</h5>";
}

?>