<?php 


class Persona{

private $nombre;
private $apellido;
private $direccion;
private $mail;
private $telefono;

public function __construct($pnombre,$papellido,$pdireccion,$mail,$telefono)
{
    $this->nombre=$pnombre;
    $this->apellido=$papellido;
    $this->direccion=$pdireccion;
    $this->mail=$mail;
    $this->telefono=$telefono;

}
public function getNombre()
{
    return $this->nombre;
}

public function getApellido(){
    return $this->apellido;
}

public function setNombre($n){
    $this->nombre=$n;
}
public function setApellido($a){
    $this->apellido=$a;
}

public function getDireccion (){
    return $this->direccion;
}

public function getMail (){
    return $this->mail;
}
public function getTelefono (){
    return $this->telefono;
}
public function __toString()
{
    return "Persona nombre:".$this->getNombre()."\n "
    ."apellido:".$this->getApellido()."\n "
    ."direccion;".$this->getDireccion()."\n "
    ."mail:".$this->getMail()."\n "
    ."telefono:".$this->getTelefono()."\n "; 
}
}