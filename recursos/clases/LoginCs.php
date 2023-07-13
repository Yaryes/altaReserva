<?php
require 'ConexionCs.php';

class Login extends Conexion{

    function __construct(){
        parent::__construct();
        return $this; 
    }

    public function login(){
       
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sql = "SELECT idUsuario, nombre, apellido, correo, pass, perfil, club FROM usuario WHERE correo=?;";
        $consulta = $this->prepare($sql);
        $consulta->bind_param('s',$correo);
        $correo = $data ['correo']; 
        $pass = $data ['pass'];
        $this->execute($consulta);
        $consulta->bind_result($idUsuario, $nombre, $apellido, $correo, $pass_bd, $perfil, $club);
        $consulta->fetch();
        if ($pass==$pass_bd) {
            $info=array(
                'estado' => true,
                'idUsuario' => $idUsuario,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'correo' => $correo,
                'pass' => $pass,
                'perfil' => $perfil,
                'club' => $club
            );
        }else{
            $info=array(
                'estado'=> false,
                'mensaje'=> '<b>El usuario NO es VALIDO</b>'
            );
        }
        return json_encode($info);
    }

}
$Logins = new Login;
?>