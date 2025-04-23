<?php
include_once "Persona.php";
class Vuelo{

    private $numero;
    private $importe;
    private $fecha;
    private $destino;
    private $horaArribo;
    private $horaPartida;
    private $cantidadAsientosTotal;
    private $cantidadAsientosDisp;
    private $obj_persona;


    public function __construct($numero,$importe,$fecha,$destino,$horaArribo,$horaPartida
    ,$cantidadAsientosTotal,$cantidadAsientosDisp,$obj_persona){
        $this->numero=$numero;
        
    }



    public function setCantidadAsientosDisp($cantAsientosDisp){
        $this->cantidadAsientosDisp=$cantAsientosDisp;

    }

    public function getCantidadAsientosDisp(){
        return  $this->cantidadAsientosDisp;
    }
    
    public function getFecha(){
        return $this->fecha;
    }
    
    public function getDestino(){
        return $this->destino;
    }
    
    public function getHoraPartida(){
        return $this->horaPartida;
    }
    


    public function asignarAsientosDisponibles($cant_pasajeros){
        $respuesta=false;
        $cant_disp=$this->getCantidadAsientosDisp();
        if($cant_pasajeros<=$cant_disp){
            $this->setCantidadAsientosDisp($cant_disp-$cant_pasajeros);

            $respuesta=true;
        }
        return $respuesta;
    }



}