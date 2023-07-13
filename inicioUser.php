<?php
session_start();
if($_SESSION ['user']['nombre']!=null){
include('recursos/template/header.php');
include('recursos/template/navUser.php');

?> 
  <div class="card bg-dark text-white">
    <img src="img/pista-tenis.jpg" wight="100%" >
    <div class="card-img-overlay text-center mt-5">
    <p class="card-title fw-normal h1 mt-5">Reserva tu hora <?php echo $_SESSION ['user']['nombre'];?>🥎</p>
      <p class="card-text h5 mt-5" >El deporte y la sana competencia fortalece el alma y el espiritu</p>
      <p class="">"Practicar tenis es mucho más que un ejercicio físico, es un estilo de vida que 
        combina técnica, estrategia y pasión en cada golpe."</p>
    </div>
  </div>
<?php

include('recursos/template/footer.php');
}else{
    header('Location: index.html'); 
  }

?>
