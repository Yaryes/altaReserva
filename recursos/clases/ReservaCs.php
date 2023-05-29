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

        var_dump($ingresarReserva);exit;
        //RESCATAMOS EL ULTIMO ID INGRESADO PARA REENVIARLO HACIA LA VISTA
        $sqlUltimo = "SELECT MAX(id) AS 'ultimo' FROM usuario;";
        $consultaUltimo = $this->prepare($sqlUltimo);
        $consultaUltimo->execute();
        
        $consultaUltimo->bind_result($ultimo);  
        $consultaUltimo->fetch();
        $consultaUltimo->close();
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
//CREAMOS NUESTRO NUEVO OBJETO
$reserva = new Reserva;