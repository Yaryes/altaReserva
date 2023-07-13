<?php
require 'ConexionCs.php';

class Club extends Conexion{

    function __construct(){
        parent::__construct();
        return $this; 
    }

    public function buscarPorIdClub(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        // var_dump($data);exit;
        $sqlBuscarclubsID = "SELECT nombreCliub FROM 'alta_reserva'.'club' WHERE idClub=4";
        $consultaclubID = $this->prepare($sqlBuscarclubsID);
        $this->execute($consultaclubID);
        $consultaclubID->bind_result($nombreCliub); 
        $info=array(
            'nombreCliub' => $nombreCliub
        );

        return json_encode($info);
    }
}
$Clubs = new Club;
