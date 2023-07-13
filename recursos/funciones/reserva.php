<?php
session_start();
include('../clases/ReservaCs.php');

if (isset($_POST['btn_reservar'])){
    $id = $_POST['id'];
    $cancha = $_POST['cancha'];
    $clubReserva =  $_POST['clubReserva'];
    $cantidad_persona =  $_POST['cantidad_persona'];
    $serieReserva =  $_POST['serieReserva'];
    $fechaReserva = $_POST['fechaReserva'];
    $estado = $_POST['estado'];
    $arregloReserva = array(
        'id' => $id,
        'cancha' => $cancha,
        'cantidad_persona' => $cantidad_persona,
        'clubReserva' => $clubReserva,
        'serieReserva' => $serieReserva,
        'estado' => $estado,
        'fechaReserva' => $fechaReserva
    );
    if (empty($fechaReserva) || empty($serieReserva)) {
        $mensaje = "<div class='alert alert-danger h4'>Todos los campos son obligatorios</div>";
        header('location: ../../reservarCancha.php?msg='.$mensaje);
        }else{
        $ReservaRealizada = json_decode($reservas->guardarReserva($arregloReserva));
        if ($ReservaRealizada->estado2 == true){
            if($ReservaRealizada->estado2 == true){
                header('location:../../calendario2.php?id='.$ReservaRealizada->ultimo.
                '&fecha='.$ReservaRealizada->fechaReserva.
                '&msg='.$ReservaRealizada->mensaje);
            }else{
                header('location:../../calendario2.php');
            }
        }
    }
}
if (isset($_POST['boton_eliminar'])){
    $idReserva = $_POST['idReserva'];
    $arregloReservaEliminar = array(
        'idReserva' => $idReserva
    );
   
    $ReservaRealizada = json_decode($reservas->eliminarReserva($arregloReservaEliminar));
    if($ReservaRealizada->estado == true){
        header('location:../../reservasRegistradas.php?msg='.$ReservaRealizada->mensaje);
    }else{
        header('location:../../calendario.php');
    }
}
?>