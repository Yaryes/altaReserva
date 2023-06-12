<?php
session_start();
include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navAdm.php');
if($_SESSION ['user']['nombre']!=null){
?>


<?php
$etiquetas = ["Viernes", "Sabado", "Domingo"];
// CANTIDAD DE RESERVAS
$datosVentas = [3, 6, 8];
// Ahora las imprimimos como JSON para pasarlas a AJAX, pero las agrupamos
$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datosVentas,
];
// echo json_encode($respuesta);
?>
<div class="row ">
  <div class="col-12 mt-4 text-center">
    <p class="h3">Actividades Mensuales </p>
  </div> 
  <div class="col-4 p-4 overflow-auto" style="max-height: 500px; ">
    <p class="h3 text-center"><b>VIERNES</b></p>
    <table class="table table-success table-striped"  >
      <thead>
        <tr>
          <th scope="col">FECHA</th>
          <th scope="col">JUGADOR</th>
          <th scope="col">CORREO</th>

        </tr>
      </thead>
      <tbody style="he">
        <tr>
          <th>Tiger Nixon</th>
          <td>System Architect</td>
          <td>tnixon12@example.com</td>

        </tr>
        <tr>
          <th >Sonya Frost</th>
          <td>Software Engineer</td>
          <td>sfrost34@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Quinn Flynn</th>
          <td>Support Lead</td>
          <td>qflyn09@example.com</td>

        </tr>
        <tr>
          <th scope="row">Charde Marshall</th>
          <td>Regional Director</td>
          <td>cmarshall28@example.com</td>

        </tr>
        <tr>
          <th scope="row">Haley Kennedy</th>
          <td>Senior Marketing Designer</td>
          <td>hkennedy63@example.com</td>

        </tr>
        <tr>
          <th scope="row">Tatyana Fitzpatrick</th>
          <td>Regional Director</td>
          <td>tfitzpatrick00@example.com</td>

        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-4 p-4 overflow-auto "  style="max-height: 500px; ">
    <p class="h3 text-center"><b>SABADO</b></p>
    <table class="table table-success table-striped ">
      <thead>
        <tr>
          <th scope="col">FECHA</th>
          <th scope="col">JUGADOR</th>
          <th scope="col">CORREO</th>

        </tr>
      </thead>
      <tbody style="he">
        <tr>
          <th>Tiger Nixon</th>
          <td>System Architect</td>
          <td>tnixon12@example.com</td>

        </tr>
        <tr>
          <th >Sonya Frost</th>
          <td>Software Engineer</td>
          <td>sfrost34@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Quinn Flynn</th>
          <td>Support Lead</td>
          <td>qflyn09@example.com</td>

        </tr>
        <tr>
          <th scope="row">Charde Marshall</th>
          <td>Regional Director</td>
          <td>cmarshall28@example.com</td>

        </tr>
        <tr>
          <th scope="row">Haley Kennedy</th>
          <td>Senior Marketing Designer</td>
          <td>hkennedy63@example.com</td>

        </tr>
        <tr>
          <th scope="row">Tatyana Fitzpatrick</th>
          <td>Regional Director</td>
          <td>tfitzpatrick00@example.com</td>

        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-4 p-4 overflow-auto "  style="max-height: 500px; ">
    <p class="h3 text-center"><b>DOMINGO</b></p>
    <table class="table table-success table-striped ">
      <thead>
        <tr>
          <th scope="col">FECHA</th>
          <th scope="col">JUGADOR</th>
          <th scope="col">CORREO</th>

        </tr>
      </thead>
      <tbody style="he">
        <tr>
          <th>Tiger Nixon</th>
          <td>System Architect</td>
          <td>tnixon12@example.com</td>

        </tr>
        <tr>
          <th >Sonya Frost</th>
          <td>Software Engineer</td>
          <td>sfrost34@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Jena Gaines</th>
          <td>Office Manager</td>
          <td>jgaines75@example.com</td>

        </tr>
        <tr>
          <th scope="row">Quinn Flynn</th>
          <td>Support Lead</td>
          <td>qflyn09@example.com</td>

        </tr>
        <tr>
          <th scope="row">Charde Marshall</th>
          <td>Regional Director</td>
          <td>cmarshall28@example.com</td>

        </tr>
        <tr>
          <th scope="row">Haley Kennedy</th>
          <td>Senior Marketing Designer</td>
          <td>hkennedy63@example.com</td>

        </tr>
        <tr>
          <th scope="row">Tatyana Fitzpatrick</th>
          <td>Regional Director</td>
          <td>tfitzpatrick00@example.com</td>

        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row justify-content-center ">
  <div class="col-8 mt-3" >
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
      <canvas id="grafica"></canvas>
      <script type="text/javascript">
          // Obtener una referencia al elemento canvas del DOM
          const $grafica = document.querySelector("#grafica");
          // Pasaamos las etiquetas desde PHP
          const etiquetas = <?php echo json_encode($etiquetas) ?>;
          // Podemos tener varios conjuntos de datos. Comencemos con uno
          const datosVentas2020 = {
              label: "Ventas por mes",
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