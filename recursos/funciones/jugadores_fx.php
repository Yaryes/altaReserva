<?php
session_start();
include('../clases/jugadoresCs.php');

if (isset($_POST['btn_jugEnaex'])){
    $clubReserva =  $_POST['clubReserva'];
    $resultado = json_decode($jugadores->buscarJugadoresEnaex($clubReserva));
    // var_dump($resultado);exit;
    $jsonData = json_encode($resultado);
    $encodedData = urlencode($jsonData);
    if (empty($encodedData)){
        header('location:../../index.html');
    }else{
        header('location:../../jugadores.php?data=' . $encodedData);
    }
}
if (isset($_POST['btn_jugAbemarle'])){
    $clubReserva =  $_POST['clubReserva'];
    $resultado = json_decode($jugadores->buscarJugadoresAbemarle($clubReserva));
    // var_dump($resultado);exit;
    $jsonData = json_encode($resultado);
    $encodedData = urlencode($jsonData);
    if (empty($encodedData)){
        header('location:../../index.html');
    }else{
        header('location:../../jugadores.php?data=' . $encodedData);
    }
}
if (isset($_POST['btn_jugCyen'])){
    $clubReserva =  $_POST['clubReserva'];
    $resultado = json_decode($jugadores->buscarJugadoresCyenCapacitaciones($clubReserva));
    // var_dump($resultado);exit;
    $jsonData = json_encode($resultado);
    $encodedData = urlencode($jsonData);
    if (empty($encodedData)){
        header('location:../../index.html');
    }else{
        header('location:../../jugadores.php?data=' . $encodedData);
    }
}
if (isset($_POST['btn_jugLadies'])){
    $clubReserva =  $_POST['clubReserva'];
    $resultado = json_decode($jugadores->buscarJugadoresLadies($clubReserva));
    // var_dump($resultado);exit;
    $jsonData = json_encode($resultado);
    $encodedData = urlencode($jsonData);
    if (empty($encodedData)){
        header('location:../../index.html');
    }else{
        header('location:../../jugadores.php?data=' . $encodedData);
    }
}
?>