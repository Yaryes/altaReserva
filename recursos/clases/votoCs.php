<?php
require 'ConexionCs.php';

class Voto extends Conexion{

    function __construct(){
        parent::__construct();
        return $this; 
    }

    public function ingresarVoto(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlVoto = "INSERT INTO voto (idVoto, punto, idC) VALUES (NULL,?,?);";
        $ingresarvoto = $this->prepare($sqlVoto);
        $punto = utf8_decode($data['punto']);
        $idC = utf8_decode($data['idC']);
        $ingresarvoto->bind_param('ii',  $punto, $idC);
        $ingresarvoto->execute();
        $ingresarvoto->close();
        // var_dump($ultimo);exit;
        $sqlUltimo = "SELECT MAX(`idVoto`) AS 'Ultimo' FROM voto;";
        $consultaUltimo = $this->prepare($sqlUltimo);
        $consultaUltimo->execute();
        $consultaUltimo->bind_result($ultimo);  
        $consultaUltimo->fetch();
        if ($ultimo == "") {
            $info=array(
                'estado'=> false,
                'mensaje'=> '<b>LA VOTO NO FUE REALIZADA </b>'
            );        
        }else{
            $info=array(
                'estado'=> true,
                'ultimo'=> $ultimo,
                'mensaje'=> '<b>LA VOTO FUE REALIZADA </b>'
            ); 
        return json_encode($info);
    }
}
    
    public function selectVotos(){
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $sqlAllVoto = "SELECT * FROM `voto`;";
        $selectVotos = $this->prepare($sqlAllVoto);
        $selectVotos->execute();
        $resultSet = $selectVotos->get_result();
        $data2 = $resultSet->fetch_all(MYSQLI_ASSOC);
        return json_encode($data2);
    }
}
$Votos = new Voto;
