<?php
session_start();
include('../clases/JugadoresCs.php');

if (isset($_POST['boton_update'])){
    // var_dump($_POST);exit;

    $nombre =  $_POST['nombre'];
    $apellido =  $_POST['apellido'];
    $idUsuario =  $_POST['idUsuario'];
    $club =  $_POST['club'];
    $correo =  $_POST['correo'];
    $telefono =  $_POST['telefono'];
    $params = array(
        'nombre' => $nombre,
        'apellido' => $apellido,
        'idUsuario' => $idUsuario,
        'club' => $club,
        'correo' => $correo,
        'telefono' => $telefono
    );
    if (empty($telefono) || empty($correo)) {
        $mensaje = "<div class='alert alert-danger h5'>Los campos son obligarorios</div>";
        header('location: ../../editarPerfil.php?msg='.$mensaje);
        }else{

    $resultadoUpdate = json_decode($jugadores->ActualizarJugador($params));
    if ($resultadoUpdate->estado == true) {
        header('location: ../../editarPerfil.php?idUsuario='.$resultadoUpdate->idUsuario.'&msg=' . $resultadoUpdate->mensaje);
    } else {
        header('location: ../../editarPerfil.php?msg=' . $resultadoUpdate ->mensaje);
    }
}
}
?>