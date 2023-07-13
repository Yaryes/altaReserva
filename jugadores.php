<?php
session_start();
include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navAdm.php');
if($_SESSION ['user']['nombre']!=null){
  $encodedData = $_GET['data'];
  $jsonData = urldecode($encodedData);
  $resultado = json_decode($jsonData, true);

}
?>
<div class="container mt-4 shadow-lg p-3 ">
  <div class="row">
    <div class="col-8 p-3">
    <p class="h3">Lista de Jugadores</p>
      <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <?php
                $valores = array("Id", "Nombre", "Apellido", "Correo");
                  foreach ($valores as $valor) {
                    echo '<th>'.$valor.'</th>';
                }
              ?>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach ($resultado as $array){
                echo "<tr>";
                    foreach($array as $contenido)
                    {
                        echo "<td>".$contenido."</td>";
                    }
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div> 
    </div> 
    <div class="col-4 mt-3">

    <p class="h5 mb-2">Cantidad de Reserva Jugadores</p>
      <div class="col mt-4 p-3" style="border: 1px solid #2B39E7; border-radius: 35px; height: 450px;overflow:auto;">
          <ol class="list-group list-group-numbered mt-3 m-1 ">
              <div class="row" id="lista">
              <table class="table table-sm">
          <thead>
            <tr>
              <?php

                $valores = array("Nombre", "Cantidad de Reservas");
                  foreach ($valores as $valor) {
                    echo '<th>'.$valor.'</th>';
                }
              ?>
            </tr>
          </thead>
          <tbody>  
            <tr>
              <?php      
              
              $reservas = json_decode($reservas->todasReserva2($resultado));     
              
              foreach ($resultado as $elemento) {
                echo "<tr>";
                echo '<th>'.$elemento['nombre'].'</th>';
                $valorAContar = $elemento['idUsuario'];
                $contador = 0;
                // var_dump($valorAContar);exit;
                foreach ($reservas as $array){
                  // var_dump($array->id);exit;
                    if ($array->id == $valorAContar) {
                          $contador++;
                      }
                }
                echo "<td>".$contador."</td>";
                echo "<tr>";
                
              }
              ?>
            </tr>
          </tbody>
        </table>
              </div>
          </ol>
      </div>

    </div>
  </div>  
</div>
</div>    
<?php
include('recursos/template/footer.php');
?>