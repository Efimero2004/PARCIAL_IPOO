<?php 
class Cliente{

private $nombre;
private $apellido;
private $baja;
private $tipodoc;
private $numerodoc;

public function __construct($nombre,$apellido,$baja,$tipodoc,$numerodoc) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->baja = $baja;
    $this->tipodoc = $tipodoc;
    $this->numerodoc = $numerodoc;
}

public function setNombre($nombre){
    $this->nombre= $nombre;
}
public function getNombre(){
    return $this->nombre;
}

public function setApellido($apellido){
    $this->apellido=$apellido;
}

public function getApellido(){
    return $this->apellido;
}

public function setBaja($baja){
    $this->baja=$baja;
}

public function getBaja(){
    return $this->baja;
}

public function setTipodoc($tipodoc){
    $this->tipodoc=$tipodoc;
}

public function getTipodoc(){
    return $this->tipodoc;
}

public function setNumerodoc($numerodoc){
    $this->numerodoc=$numerodoc;
}

public function getNumerodoc(){
    return $this->numerodoc;
}

public function __toString()
{
    return ("nombre:".$this->getNombre()." \n "
    ."apellido:".$this->getApellido()."\n "
    ."baja:".$this->getBaja()."\n "
    ."tipo documento:".$this->getTipodoc()."\n "
    ."numero documento:".$this->getNumerodoc()."\n ");
}
}
