<?php
require 'ConexionCs.php';

class Reserva extends Conexion{

    function __construct(){
        parent::__construct();
        return $this; 
    }

    public function guardarReserva(){    
      
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlReseva = "INSERT INTO reserva (idReserva, clubReserva, serieReserva, cantidad_persona, fechaReserva, estado,
        id, cancha) VALUES (NULL,?,?,?,?,?,?,?);";
        $ingresarReserva = $this->prepare($sqlReseva);
        $cantidad_persona = utf8_decode($data['cantidad_persona']);
        $fechaReserva = utf8_decode($data['fechaReserva']);
        $serieReserva = utf8_decode($data['serieReserva']);
        $clubReserva = utf8_decode($data['clubReserva']);
        $id = utf8_decode($data['id']);
        $cancha = utf8_decode($data['cancha']);
        $estado = utf8_decode($data['estado']);
        $ingresarReserva->bind_param('sssssii', $clubReserva, $serieReserva, $cantidad_persona, $fechaReserva, $estado, $id, $cancha);
        $ingresarReserva->execute();
        $ingresarReserva->close();
        //RESCATAMOS EL ULTIMO ID INGRESADO PARA REENVIARLO HACIA LA VISTA
        $sqlUltimo = "SELECT MAX(`idReserva`) AS 'Ultimo' FROM reserva;";
        $consultaUltimo = $this->prepare($sqlUltimo);
        $consultaUltimo->execute();
        $consultaUltimo->bind_result($ultimo);  
        $consultaUltimo->fetch();
        // var_dump($ultimo);exit;
        if ($ultimo == "") {
            $info=array(
                'estado2'=> false,
                'fechaReserva' => $fechaReserva,
                'mensaje'=> '<b>LA RESERRVA NO FUE REALIZADA </b>'
            );        
        }else{
            $info=array(
                'estado2'=> true,
                'ultimo'=> $ultimo,
                'fechaReserva' => $fechaReserva,
                'mensaje'=> '<b>LA RESERRVA FUE REALIZADA </b>'
            ); 
        // var_dump($info);exit;
        return json_encode($info);
        }
    }

    public function todasReserva(){     


        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
      
        $sqlCargarReservas = "SELECT idReserva, clubReserva, serieReserva, cantidad_persona, fechaReserva FROM reserva;";
        
        $consultaReservas = $this->prepare($sqlCargarReservas);
        $consultaReservas->execute();
        $consultaReservas->bind_result($idReserva, $clubReserva, $serieReserva, $cantidad_persona, $fechaReserva ); 
   
        $resultSet = $consultaReservas->get_result();
       
        
        $data = $resultSet->fetch_all(MYSQLI_ASSOC);

        return json_encode($data);
      
      
    }
    public function todasReserva2(){     


        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
      
        $sqlCargarReservas = "SELECT idReserva, clubReserva, serieReserva, cantidad_persona, fechaReserva, id FROM reserva;";
        
        $consultaReservas = $this->prepare($sqlCargarReservas);
        $consultaReservas->execute();
        $consultaReservas->bind_result($idReserva, $clubReserva, $serieReserva, $cantidad_persona, $fechaReserva, $id ); 
   
        $resultSet = $consultaReservas->get_result();
       
        
        $data = $resultSet->fetch_all(MYSQLI_ASSOC);

        return json_encode($data);
      
      
    }
    public function todasReservaUser(){     
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlCargarReservas = "SELECT idReserva, id, serieReserva, cantidad_persona, 
        fechaReserva FROM reserva;";
        $consultaReservas = $this->prepare($sqlCargarReservas);
        $consultaReservas->execute();
        $consultaReservas->bind_result($idReserva, $id, $serieReserva, 
        $cantidad_persona, $fechaReserva); 
        $resultSet = $consultaReservas->get_result();
        $data = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data);
    }
    // METODO UTILIZADO PARA BUSCAR LAS CANCHAS REALIZADAS DEL JUGADOR 
    public function todasReservaRealizadas(){     
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlReservasRealizadas = "SELECT idReserva, estado, id, cancha, fechaReserva FROM reserva WHERE estado = 'REALIZADA'";
        $consultaReservasRealizadas = $this->prepare($sqlReservasRealizadas);
        $consultaReservasRealizadas->execute();
        $consultaReservasRealizadas->bind_result($idReserva, $id, $estado, $cancha, $fechaReserva); 
        $resultSet = $consultaReservasRealizadas->get_result();
        $data = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data);
    }
    public function eliminarReserva(){     

        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
       
        
        $data['idReserva'] = intval($data['idReserva']) ;
        //  var_dump($data);exit;
        
        $sqlEliminar = "DELETE FROM reserva WHERE reserva.idReserva =?;";
        $reservaEliminar = $this->prepare($sqlEliminar);
        $idReserva = utf8_decode($data['idReserva']);
        // var_dump($reservaEliminar);exit;
        $reservaEliminar->bind_param('i', $idReserva);
        $reservaEliminar->execute(); 
        $infoEliminar = array(
            'estado' => true,
            'mensaje' => "<div class='alert alert-primary h5'>Reserva Eliminada Correctamente</div>"
        );

        return json_encode($infoEliminar);
    }
}
//CREAMOS NUESTRO NUEVO OBJETO
$reservas = new Reserva;