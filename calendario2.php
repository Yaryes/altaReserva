<?php
session_start();
include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navUser.php');

if (isset($_GET['id'])) {
  $codigo = $_GET['id'];
  $fechaReserva = $_GET['fecha'];
  $msg = $_GET['msg'];
  $params = array(
      'codigo' => $codigo,
      'fechaReserva' => $fechaReserva,
      'msg' => $msg
  );
  $fechaReservaString = $params['fechaReserva'];
  $fechaReservaObjeto = DateTime::createFromFormat('Y-m-d\TH:i', $fechaReservaString);
  $fechaReserva = $fechaReservaObjeto->format('Y-m-d');
  
  $params['fechaReserva'] = $fechaReserva;


  // var_dump($params);exit;


}
?>
<div class="container shadow-lg ">
    <div class="col-md-8 offset-md-2">
      <div class="mt-4" id="calendar">

      </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: "es",
    headerToolbar: {
      left: 'prev,next',
      center: 'title',
      right: ''
    },
    events: [
      {
        title: 'Mi evento',
        start: '<?php echo $params['fechaReserva']; ?>'
      }
    ]
  });
  calendar.render();
});

</script>
<?php
include('recursos/template/footer.php');
?>
