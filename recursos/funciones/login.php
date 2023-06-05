<?php
session_start();
include('../clases/LoginCs.php');
if (isset($_POST['btn_login'])){
    $correo =  $_POST['correo'];
    $pass = $_POST['pass'];
    $arregloLogin = array(
        'correo' => $correo,
        'pass' => $pass
);

$resultado = json_decode($Logins->login($arregloLogin));

if ($resultado->estado == true){
    if($resultado->perfil == "Administrador"){
        $_SESSION['user']['nombre']= $resultado->nombre;
        header('location:../../inicioAdm.php');
    }else{
        header('location:../../inicioUser.php');
    }
}else{
 header('location:../../index.html');
}
}
?>