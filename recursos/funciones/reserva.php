<?php
session_start();
include('../clases/ReservaCs.php');

if (isset($_POST['btn_reservar'])){
    $cantidad_persona =  $_POST['cantidad_persona'];
    $clubReserva = $_POST['clubReserva'];
    $serieReserva =  $_POST['serieReserva'];
    $fechaReserva = $_POST['fechaReserva'];
    $arregloReserva = array(
    'cantidad_persona' => $cantidad_persona,
    'clubReserva' => $clubReserva,
    'serieReserva' => $serieReserva,
    'fechaReserva' => $fechaReserva
    );

    $ReservaRealizada = json_decode($reserva->guardarReserva($arregloReserva));
    if ($resultado->estado == true){
        if($resultado->perfil == "Administrador"){
            header('location:../../admin.html');
        }else{
            header('location:../../inicioUser.php');
        }
    }
}
?>