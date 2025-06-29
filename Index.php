<?php 
session_start();
require ("Logica/Administrador.php");
require ("Logica/Dueño.php");
require ("Logica/paseador.php");
require ("Logica/EstadoPaseador.php");
require ("Logica/EstadoCita.php");
require ("Logica/Raza.php");
require ("Logica/Perro.php");
require ("Logica/Tarifa.php");
require ("Logica/Cita.php");
require ("Logica/Paseo.php");


?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Matasanos EPS</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- FontAwesome -->
<link href="https://use.fontawesome.com/releases/v6.7.2/css/all.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" ></script>
</head>
<!-- Validacion de paginas -->
<?php 

$paginas_sin_autenticacion = array(
    "presentacion/inicio.php",
    "presentacion/autenticar.php",
    "presentacion/noAutorizado.php",
    "presentacion/RegistraDueño.php",
);

$paginas_con_autenticacion = array(
    "Presentacion/sesionAdmin.php",
    "Presentacion/sesionPaseador.php",
    "Presentacion/sesionDueño.php",
    "presentacion/cita/consultarCita.php",
    "presentacion/paciente/buscarPaciente.php",
);


if(!isset($_GET["pid"])){
    include ("presentacion/inicio.php");
}else{

    $pid = base64_decode($_GET["pid"]);
    if(in_array($pid, $paginas_sin_autenticacion)){
        include $pid;
    }else if(in_array($pid, $paginas_con_autenticacion)){
        if(!isset($_SESSION["id"])){
            include "presentacion/autenticar.php";
        }else{
            include $pid;
        }
    }else{
        ?><?php
    }
}

    
?>

</html>

