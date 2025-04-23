<?php
include_once "Aerolinea.php";
class Aeropuerto{


    private $denominacion;
    private $direccion;
    private $col_aerolineas;

    public function __construct($denominacion,$direccion,$col_aerolineas)
    {
        $this->denominacion=$denominacion;
        $this->direccion=$direccion;
        $this->col_aerolineas=$col_aerolineas;
    }

    public function setDenominacion($denominacion){
        $this->denominacion=$denominacion;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }

    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }

    public function setColeccionAerolineas($pcol_aerolineas){
        $this->col_aerolineas=$pcol_aerolineas;

    }

    public function getColeccionAerolineas(){
        return  $this->col_aerolineas;
    }
    
    public function __toString()
    {   $coleccionAerolineas=$this->getColeccionAerolineas();
        $cadenaAerolineas="";
        foreach($coleccionAerolineas as $obj_aerolinea){
        $cadenaAerolineas.=$obj_aerolinea->__toString()."\n ";
        }
        
        return ("Aeropuerto denominacion:".$this->getDenominacion()."\n "
    ."direccion:".$this->getdireccion()."\n "
    ."Aerolineas:".$cadenaAerolineas."\n "); 
    }

    public function retornarVuelosAerolinea($obj_aerolinea){
        $col_vuelo_aerolinea = $obj_aerolinea->getColeccionVuelos();
       
        return $col_vuelo_aerolinea;

    }

    

}