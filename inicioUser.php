<?php
session_start();
include('recursos/template/header.php');
?> 

<!-- NAV USUARIO -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
      <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
    
        <a class="navbar-brand col-lg-3 me-0" href="#"><img src="img/icon.jpg" width="40" height="40" style="border-radius: 10px;">
          Alta Reserva</a>
        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="calendario.html">
              Calendario de Reserva
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactanos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Tu cuenta</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
              <li><a class="dropdown-item" href="#">Cambiar Club</a></li>
              <li><a class="dropdown-item" href="#">Reservas en curso</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-lg-flex col-lg-3 justify-content-lg-end">
          <a class="btn btn-danger" href="index.html">Salir</a>
        </div>
      </div>
    </div>
  </nav>
<!-- CANCHAS -->
<div class="container shadow-lg">
  <div class="row m-2 p-5">
    <div class="col-12 text-center mb-2">
      <h3>Reserva de canchas</h3>
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;" >
        <img src="img/cancha1.jpg" class="card-img-top border border-secundary" alt="...">
        <div class="card-body">
          <p class="card-tevxt">
            <ul>
              <h4>Cancha Nº1</h4>
              <li> Longitud: 23,76 metros. Anchura: 8,23 metro</li>
              <li> Altura de la red en el centro: <b>0,914 metros</b></li>
              <li> Piso de cancha: <b>tartán</b></li>
            </ul>
          </p>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Reservar Cancha Nº1
          </button>
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Reserva de Cancha Nª1</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
              <!-- MODULO DE RESERVA -->
              
              <form  action="recursos/funciones/reserva.php" method="post" >
                <div class="modal-body">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" 
                        name="nombre" class="form-label">Nombre del Jugador
                      </label>
                      <input type="email" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp">       
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
      </div>
    </div> 
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img src="img/cancha3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-tevxt">
            <ul>
              <h4> Cancha Nº2</h4>
              <li> Longitud: 23,76 metros. Anchura: 8,23 metro</li>
              <li> Altura de la red en el centro: <b>0,914 metros</b>  </li>
              <li> Piso de cancha: <b>tartán</b></li>
            </ul>
          </p>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Reservar Cancha Nº2
          </button>
           <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Reserva de Cancha Nº2 </h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              <!-- MODULO DE RESERVA -->
              <form  action="recursos/funciones/reserva.php" method="post" >
                <div class="modal-body">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" 
                        name="nombre" class="form-label">Nombre del Jugador
                      </label>
                      <input type="email" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp">       
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
        </div>
    </div> 
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img src="img/cancha2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-tevxt">
            <ul>
              <h4> Cancha Nº3</h4>
              <li> Longitud: 23,76 metros. Anchura: 8,23 metro</li>
              <li> Altura de la red en el centro: <b>0,914 metros</b>  </li>
              <li> Piso de cancha: <b>tartán</b></li>
            </ul>
          </p>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Reservar Cancha Nº3
          </button>
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- DISEÑO LOGIN -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Punny headline</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
<?php
include('recursos/template/footer.php');
?>
