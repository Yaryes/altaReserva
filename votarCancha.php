<?php
session_start();
if($_SESSION ['user']['nombre']!=null){
include('recursos/template/header.php');
include('recursos/template/navUser.php');

$idReserva =  $_POST['idReserva'];
$idC =  $_POST['cancha'];
// var_dump($idC);exit;
?> 

<div class="row mt-5 justify-content-center ">
  <div class="col-6">
    <div class="card border-success mb-3">
      <div class="card-header">Numero de canchaa a calificar : <?php echo $idC ?></div>
        <div class="card-body text-dark">
          <h5 class="card-title">fecha de la reserva realizadas: </h5>
          <div>
            <form action="recursos/funciones/voto_fx.php" method="post">
              <div class="form-group">
                <label for="votacion">Selecciona tu voto:</label>
                <input type="range" class="form-range" id="punto" name="punto" min="1" max="100">
                <input type="hidden" name="idC" value="<?php echo $idC; ?>">
              </div>
              <button type="submit" name="btn_voto" class="btn btn-primary">Enviar voto</button>
            </form>
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
