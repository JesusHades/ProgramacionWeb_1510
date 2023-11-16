<?php

//Conexion a la base de datos
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

//Declaracion de variables

$buscarUsuario = "SELECT * FROM usuarios where nombre_usuario = '$ POST[nombre_usuario]'";

$resultado = $conexion -> query($buscarUsuario);
$contar = mysqli_num_rows($resultado);

if($contar == 1) {
    echo'El nombre de usuario ya ha sido ocupado';
    header('Location: ./Formulario.php');
} else {
    mysqli_query($conexion, "INSERT INTO usuarios (
    nombre,
    direccion,
    telefono,
    correo,
    nombre_usuario,
    password)
        VALUES(
    '$_POST[usuario]',
    '$_POST[direccion]',
    '$_POST[telefono]',
    '$_POST[correo]',
    '$_POST[nombre_usuario]',
    '$_POST[password]'        
    )");

echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
echo "<h4>" . "Bienvenido: " . $_POST['usuario'] . "</h4>" . "\n\n";
echo "<h5>" . "<a href='./form_registro.php'>Registro</a>" . "</h5>";
}

?>