<?php
require 'ConexionCs.php';

class Jugador extends Conexion{

    function __construct(){
        parent::__construct();
        return $this; 
    }
    
    public function buscarJugadoresEnaex(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlBuscarclubs = "SELECT idUsuario, nombre, apellido, correo 
        FROM usuario WHERE `club`=1";
        $consultaclub = $this->prepare($sqlBuscarclubs);
        $consultaclub->execute();
        $consultaclub->bind_result($idUsuario, $nombre, $apellido, $correo);  
        $resultSet = $consultaclub->get_result();
        $data2 = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data2);
    }
    public function buscarJugadoresAbemarle(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlBuscarclubs = "SELECT idUsuario, nombre, apellido, correo 
        FROM usuario WHERE `club`=2";
        $consultaclub = $this->prepare($sqlBuscarclubs);
        $consultaclub->execute();
        $consultaclub->bind_result($idUsuario, $nombre, $apellido, $correo);  
        $resultSet = $consultaclub->get_result();
        $data2 = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data2);
    }
    public function buscarJugadoresCyenCapacitaciones(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlBuscarclubs = "SELECT idUsuario, nombre, apellido, correo 
        FROM usuario WHERE `club`=3";
        $consultaclub = $this->prepare($sqlBuscarclubs);
        $consultaclub->execute();
        $consultaclub->bind_result($idUsuario, $nombre, $apellido, $correo);  
        $resultSet = $consultaclub->get_result();
        $data2 = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data2);
    }
    public function buscarJugadoresLadies(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlBuscarclubs = "SELECT idUsuario, nombre, apellido, correo 
        FROM usuario WHERE `club`=4";
        $consultaclub = $this->prepare($sqlBuscarclubs);
        $consultaclub->execute();
        $consultaclub->bind_result($idUsuario, $nombre, $apellido, $correo);  
        $resultSet = $consultaclub->get_result();
        $data2 = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data2);
    }
        
    public function buscarJugador(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlBuscarUser = "SELECT idUsuario, nombre, apellido, correo, telefono, club FROM usuario WHERE idUsuario=?";
        $consultaUser = $this->prepare($sqlBuscarUser);
        $idUsuario = $data['idUsuario'];
        $consultaUser->bind_param('i', $idUsuario); 
        $consultaUser->execute();
        $consultaUser->bind_result($idUsuario, $nombre, $apellido, $correo, $telefono, $club);  
        $consultaUser->fetch();
        $consultaUser->close();
        
        if (!empty($consultaUser)) {
            $info = array(
                'estado' => true,
                'idUsuario' => $idUsuario,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'correo' => $correo,
                'telefono' => $telefono,
                'club' => $club
            );
        } else {
            $info = array(
                'estado' => false,
                'mensaje' => "<div class='alert alert-danger'>NO SE HAN USUARIOS CON ESE ID </div>"
            );
        }
        return json_encode($info);
    }
    public function ActualizarJugador(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlCuantos = "SELECT COUNT(usuario.idUsuario) AS 'cuantos' FROM usuario WHERE usuario.correo=?";
        $consultaCuantos = $this->prepare($sqlCuantos);
        $correo = $data['correo'];
        $consultaCuantos->bind_param('s',$correo);
        $consultaCuantos->execute();
        $consultaCuantos->bind_result($cuantosResultado);
        $consultaCuantos->fetch();
        $consultaCuantos->close();
        

        if ($cuantosResultado != 0) {

            // var_dump($consultaCuantos);exit;
            $sqlModificar = "UPDATE usuario SET nombre = ?, apellido = ?, correo = ?, telefono = ? WHERE usuario.idUsuario = ?;";
            $ModificarUser = $this->prepare($sqlModificar);
            $idUsuario = $data['idUsuario'];
            $nombre = utf8_decode($data['nombre']);
            $apellido = utf8_decode($data['apellido']);
            $correo = utf8_decode($data['correo']);
            $telefono = utf8_decode($data['telefono']);
            $ModificarUser->bind_param('ssssi', $nombre, $apellido, $correo, $telefono, $idUsuario);
            $ModificarUser->execute();
            $ModificarUser->close();
        
            $info = array(
                'estado' => true,
                'mensaje' => "<div class='alert alert-primary h5'>USUARIO MODIFICADO CORRECTAMENTE</div>",
                'idUsuario' => $idUsuario

            );
        } else {
            $info = array(
                'estado' => false,
                'mensaje' => "<div class='alert alert-primary h5'>ERROR AL MODIFICAR USUARIO</div>"
            );
        }

        return json_encode($info);
    }   
}
$jugadores = new Jugador;
?>