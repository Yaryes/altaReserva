<?php
session_start();
if($_SESSION ['user']['nombre']!=null){
include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navUser.php');

$user = $_SESSION ['user']['nombre'];
$params = array(
    'iduser' => 1,
    'user' => $user
);

$reservasEncurso = json_decode($reservas->todasReserva2($params));
// var_dump($reservasEncurso);exit;
// FILTRAR
$atributoComparar = $_SESSION ['user']['idUsuario'];
$arrayObjetosCoincidentes = [];
foreach ($reservasEncurso as $objeto) {
  if ($objeto->id == $atributoComparar) {
    $arrayObjetosCoincidentes[] = $objeto;
    }
} 
$arrayObjetosModificados = [];
foreach ($arrayObjetosCoincidentes as $objeto) {
    $objetoModificado = clone $objeto;
    $fecha = date_format(date_create($objeto->fechaReserva), 'd/m/y');
    $objetoModificado->fechaReserva = $fecha;
    $arrayObjetosModificados[] = $objetoModificado;
}
// var_dump($arrayObjetosModificados);exit;
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
} else {
  $msg = "";
}
echo $msg;
?>

<div class="container shadow-lg mt-4 " style="background-color: #0000">
  <div class="row justify-content-center ">
  <div class="mb-5 text-center mt-2">
    <p class="h3">Registro reservas en curso 
    </p>
    <hr class="fs-4">
  </div>
  <div class="col-10 overflow-auto" style="height: 380px;">
        <div class="table-responsive">
          <table class="table table-striped table-hove">
            <thead>
              <tr>
                <?php
  
                    $reservass = array("Cod. Reserva", "Serie", "Cantida Personas" ,"Fecha",
                      "Cancelar Reserva");
                      foreach ($reservass as $valor) {
                        echo '<th>'.$valor.'</th>';
                      }
                  ?>
              </tr>
            </thead>
            <tbody>
        
              <?php foreach ($arrayObjetosModificados as $objeto): ?>
                <tr>
                  <td><?php echo $objeto->idReserva; ?></td>
                  <td><?php echo $objeto->serieReserva; ?></td>
                  <td><?php echo $objeto->cantidad_persona; ?></td>
                  <td><?php echo $objeto->fechaReserva; ?></td>
                  <td>
                    <form method="POST" action="recursos/funciones/reserva.php">
                      <input type="hidden" name="idReserva" value="<?php echo $objeto->idReserva; ?>">
                      <input class="btn btn-danger" type="submit" name="boton_eliminar" value="Cancelar Reserva">
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
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
