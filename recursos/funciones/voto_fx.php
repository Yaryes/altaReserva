<?php
session_start();
include('../clases/votoCs.php');

//REGISTRAR VOTO
if (isset($_POST['btn_voto'])){
    $punto =  $_POST['punto'];
    $idC =  $_POST['idC'];
    $arreglovoto = array(
        'punto' => $punto,
        'idC' => $idC
    );
    $votoRealizado = json_decode($Votos->ingresarVoto($arreglovoto));
    // var_dump($votoRealizado);exit;
    $jsonData = json_encode($resultado);
    $encodedData = urlencode($jsonData);
    //VERIFICAR SOLO UN VOTO (CAMBIAR ESTADO DE LA RESERVA)
    if (empty($encodedData)){
        header('location:../../votarCancha.php');
    }else{
        header('location:../../inicioUser.php');
    }
}
?>