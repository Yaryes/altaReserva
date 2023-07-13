<?php
include('recursos/template/header.php');

?> 
<style>
    .imagen-aumentada {
        width: 15%; /* Ajusta el valor para aumentar o disminuir el tamaño */
        height: auto;
    }
</style>  
  <nav class="navbar navbar-expand-lg rounded" style="background-color: rgba(222, 222, 221, 0.913);">
    <div class="container-fluid" >
      <div class="collapse navbar-collapse d-lg-flex">
        
      <div class="container-fluid ">
        <div class="collapse navbar-collapse d-lg-flex">
        <a class="navbar-brand col-lg-3 me-0 img-fluid " href="#"><img src="img/logo2.png" 
        class="imagen-aumentada">
        <ul class="navbar-nav col-lg-5 justify-content-lg-center ">
        <li class="">
        <a class="" aria-current="page" href="">
          <p class="h5">📍 Av. República de Croacia, Antofagasta</p>
        </a>
        </li>
        <li class="nav-item">
            
        </li>
        </ul>
        </div>
        </div>
      </div>
    </div>
  </nav>
  <img src="img/fondo1cancha.avif"  width="100%" height="100%" >
  <div class="card-img-overlay position-absolute top-0 start-50 translate-middle-x"
    style="margin-top: 100px;">
    <div class="row justify-content-center">
      <div class="col-8 ">
      <form action="recursos/funciones/login.php" class="mt-2" method="post">
        <div class="card-login text-dark shadow-lg" style="background-color: rgba(211, 211, 211, 0.815);">
          <div class="card-header h2 text-center">Inicio de Sesión</div>
          <div class="card-body">
            <div class="form-group mt-3">
                <label for="correo">Correo :</label>
                <input required type="text"  class="form-control mt-2" placeholder="Ingrese usuario" name="correo" id="correo">
            </div>    
            <div class="form-group mt-2">
                <label for="pass">Contraseña :</label>
                <input required type="password" class="form-control mt-2" placeholder="Ingrese contraseña"  name="pass" id="pass">
            </div>
            <input class="btn btn-success btn-block mt-3" type="submit" value="Ingresar"  name="btn_login" >       
          </div>
        </div>
      </form>  
      </div>
    </div>   
  </div>

<?php
include('recursos/template/footer.php');
?>