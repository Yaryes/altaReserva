<?php
session_start();
if($_SESSION ['user']['nombre']!=null){
include('recursos/template/header.php');
include('recursos/template/navUser.php');
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
} else {
  $msg = "";
}

?> 

<div class="row ">
<img src="img/pista-tenis.jpg"  width="100%">
  <div class="container">

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal text-light">Gestion de Actividades</h1>
          <p class="lead fw-normal text-light">El deporte y la sana competencia fortalece el alma y el espiritu</p>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
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
