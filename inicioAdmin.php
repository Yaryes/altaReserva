<?php
session_start();
include('recursos/template/header.php');
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark bg-gradient">
  <div class="container-fluid">
   <img src="img/icon.jpg"  width="60" height="54" class=" border border-primary shadow-lg d-inline-block align-text-top rounded-circle">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Usuarios Inscritos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mantenimiento</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h3>BIENVENIDO: </h3>
    <h3>PERFIL: </h3>
    <div class="row">
        <div class="col-12">
        </div>
    </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  <?php
include('recursos/template/footer.php');
?>