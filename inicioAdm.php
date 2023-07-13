<?php
session_start();
if($_SESSION ['user']['nombre']!=null){
include('recursos/template/header.php');
include('recursos/template/navAdm.php');
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
} else {
  $msg = "";
}
?> 
<div class="card bg-dark text-white ">
  <img src="img/pista-tenis.jpg" wight="100%" >
  <div class="card-img-overlay text-center mt-5">
    <p class="card-title fw-normal h1 mt-5">Gestion de Actividades</p>
  
  <p class="card-text h5 mt-3" >El deporte y la sana competencia fortalece el alma y el espiritu</p>
  </div>  
</div>
<?php
include('recursos/template/footer.php');
}else{
  header('Location: index.html'); 
}
?>