<?php
session_start();
include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navAdm.php');
if($_SESSION ['user']['nombre']!=null){
  $admin = $_SESSION ['user']['nombre'];
  $params = array(
      'admin' => $admin
  );
  $reservas = json_decode($reservas->todasReserva($params));
  foreach ($reservas as $array){
    $fechaHoraString = $array->fechaReserva;
    $fecha = date('Y-m-d', strtotime($fechaHoraString));
    $dia = date_format(date_create($fecha), 'd');
    $array->dia = $dia;
    }
// var_dump($reservas);exit;
?>
<div class="row mb-5 p-3 shadow-lg " >
  <div class="col-12 mt-3 mb-3 text-center">
    <p class="h3"><b>Actividades Mensuales </b></p>
  </div> 
  <div class="col-4 p-3 overflow-auto" style="height: 380px; " >
    <p class="h5"><b>Viernes</b></p>
    <table class="table caption-top"  >
      <thead>
      <tr>
        <th scope="col">FECHA</th>
        <th scope="col">CLUB</th>
        <th scope="col">SERIE</th>
      </tr>
      </thead>
      <tbody style="he">
      <?php

      // INICIAR CONTADOR
      $contador = 0;
        foreach ($reservas as $array){
            echo "<tr>";
            //
            if($array->dia == 16 || $array->dia == 23
            || $array->dia == 30 || $array->dia == 9
            || $array->dia == 2)
              {
                $fecha = date_format(date_create($array->fechaReserva), 'd,');
                echo "<td>"."Viernes ".$array->dia."</td>"; 
                echo "<td>".$array->clubReserva."</td>"; 
                echo "<td>".$array->serieReserva."</td>"; 
                $contador++; 
              }
              
            echo "</tr>"; 
        
        
        }
        // var_dump($contador);exit;
        ?>
      </tbody>
    </table>
  </div>
  <div class="col-4 p-3 overflow-auto " style="height: 380px; ">
    <p class="h5"><b>Sabado</b></p>
    <table class="table caption-top table-striped ">
      <thead>
        <tr>
          <th scope="col">FECHA</th>
          <th scope="col">CLUB</th>
          <th scope="col">SERIE</th>
        </tr>
      </thead>
      <tbody style="he">
      <?php
      $contador2 = 0;
      foreach ($reservas as $array){
            echo "<tr>";
            // var_dump($array);exit;
            if($array->dia == 3 || $array->dia == 10
            || $array->dia == 17 || $array->dia == 24)
              {
                $fecha = date_format(date_create($array->fechaReserva), 'd,');
                echo "<td>"."Sabado ".$array->dia."</td>"; 
                echo "<td>".$array->clubReserva."</td>"; 
                echo "<td>".$array->serieReserva."</td>"; 
                $contador2++;
              }
             
            echo "</tr>"; 
        }
        ?>
      </tbody>
    </table>
  </div>
  <div class="col-4 p-3 overflow-auto" style="height: 380px;" >
    <p class="h5"><b>Domingo</b></p>
    <table class="table caption-top ">
      <thead>
        <tr>
        <th scope="col">FECHA</th>
        <th scope="col">CLUB</th>
        <th scope="col">SERIE</th>

        </tr>
      </thead>
      <tbody style="he">
      <?php
      $contador3 = 0;
      foreach ($reservas as $array){
            echo "<tr>";
            // var_dump($array);exit;
            if($array->dia == 4 || $array->dia == 11
            || $array->dia == 18 || $array->dia == 25)
              {
                $fecha = date_format(date_create($array->fechaReserva), 'd,');
                echo "<td>"."Domingo ".$array->dia."</td>"; 
                echo "<td>".$array->clubReserva."</td>"; 
                echo "<td>".$array->serieReserva."</td>"; 
                $contador3++;
              }
             
            echo "</tr>"; 
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<div class="row mb-5 justify-content-center ">
  <div class="col-10 mt-5" >




  
    <?php 
  // var_dump($reservas);exit;
  // $contador = 0;
  // $datoBuscado = 'Abemarle';
  // foreach ($reservas as $objeto) {
  //     if ($objeto->clubReserva === $datoBuscado) {
  //         $contador++;
          
  //     }
  // }
    $etiquetas = ["Viernes", "Sabado", "Domingo"];
    // CANTIDAD DE RESERVAS
    $valor = 6; 
    $datosVentas = [$contador, $contador2, $contador3];
    // Ahora las imprimimos como JSON para pasarlas a AJAX, pero las agrupamos
    $respuesta = [
        "etiquetas" => $etiquetas,
        "datos" => $datosVentas,
    ];
    ?>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
      <canvas id="grafica"></canvas>
      <script type="text/javascript">
          // Obtener una referencia al elemento canvas del DOM
          const $grafica = document.querySelector("#grafica");
          // Pasaamos las etiquetas desde PHP
          const etiquetas = <?php echo json_encode($etiquetas) ?>;
          // Podemos tener varios conjuntos de datos. Comencemos con uno
          const datosVentas2020 = {
              label: "Reservas",
              // Pasar los datos igualmente desde PHP
              data: <?php echo json_encode($datosVentas) ?>,
              backgroundColor: 'rgb(111, 173, 151)', // Color de fondo
              borderColor: 'rgba(0, 0, 0)', // Color del borde
              borderWidth: 1, // Ancho del borde
          };
          new Chart($grafica, {
              type: 'line', // Tipo de gráfica
              data: {
                  labels: etiquetas,
                  datasets: [
                      datosVentas2020,
                      // Aquí más datos...
                  ]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero: true
                          }
                      }],
                  },
              }
          });
      </script>
    </div> 
  </div>
</div>
<?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>