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
                data: [1, 30, 2, 4],
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
      <div class="col-10">
              <div class="table-responsive">
          <table class="table table-striped table-sm">
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
              foreach ($reservas as $array){
                  echo "<tr>";
                      foreach($array as $contenido)
                      {
                        // $dia = date_format(date_create($reservas->fechaReserva), 'y-m-d');
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

