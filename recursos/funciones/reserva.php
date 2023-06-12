<?php
session_start();
include('../clases/ReservaCs.php');
    // var_dump($_POST);exit;
if (isset($_POST['btn_reservar'])){
    $cantidad_persona =  $_POST['cantidad_persona'];
    $clubReserva = $_POST['clubReserva'];
    $serieReserva =  $_POST['serieReserva'];
    $fechaReserva = $_POST['fechaReserva'];
    $fechaReserva = $_POST['fechaReserva'];
    $idUsuario = $_POST['id'];
    $arregloReserva = array(
    'cantidad_persona' => $cantidad_persona,
    'clubReserva' => $clubReserva,
    'serieReserva' => $serieReserva,
    'fechaReserva' => $fechaReserva,
    'idUsuario' => $idUsuario
    );
    // var_dump($arregloReserva);exit;
    $ReservaRealizada = json_decode($reservas->guardarReserva($arregloReserva));
    

    if ($ReservaRealizada->estado == true){
        if($ReservaRealizada->estado == true){
            header('location:../../calendario.php?id='.$ReservaRealizada->ultimo.'&fecha='.$ReservaRealizada->fechaReserva);
            // CONCADENAR VARIABLES
        }else{
            header('location:../../calendario.php');
        }
    }
}
?>