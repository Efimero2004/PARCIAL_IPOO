<?php
include_once "Moto.php";
class Venta{
    private $numero;
    private $fecha;
    private $obj_cliente;
    private $col_motos;
    private $precioFinal;

    public function __construct($numero,$fecha,$obj_cliente)
    {
        $this->numero=$numero;
        $this->fecha=$fecha;
        $this->obj_cliente=$obj_cliente;
        $this->col_motos=[];
        $this->precioFinal=0;
    }

    public function setNumero($numero){
        $this->numero=$numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setObj_cliente($obj_cliente){
        $this->obj_cliente=$obj_cliente;
    } 

    public function getObj_cliente(){
        return $this->obj_cliente;
    }

    public function setCol_motos($col_motos){
        $this->col_motos=$col_motos;
    }

    public function getCol_motos(){
        return $this->col_motos;
    }

    public function setPrecioFinal($precioFinal){
        $this->precioFinal=$precioFinal;
    }

    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    public function __toString()
    {
        $cadenaMotos="";
        $coleccionMotos=$this->getCol_motos();
        foreach($coleccionMotos as $moto){
            $cadenaMotos.=$moto->__toString()."\n ";
        }

        return ("VENTA: \n "."numero:".$this->getNumero()."\n "
        ."fecha:".$this->getFecha()."\n "
        ."Cliente".$this->getObj_cliente()->__toString()."\n "
        ."Moto/s".$cadenaMotos."\n "
        ."Precio Final:".$this->getPrecioFinal()."\n ");
    }

    public function IncorporarMoto($objMoto){
        $activa=$objMoto->getActiva();
        if ($activa) {
            $activa=true;
            $colMotos=$this->getCol_motos();
            $colMotos[]=$objMoto;
            $this->setCol_motos($colMotos);
            
            $precio=$objMoto->getCosto();
            $precioFinal=$this->getPrecioFinal();
            $this->setPrecioFinal($precio+$precioFinal);

        }

        
        

        return $activa;
    }

}