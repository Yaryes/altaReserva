<?php
session_start();
if($_SESSION ['user']['nombre']!=null){
include('recursos/clases/ClubCs.php');
include('recursos/template/header.php');
include('recursos/template/navUser.php');
if($_SESSION ['user']['club']!=null){
  switch ($_SESSION ['user']['club']) {
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
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
} else {
  $msg = "";
}
// var_dump( $_SESSION ['user']['apellido']);exit;
}
echo $msg;
?> 
<div class="container shadow-lg mt-2 p-3" style="background-color: #0000">
  <div class="mb-5 text-center">
    <p class="h2">Proceso de Reseva de canchas </p>
    <hr class="fs-4">
  </div>
  <div class="row" >
    <div class="col-md-4 mb-4"  >
      <div class="bg-image hover-overlay shadow-1-strong rounded ripple "  data-mdb-ripple-color="light">
        <img src="img/cancha6.jpg" class="img-fluid " style=" border: solid; border-width: medium; border-radius: 30px;" />
      </div>
    </div>
    <div class="col-md-8 mb-5 mt-4">
      <div class="div">
        <p class="h4"><b>Cancha N°1</b></p>
      </div>
      <ul class="mt-3">
        <li> Longitud: 23,76 metros. Anchura: 8,23 metro</li>
        <li> Altura de la red en el centro: <b>0,914 metros</b></li>
        <li> Piso de cancha: <b>tartán</b></li>
        <li><span class="badge rounded-pill bg-dark">Dias Disponible: viernes/sabado/domingo</span></li>
      </ul>
      
      <button type="button" class="btn btn-success mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Reservar Cancha Nº1
      </button>
    </div>
    <div class="col-md-4 mb-4 ">
      <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
        <img src="img/cancha7.jpg" class="img-fluid" style="border: solid; border-radius: 30px;"/>
      </div>
    </div>
    <div class="col-md-8 mb-5 mt-4">
      <div class="div">
        <p class="h4"><b>Cancha N°2</b></p>
      </div>
      <ul class="mt-3">
        <li> Longitud: 23,76 metros. Anchura: 8,23 metro</li>
        <li> Altura de la red en el centro: <b>0,914 metros</b></li>
        <li> Piso de cancha: <b>tartán</b></li>
        <li><span class="badge rounded-pill bg-dark">Dias Disponible: viernes/sabado/domingo</span></li>
      </ul>
      <button type="button" class="btn btn-success mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
        Reservar Cancha Nº2
      </button>
    </div>
    <div class="col-md-4 mb-4">
      <div class="bg-image hover-overlay shadow-1-strong rounded ripple " data-mdb-ripple-color="light">
        <img src="img/cancha8.jpg" class="img-fluid " style="border: solid; border-radius: 30px;" />
      </div>
    </div>
    <div class="col-md-8 mb-5 mt-4">
      <div class="div">
        <p class="h4"><b>Cancha N°3</b><p>
      </div>
      <ul class="mt-4">
        <li> Longitud: 23,76 metros. Anchura: 8,23 metro</li>
        <li> Altura de la red en el centro: <b>0,914 metros</b></li>
        <li> Piso de cancha: <b>tartán</b></li>
        <li><span class="badge rounded-pill bg-dark">Dias Disponible: viernes/sabado/domingo</span></li>
      </ul>
      <button type="button" class="btn btn-success mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Reservar Cancha Nº3
      </button>
    </div>
  </div>
</div>
<!-- FORMULARIO CANCHAS -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Reserva de Cancha</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  action="recursos/funciones/reserva.php" method="post" >
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" 
              class="form-label">Nombre del Jugador
            </label>  
              <input type="text" class="form-control" disabled id="exampleInputEmail1"
              aria-describedby="emailHelp" name="" value="<?php echo $_SESSION ['user']['nombre']." ". 
              $_SESSION ['user']['apellido']; ?> "> 
              <input type="hidden" class="form-control"  id="exampleInputEmail1"
              aria-describedby="emailHelp" name="id" value="<?php echo $_SESSION ['user']['idUsuario']; ?> ">  
              <input type="hidden" class="form-control"  id="exampleInputEmail1"
              aria-describedby="emailHelp" name="cancha" value="1">     
            <div id="emailHelp" class="form-text">La reserva es asociada con la cuemta iniciada </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <li>Cancha disponible para <b>2 Jugadores</b></li>
              <input type="hidden" class="form-control" 
                name="cantidad_persona"  value="2 Personas"> 
              <li>Club asociado : <b><?php echo $nombreClub ; ?></b></li>
              <input type="hidden" class="form-control" 
                name="club"  value="<?php echo $_SESSION ['user']['club']; ?>">      
                <input type="hidden" class="form-control"  id="exampleInputEmail1"
                aria-describedby="emailHelp" name="clubReserva" value="<?php echo $nombreClub ; ?>">    
            </div>
          </div>
          <div class="mb-3">
            <label class="form-check-label" for="flexCheckDefault"> 
              Serie:
            </label>
            <select class="form-select form-select-sm" name="serieReserva" aria-label=".form-select-sm example">
              <option >01 Primera</option>
              <option >02 Segunda</option>
              <option >03 Tercera</option>
              <option >04 Cuarta</option>
              <option >05 Dama</option>
            </select>
            <input type="hidden" class="form-control"  id="estado"
                aria-describedby="emailHelp" name="estado" value="EN CURSO">     
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ingrese <b>Fecha y Hora </b></label>
            <input type="datetime-local" class="form-control"
                name="fechaReserva"
                id="exampleInputPassword1">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="summit" name="btn_reservar" class="btn btn-primary">Reservar</button>
        </div>     
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Reserva de Cancha22222</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  action="recursos/funciones/reserva.php" method="post" >
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" 
              class="form-label">Nombre del Jugador
            </label>
            <input type="text" class="form-control" disabled id="exampleInputEmail1"
              aria-describedby="emailHelp" name="" value="<?php echo $_SESSION ['user']['nombre']; ?> "> 
            <input type="hidden" class="form-control"  id="exampleInputEmail1"
              aria-describedby="emailHelp" name="id" value="<?php echo $_SESSION ['user']['idUsuario']; ?> ">      
            <input type="hidden" class="form-control"  id="exampleInputEmail1"
            aria-describedby="emailHelp" name="cancha" value="2">     
            <div id="emailHelp" class="form-text">La reserva es asociada con la cuenta iniciada </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" 
                value="2 Personas"  
                name="cantidad_persona" 
                id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault"> 
                2 Jugadores
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-check-label" for="flexCheckDefault"> 
              Club: 
            </label>
            <select class="form-select form-select-sm" name="clubReserva" aria-label=".form-select-sm example">
              <option>Abemarle</option>
              <option>Cyen Capacitaciones</option>
              <option>Enaex</option>
              <option>Ladies</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-check-label" for="flexCheckDefault"> 
              Serie:
            </label>
            <select class="form-select form-select-sm" name="serieReserva" aria-label=".form-select-sm example">
              <option >01 Primera</option>
              <option >02 Segunda</option>
              <option >03 Tercera</option>
              <option >04 Cuarta</option>
              <option >05 Dama</option>
            </select>
          </div>
          <div class="mb-3 border border-success">
            <label for="exampleInputPassword1" class="form-label">Fecha de la reserva y Hora</label>
            <input type="datetime-local" class="form-control"
              name="fechaReserva"
              id="exampleInputPassword1">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="summit" name="btn_reservar" class="btn btn-primary">Reservar</button>
        </div>     
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Reserva de Cancha22222</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  action="recursos/funciones/reserva.php" method="post" >
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" 
              class="form-label">Nombre del Jugador
            </label>
            <input type="text" class="form-control" disabled id="exampleInputEmail1"
              aria-describedby="emailHelp" name="" value="<?php echo $_SESSION ['user']['nombre']; ?> "> 
            <input type="hidden" class="form-control"  id="exampleInputEmail1"
              aria-describedby="emailHelp" name="id" value="<?php echo $_SESSION ['user']['idUsuario']; ?> ">      
              <input type="hidden" class="form-control"  id="exampleInputEmail1"
              aria-describedby="emailHelp" name="cancha" value="3">     
            <div id="emailHelp" class="form-text">La reserva es asociada con la cuemta iniciada </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" 
                value="2 Personas"  
                name="cantidad_persona" 
                id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault"> 
                2 Jugadores
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-check-label" for="flexCheckDefault"> 
              Club: 
            </label>
            <select class="form-select form-select-sm" name="clubReserva" aria-label=".form-select-sm example">
              <option>Abemarle</option>
              <option>Cyen Capacitaciones</option>
              <option>Enaex</option>
              <option>Ladies</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-check-label" for="flexCheckDefault"> 
              Serie:
            </label>
            <select class="form-select form-select-sm" name="serieReserva" aria-label=".form-select-sm example">
              <option >01 Primera</option>
              <option >02 Segunda</option>
              <option >03 Tercera</option>
              <option >04 Cuarta</option>
              <option >05 Dama</option>
            </select>
          </div>
          <div class="mb-3 border border-success">
            <label for="exampleInputPassword1" class="form-label">Fecha de la reserva y Hora</label>
            <input type="datetime-local" class="form-control"
              name="fechaReserva"
              id="exampleInputPassword1">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="summit" name="btn_reservar" class="btn btn-primary">Reservar</button>
        </div>     
      </form>
    </div>
  </div>
</div>
<script>
var fechaInput = document.getElementById('exampleInputPassword1');
fechaInput.addEventListener('change', function() {
  var fechaSeleccionada = new Date(fechaInput.value);
  var diaSemana = fechaSeleccionada.getDay();
  if (diaSemana === 5 || diaSemana === 6 || diaSemana === 0) {
    console.log('Fecha válida');
  } else {
    console.log('Seleccione una fecha válida (viernes, sábado o domingo)');
    fechaInput.value = '';
  }
});






</script>
<?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>