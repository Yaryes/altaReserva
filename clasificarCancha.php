<?php
session_start();
if($_SESSION ['user']['nombre']!=null){
include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navUser.php');
$user = $_SESSION ['user']['nombre'];
$params = array(
    'user' => $user
);
$reservasRealizadas = json_decode($reservas->todasReservaRealizadas($params));
$atributoComparar = $_SESSION ['user']['idUsuario'];
$arrayObjetosCoincidentes = [];
foreach ($reservasRealizadas as $objeto) {
  if ($objeto->id == $atributoComparar) {
    $arrayObjetosCoincidentes[] = $objeto;
    }
}
?> 
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
</svg>
<div class="container shadow-lg border mt-2" style="height: 650px;overflow:auto;">
  <div class="row justify-content-center">
    <div class="col-8 mt-3">
      <div class="text-center">
        <p class="h3">Reservas Realizadas</p>
        <hr class="fs-5">
      </div>
      <div class="alert alert-dark mt-4" role="alert">
        <h4 class="alert-heading mb-3  ">Puntuacion de canchas</h4>
        <hr>
        <p class="mb-3 mt-2">¡Tu opinión es importante para nosotros! Queremos conocer tu experiencia con nuestro servicio. Por favor, tómate un momento para calificarla del 1 al 100, donde 1 representa una experiencia insatisfactoria y 100 una experiencia excepcional. Tu voto nos ayudará a mejorar y brindarte un mejor servicio en el futuro.</p>
       </div>
      <?php
        foreach ($arrayObjetosCoincidentes as $reservasRealizada) {
        $idReserva =  $reservasRealizada->idReserva;
        $id =  $reservasRealizada->id;
        $estado =  $reservasRealizada->estado;
        $fechaReserva =  $reservasRealizada->fechaReserva;
        $cancha =  $reservasRealizada->cancha;
        $hora = date_format(date_create($fechaReserva), 'h:i:s');
        $fecha = date_format(date_create($fechaReserva), 'Y-m-d');
      ?>

      <ol class="list-group">
      <li class="list-group-item d-flex justify-content-between align-items-start">
      <svg class="bi flex-shrink-0 me-2 alert-success" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
 
    <div class="ms-2 me-auto">
      
      <div class="fw-bold">Fecha reserva realizada : <?php echo $fecha; ?></div>
      <p>Cancha a votar Nº<?php echo $cancha; ?></p>
    </div>
        <span class="badge bg-primary rounded-pill">
          <form action="votarCancha.php" method="post">
          <input type="hidden" name="cancha" value="<?php echo $cancha; ?>">    
          <button class="btn btn-primary" type="sunmit" name="idReserva" value="<?php echo $idReserva; ?>">Calificar Cancha</button>
        </form></span>
  </li>

        
<?php
}
?>
<?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>
