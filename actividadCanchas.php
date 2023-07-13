<?php
session_start();
include('recursos/clases/VotoCs.php');
include('recursos/template/header.php');
include('recursos/template/navAdm.php');
if($_SESSION ['user']['nombre']!=null){

    $admin = $_SESSION ['user']['nombre'];
    $params = array(
        'idAdmin' => 1,
        'admin' => $admin
    );
    $todosLosVotos = json_decode($Votos->selectVotos($params));
    $cantidadVeces = array();
    $conteoPuntos = array();
    foreach ($todosLosVotos as $objeto) {
        $idC = $objeto->idC;
        $punto = $objeto->punto;
        if (!isset($conteoPuntos[$idC])) {
            $conteoPuntos[$idC] = 0;
            $cantidadVeces[$idC] = 0;
        }
        $cantidadVeces[$idC]++;
        $conteoPuntos[$idC] += $punto;
    }
    // var_dump($cantidadVeces);exit;
    // foreach sumando votos por reservas
    foreach ($conteoPuntos as $idC => $conteo) {
        $cantidad = $cantidadVeces[$idC];
        $promedio = $conteo / $cantidad;
        $promedios[$idC] = $promedio;
    }
    
    // var_dump($promedios);exit;
       
?>
<div class="container mt-3 mb-3">
    <div class="col text-center">
        <p class="h3"><b>Mantenimiento de Canchas</b> </p>
    </div>
    <div class="row">    
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                  <img src="img/cancha7.jpg" class="img-fluid " style="border: solid; border-radius: 30px;" />
                </div>
                <?php $valor = $promedios[1];?>
                <div class="mt-5">
                <p class="h4 text-center">Cancha N°1</p>
                <p class="h4 mt-4">Puntuacion : <?php echo $valor."%"?></p>
                    <div class="mt-3">
                        <div class="progress">                           
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $valor?>%" aria-valuenow="60" 
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <img src="img/cancha6.jpg" class="img-fluid " style="border: solid; border-radius: 30px;"/>
                </div>
                <?php $valor = $promedios[2];?>
                <div class="mt-3" >
                    <div class="mt-5">
                        <p class="h4 text-center">Cancha N°2</p>
                        <p class="h4 mt-3">Puntuacion : <?php echo $valor."%"?></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $valor?>%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between mb-4">
                  <img src="img/cancha8.jpg" class=" mt-1" style="border: solid; border-radius: 30px; height: 270px" />
                </div>
                <?php $valor = $promedios[3];?>
                <div class="mt-3">
                    <div class="mt-4">
                        <p class="h4 text-center">Cancha N°3</p>
                        <p class="h4 mt-3">Puntuacion : <?php echo $valor."%"?></p>
                        <div class="progress ">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $valor?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>