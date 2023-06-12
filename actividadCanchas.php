<?php
session_start();
include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navAdm.php');
if($_SESSION ['user']['nombre']!=null){
?>

<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                  <img src="img/cancha7.jpg" class="img-fluid p-3" />
                </div>
                <div class="mt-5">
                📍 Av. República de Croacia, Antofagasta
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <img src="img/cancha6.jpg" class="img-fluid p-3" />
                </div>
                <div class="mt-5">
                📍 Av. República de Croacia, Antofagasta
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">42 Applied <span class="text2">of 70 capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between mb-4">
                  <img src="img/cancha8.jpg" class="w-100 mt-2"  />
                </div>
                <div class="mt-5">
                📍 Av. República de Croacia, Antofagasta
                    <div class="mt-5">
                        <div class="progress ">
                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">52 Applied <span class="text2">of 100 capacity</span></span> </div>
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