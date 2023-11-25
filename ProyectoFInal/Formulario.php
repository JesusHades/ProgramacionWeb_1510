<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <title>Registrar Usuario</title>
    <meta charset = "utf-8">
</head>

<script>

    function valida(e) {
        tecla = (document.all) ? e.keyCode : e.which;

        //Tecla de retroceso siempre permitida
        if (tecla == 8){
            return true;
        }

        //entrada, solo acepta numeros
        entrada =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return entrada.test(tecla_final);
    }

</script>

<body>
    

<header>
    <h1 style = "text-align:center">
        REGISTRO
    </h1>
</header>


<form action="envio_datos_Formulario.php" method = "post">

<hr />

<!--Nombre-->
<div class = "grupo_formulario">
<label for="nombre">Nombre Completo: </label><br>
<input type="text" name = "nombre" maxlenght = "255" required>
<br/><br/>
</div>

<!--No. de cuenta-->
<div class = "grupo_formulario">
<label for="num_cuenta">Numero de Cuenta: </label><br>
<input type="text" name = "num_cuenta" maxlenght = "255" required>
<br/><br/>
</div>

<!--Usuario-->
<div class = "grupo_formulario">
<label for="nombre_usuario">Nombre Uusario: </label><br>
<input type="text" name = "nombre_usuario" maxlenght = "255" required>
<br/><br/>
</div>

<!--Direccion-->
<div class = "grupo_formulario">
<label for="direccion">Direccion: </label><br>
<input type="text" name = "direccion" maxlenght = "255" required>
<br/><br/>
</div>

<!--Telefono-->
<div class = "grupo_formulario">
<label for="telefono">Telefono: </label><br>
<input type="text" onkeypress = "return valida(event)" name = "telefono" maxlenght = "15" required>
<br/><br/>
</div>

<!--Correo-->
<div class = "grupo_formulario">
<label for="correo">Correo Electronico: </label><br>
<input type="email" name = "correo" maxlenght = "40" required>
<br/><br/>
</div>

<br/><br/>

<input type="submit" name = "submit" class = "botonPR" value = "REGISTRARME">
<input type="reset" name = "clear" class = "botonPR" value = "BORRAR">

<select>

</select>

</form>


<br/>
<h1><a href="index.php">Inicio de Listas</a></h1>

</body>

</html>