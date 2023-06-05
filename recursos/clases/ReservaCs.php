<?php
require 'ConexionCs.php';

class Reserva extends Conexion{

    function __construct(){
        parent::__construct();
        return $this; 
    }

    public function guardarReserva(){    
      
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();

        $sqlReseva = "INSERT INTO `reserva` (idReserva, cantidad_persona, fechaReserva, serieReserva, clubReserva) 
            VALUES (NULL,?,?,?,?);";
        $ingresarReserva = $this->prepare($sqlReseva);
        $cantidad_persona = utf8_decode($data['cantidad_persona']);
        $fechaReserva = utf8_decode($data['fechaReserva']);
        $serieReserva = utf8_decode($data['serieReserva']);
        $clubReserva = utf8_decode($data['clubReserva']);
        $ingresarReserva->bind_param('isss', $cantidad_persona, $fechaReserva, $serieReserva, $clubReserva);
        $ingresarReserva->execute();
        $ingresarReserva->close();
        //RESCATAMOS EL ULTIMO ID INGRESADO PARA REENVIARLO HACIA LA VISTA
        $sqlUltimo = "SELECT MAX(`idReserva`) AS 'Ultimo' FROM reserva;";
        $consultaUltimo = $this->prepare($sqlUltimo);
        $consultaUltimo->execute();
        $consultaUltimo->bind_result($ultimo);  
        $consultaUltimo->fetch();
        if ($ultimo == "") {
            $info=array(
                'estado'=> false,
                'fechaReserva' => $fechaReserva,
                'mensaje'=> '<b>LA RESERRVA NIO FUE REALIZADA </b>'
            );        
        }else{
            $info=array(
                'estado'=> true,
                'ultimo'=> $ultimo,
                'fechaReserva' => $fechaReserva,
                'mensaje'=> '<b>LA RESERRVA FUE REALIZADA </b>'
            ); 
        return json_encode($info);
        }
    }

    public function todasReserva(){     


        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlCargarReservas = "SELECT * FROM reserva;";
        $consultaReservas = $this->prepare($sqlCargarReservas);
        $consultaReservas->execute();
        $consultaReservas->bind_result($idReserva, $clubReserva, $serieReserva, $cantidad_persona, $fechaReserva); 
        $resultSet = $consultaReservas->get_result();
        
        $data = $resultSet->fetch_all(MYSQLI_ASSOC);
        // var_dump($data);
        return json_encode($data);
      
      
    }
}
//CREAMOS NUESTRO NUEVO OBJETO
$reservas = new Reserva;