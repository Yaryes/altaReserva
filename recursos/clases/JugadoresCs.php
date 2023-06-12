<?php
require 'ConexionCs.php';

class Jugador extends Conexion{

    function __construct(){
        parent::__construct();
        return $this; 
    }
    
    public function buscarJugadoresEnaex(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlBuscarclubs = "SELECT nombre, apellido, correo, club 
        FROM usuario WHERE `club`=1";
        $consultaclub = $this->prepare($sqlBuscarclubs);
        $consultaclub->execute();
        $consultaclub->bind_result($nombre, $apellido, $correo, $club);  
        $resultSet = $consultaclub->get_result();
        $data2 = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data2);
    }
    public function buscarJugadoresAbemarle(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlBuscarclubs = "SELECT nombre, apellido, correo, club 
        FROM usuario WHERE `club`=2";
        $consultaclub = $this->prepare($sqlBuscarclubs);
        $consultaclub->execute();
        $consultaclub->bind_result($nombre, $apellido, $correo, $club);  
        $resultSet = $consultaclub->get_result();
        $data2 = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data2);
    }
    public function buscarJugadoresCyenCapacitaciones(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlBuscarclubs = "SELECT nombre, apellido, correo, club 
        FROM usuario WHERE `club`=3";
        $consultaclub = $this->prepare($sqlBuscarclubs);
        $consultaclub->execute();
        $consultaclub->bind_result($nombre, $apellido, $correo, $club);  
        $resultSet = $consultaclub->get_result();
        $data2 = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data2);
    }
    public function buscarJugadoresLadies(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlBuscarclubs = "SELECT nombre, apellido, correo, club 
        FROM usuario WHERE `club`=4";
        $consultaclub = $this->prepare($sqlBuscarclubs);
        $consultaclub->execute();
        $consultaclub->bind_result($nombre, $apellido, $correo, $club);  
        $resultSet = $consultaclub->get_result();
        $data2 = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data2);
    }
}
$jugadores = new Jugador;
?>