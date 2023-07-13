<?php
session_start();
if($_SESSION ['user']['nombre']!=null){
include('recursos/clases/jugadoresCs.php');
include('recursos/template/header.php');
include('recursos/template/navUser.php');
$idUsuario = $_SESSION ['user']['idUsuario'];
$params = array(
  'idUsuario' => $idUsuario
);
$jugador = json_decode($jugadores->buscarJugador($params));
if ($jugador->estado == true) {
  $idUsuario = $jugador->idUsuario;
  $nombre =  $jugador->nombre;
  $apellido = $jugador->apellido;
  $correo = $jugador->correo;
  $telefono = $jugador->telefono;
  $club = $jugador->club;
} else {
$idUsuario = "";
$nombre = "";
$apellido = "";
$correo = "";
$telefono = "";
}
if($club!=null){
  switch ($club) {
    case 1:
        $nombreClub = "Enaex";
        break;
    case 2:
        $nombreClub = "Abemarle";
        break;
    case 3:
        $nombreClub = "Cyen Capacitaciones";
        break;
    case 4:
        $nombreClub = "Ladies";
        break;
    default:
        $nombreClub = "Número inválido";
        break;
} 
}
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
} else {
  $msg = "";
}
echo $msg;

?>
<div class="container shadow-lg border mt-2" style="height: 400px; overflow:auto;" >
  <form action="recursos/funciones/usuario_fx.php"  method="post">  
    <div class="row mt-4 justify-content-center">
      <div class="col-12 text-center" >
        <p class="h3">Editar Informacion</p>
      </div>
      <div class="col-7 mt-4">
        <div class="input-group">
          <span class="input-group-text">Nombre del Jugador : </span>
          <input type="text" name="nombre" aria-label="First name" value="<?php echo $nombre ?>" class="form-control">
          <input type="text" name="apellido" aria-label="First name" value="<?php echo $apellido ?>" class="form-control">
        </div>
      </div>
      <div class="col-7 mt-3">
        <div class="input-group">
          <span class="input-group-text">Club : </span>
          <input type="hidden" name="idUsuario" value="<?php echo $idUsuario?>">
          <p class="p-2"><b><?php echo $nombreClub ; ?></b></p>
          <input type="hidden" name="club" value="<?php echo $club?>">
          <!-- <input type="text" name="" aria-label="First name" value="<?php echo  $nombreClub?>" class="form-control"> -->
        </div>
      </div>
      <div class="col-7 mt-3">
        <div class="input-group">
          <span class="input-group-text">Correo : </span>
          <input type="text" name="correo" aria-label="" value="<?php echo $correo ?>" class="form-control">
        </div>
      </div>
      <div class="col-7 mt-3">
        <div class="input-group">
          <span class="input-group-text">Telefono : </span>
          <input type="text" name="telefono"  aria-label="" value="<?php echo $telefono ?>" class="form-control">
        </div>
      </div>
      <div class="col-7 mt-4 text-center">
        <div class="input-group">
          <input class="btn btn-success" type="submit" name="boton_update" value="Actualizar Perfil">
        </div>
      </div>
    </div> 
  </form>
</div>
<?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>