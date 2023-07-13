<?php
session_start();
include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navAdm.php');

if($_SESSION ['user']['nombre']!=null){

    $admin = $_SESSION ['user']['nombre'];
    $params = array(
        'idAdmin' => 1,
        'admin' => $admin
    );

    $reservas = json_decode($reservas->todasReserva($params, true));

    //**** RECORRER LA CANTIDAD DE UN CLUB Y CONTARLOS
    // $reservas->clubReserva
    $contador = 0;
    $datoBuscado = 'Abemarle';
    foreach ($reservas as $objeto) {
        if ($objeto->clubReserva === $datoBuscado) {
            $contador++;
            
        }
    }
    $contador2 = 0;
    $datoBuscado2 = 'Cyen Capacitaciones';
    foreach ($reservas as $objeto) {
        if ($objeto->clubReserva === $datoBuscado2) {
            $contador2++;
        }
    }
    $contador3 = 0;
    $datoBuscado3 = 'Enaex';
    foreach ($reservas as $objeto) {
        if ($objeto->clubReserva === $datoBuscado3) {
            $contador3++;
        }
    }
    $contador4 = 0;
    $datoBuscado4 = 'Ladies';
    foreach ($reservas as $objeto) {
        if ($objeto->clubReserva === $datoBuscado4) {
            $contador4++;
        }
    }

    $arrayObjetosModificados = [];
    foreach ($reservas as $objeto) {
        $objetoModificado = clone $objeto;
        $fecha = date_format(date_create($objeto->fechaReserva), 'd/m/y');
        $objetoModificado->fechaReserva = $fecha;
        $arrayObjetosModificados[] = $objetoModificado;
    }          

?>  
  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-10">
        <div>
          <canvas id="myChart"></canvas>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
          const ctx = document.getElementById('myChart');
          new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['ENAEX', 'ABEMARLE', 'CYEN CAPACITACIONES', 'LADIES'],
              datasets: [{
                label: 'Cantidad de Reservas',
                data: [<?php echo $contador3?>, <?php echo $contador?>, <?php echo $contador2?>,
                <?php echo $contador4?>],
                borderWidth: 3
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        </script>
      </div>
      <div class="col-10 overflow-auto" style="height: 380px;">
        <div class="table-responsive">
          <table class="table table-striped table-sm" >
            <thead>
              <tr>
                <?php
                    $reservass = array("N° Reserva ","Nombre del Club ","Serie ","Cantidad Jugadores","Fecha");
                      foreach ($reservass as $valor) {
                        echo '<th>'.$valor.'</th>';
                      }
                  ?>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($arrayObjetosModificados as $array){
                  echo "<tr>";
                  // var_dump($array);exit;
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
    </div>
  </div> 
  <div class="container">
    <div class="row">
      
    </div>
  </div> 
<?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>

