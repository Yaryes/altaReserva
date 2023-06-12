<?php
session_start();
include('recursos/template/header.php');
include('recursos/template/navAdm.php');
if($_SESSION ['user']['nombre']!=null){
?>

<div class="container mt-2 pt-4">
    <div class="row align-items-end ">
        <div class="col-md-8">
            <div class="section-title text-center text-md-start">
                <p class="h3">Seleccione el Club </p>
             </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mt-1 p-3">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-5">
                    <form  action="recursos/funciones/jugadores_fx.php" method="post" >
                        <div>
                            <img src="img/escudo4.jpg" alt="" class="avatar-md w-25 rounded-circle img-thumbnail" />
                        </div>
                        <b><h5>Enaex</h5></b>
                        <input type="hidden" name="clubReserva" value="Enaex">
                        <div class="mt-3">
                            <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> 📍 Av. República de Croacia, Antofagasta</span>
                        </div>
                        <div class="mt-3">
                            <button type="summit" name="btn_jugEnaex" value="btn_jugEnaex" class="btn btn-dark">Ver Jugadores</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6 mt-1 p-3">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                    <form  action="recursos/funciones/jugadores_fx.php" method="post" >
                        <div>
                            <img src="img/escudo2.jpg" alt="" class="avatar-md w-25 rounded-circle img-thumbnail" />
                        </div>
                        <b><h5>Abemarle</h5></b>
                        <div class="mt-3 mb-4 ">
                            <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> 📍 Av. República de Croacia, Antofagasta</span>
                        </div>
                        <div class="mt-3 mb-4 ">
                            <!-- <a href="jugadoresClub.php">Button</a> -->
                            <button type="summit" name="btn_jugAbemarle" class="btn btn-dark">Ver Jugadores</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6 mt-1 p-3">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                    <form  action="recursos/funciones/.php" method="post" >
                        <div>
                            <img src="img/escudo3.jpg" alt="" class="avatar-sm w-25 rounded-circle img-thumbnail" />
                        </div>
                        <b><h5>Cyen Capacitaciones</h5></b>
                        <div class="mt-3">
                            <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> 📍 Av. República de Croacia, Antofagasta</span>
                        </div>
                        <div class="mt-3">
                            <button type="summit" name="btn_jugCyen" class="btn btn-dark">Ver Jugadores</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6 mt-1 p-3 ">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                    <form  action="recursos/funciones/jugadores_fx.php" method="post" >
                        <div>
                            <img src="img/escudo.jpg" alt="" class="avatar-sm mb-4 rounded-circle img-thumbnail" />
                        </div>
                        <b><h5>Ladies</h5></b>
                        <div class="mt-3 mb-4">
                            <span class="text-muted d-block "><i class="fa fa-map-marker" aria-hidden="true"></i> 📍 Av. República de Croacia, Antofagasta</span>
                        </div>
                        <div class="mt-3 mb-4">
                            <button type="summit" name="btn_jugLadies" class="btn btn-dark">Ver Jugadores</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--end row-->
</div>
<?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>