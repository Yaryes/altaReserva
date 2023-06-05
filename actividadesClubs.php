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
    // var_dump($reservas);exit;

   
?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div>
          <canvas id="myChart"></canvas>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
          const ctx = document.getElementById('myChart');
        
          new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['ENAEX', 'ABEMARLE', 'CYEN CAPACITACIONES', 'LADIES', 'CAMILLE', 'CYTIES'],
              datasets: [{
                label: 'Cantidad de Reservas',
                data: [1, 3, 2, 4, 2, 3],
                borderWidth: 2
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
    </div>
  </div> 

  <div class="container  p-5">
     <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
         
          <?php

              $reservass = array("N° Reserva ","Nombre del Club ","Serie ","Cantidad Jugadores" ,"Fecha");
                foreach ($reservass as $valor) {
                  echo '<th>'.$valor.'</th>';
                }
            ?>
        </tr>
      </thead>
      <tbody>
        <?php
        // obtenemos los colores
        foreach ($reservas as $array){
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
  <?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>

