<?php
require 'ConexionCs.php';

class Login extends Conexion{

    function __construct(){
        parent::__construct();
        return $this; 
    }

    public function login(){
       
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sql = "SELECT nombre, apellido, correo, pass, perfil FROM usuario WHERE correo=?";
        $consulta = $this->prepare($sql);
        $consulta->bind_param('s',$correo);
        $correo = $data ['correo']; 
        $pass = $data ['pass'];
        $this->execute($consulta);
        $consulta->bind_result($nombre, $apellido, $correo, $pass_bd, $perfil);
        $consulta->fetch();
        if ($pass==$pass_bd) {
            $info=array(
                'estado' => true,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'correo' => $correo,
                'pass' => $pass,
                'perfil' => $perfil,
            );
        }else{
            $info=array(
                'estado'=> false,
                'mensaje'=> '<b>El usuario NO es VALIDO </b>'
            );
        }
        return json_encode($info);
    }

}
$Logins = new Login;
?>