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
        if(tecla == 8){
            return true;
        }

        //entrada, solo acepta numeros
        entrada =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return entrada.test(tecla_final);
    }

</script>







</html>