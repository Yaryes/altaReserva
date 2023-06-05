<?php
session_start();
// include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navAdm.php');
if($_SESSION ['user']['nombre']!=null){
?>

<div class="container mt-5 pt-4">
    <div class="row align-items-end mb-4 pb-2">
        <div class="col-md-8">
            <div class="section-title text-center text-md-start">
                <h3 class="title mb-4">Seleccione el Club</h3>
                <p class="text-muted mb-0 para-desc">Start work with Leaping. Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p>
            </div>
        </div><!--end col-->

        <div class="col-md-4 mt-4 mt-sm-0 d-none d-md-block">
            <div class="text-center text-md-end">
                <a href="#" class="text-primary">View more Jobs <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fea icon-sm"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                <div><img src="img/escudo.jpg" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                    <h5>Anaex</h5>
                    <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                        <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> USA</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="#" class="btn btn-primary">Ver Jugadores</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                <div><img src="img/escudo2.jpg"  alt="" class="avatar-md rounded-circle img-thumbnail w-25" /></div>
                    <h5>Abemarle</h5>
                    <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                        <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> USA</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="#" class="btn btn-primary">Ver Jugadores</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                <div><img src="img/escudo3.jpg"  alt="" class="avatar-md rounded-circle img-thumbnail w-25" /></div>
                    <h5>Cyen Capacitaciones</h5>
                    <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                        <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> USA</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="#" class="btn btn-primary">Ver Jugadores</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                <div><img src="img/escudo4.jpg"  alt="" class="avatar-md rounded-circle img-thumbnail w-25" /></div>
                    <h5>Ladies</h5>
                    <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                        <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> USA</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="#" class="btn btn-primary">Ver Jugadores</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-12 mt-4 pt-2 d-block d-md-none text-center">
            <a href="#" class="btn btn-primary">View more Jobs <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fea icon-sm"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
        </div><!--end col-->
    </div><!--end row-->
</div>
<?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>