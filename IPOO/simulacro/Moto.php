<?php
class Moto{

private $codigo;
private $costo;
private $anioFabricacion;
private $descripcion;
private $porcentajeIncAnual;
private $activa;

public function __construct($codigo,$costo,$anioFabricacion,$descripcion,$porcentajeIncAnual,$activa)
{   $this->codigo =$codigo ;
    $this->costo =$costo ;
    $this->anioFabricacion =$anioFabricacion;
    $this->descripcion =$descripcion ;
    $this->activa =$activa;
    $this->porcentajeIncAnual=$porcentajeIncAnual;

}

public function setCodigo($codigo){
    $this->codigo=$codigo;
}
public function getCodigo(){
    return $this->codigo;
}

public function setCosto($costo){
    $this->costo=$costo;
}
public function getCosto(){
    return $this->costo;
}

public function setAnioFabricacion($anioFabricacion){
    $this->anioFabricacion=$anioFabricacion;
}
public function getAnioFabricacion(){
    return $this->anioFabricacion;
}
public function setDescripcion($descripcion){
    $this->descripcion=$descripcion;
}
public function getDescripcion(){
    return $this->descripcion;
}

public function setActiva($activa){
    $this->activa=$activa;
}
public function getActiva(){
    return $this->activa;
}

public function setPorcentajeIncAnual($porcentajeIncAnual){
    $this->porcentajeIncAnual=$porcentajeIncAnual;
}
public function getPorcentajeIncAnual(){
    return $this->porcentajeIncAnual;
}

public function __toString()
{
    return ("MOTO:\n Codigo:".$this->getCodigo()."\n "
    ."Costo:".$this->getCosto()."\n "
    ."Año de Fabricacion:".$this->getAnioFabricacion()."\n "
    ."Descripcion".$this->getDescripcion()."\n "
    ."Activa".$this->getActiva()."\n "
    ."Porcentaje de Incremento Anual:".$this->getPorcentajeIncAnual()."\n ");
}



public function darPrecioVenta(){
    $_venta=0;
    $anioActual=2025;
    if($this->activa==true){
        $_compra=$this->getcosto();
        $anio=($this->getAnioFabricacion()-$anioActual);
        $por_inc_anual=$this->getPorcentajeIncAnual();
        $_venta=$_compra+$_compra*($anio*$por_inc_anual);
    }else{
        $_venta=-1;
    }
    return $_venta;
}



}