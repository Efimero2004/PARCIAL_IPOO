<?php
include_once "Vuelo.php";
class Aerolinea{
    private $id;
    private $nombre;
    private $col_vuelos;

    public function __construct($id,$nombre,$col_vuelos)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->col_vuelos=$col_vuelos;
    }


    public function setId($id){
        $this->id=$id;

    }

    public function setNombre($nombre){
        $this->nombre=$nombre;

    }
    
    public function setColeccionVuelos($col_vuelos){
        $this->col_vuelos=$col_vuelos;

    }

    public function getId(){
        return $this->id;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getColeccionVuelos(){
        return $this->col_vuelos;
    }


    public function darVueloADestino($destino,$cant_asientos){
        $colVuelos=[];
        $colVuelosAerolinea = $this->getColeccionVuelos();
        foreach ($colVuelosAerolinea as $unObjVuelo){
            $elDestino = $unObjVuelo->getDestino();
            $cant_Disponible = $unObjVuelo ->getCantidadAsientosDisp();
            if ($elDestino==$destino && $cant_Disponible >= $cant_asientos){
                $colVuelos[]=$unObjVuelo;
            }
            return $colVuelos;
        }
    }

    public function incorporarVuelo($obj_vuelo){
        $respuesta=true;
        $colVuelosAerolinea=$this->getColeccionVuelos();
        $pdestino=$obj_vuelo->getDestino();
        $pfecha=$obj_vuelo->getFecha();
        $phoraPartida=$obj_vuelo->getHoraPartida();

        foreach ($colVuelosAerolinea as $Obj_vuelo_aero){
            
            if($Obj_vuelo_aero->getDestino()==$pdestino){
                if ($Obj_vuelo_aero->getFecha()==$pfecha) {
                    if ($Obj_vuelo_aero->getHoraPartida()!=$phoraPartida) {
                        $respuesta=false;
                    }
                }
            }

        }
        if ($respuesta) {

            $colVuelos = $this->getColeccionVuelos();
            $colVuelos[]=$obj_vuelo;
            $this->setColeccionVuelos($colVuelos);
        }

        return $respuesta;

    }

    public function venderVueloADestino($cantAsientos,$destino,$fecha){
        $vueloEncontrado=false;
        $vueloAVender=null;
        $colVuelosADestino=$this->darVueloADestino($destino,$cantAsientos);
        foreach($colVuelosADestino as $obj_vuelo){
            if ($vueloEncontrado==false && $obj_vuelo->getDestino()==$destino) {
                $obj_vuelo->asignarAsientosDisponibles($cantAsientos);
                $vueloAVender=$obj_vuelo;
                $vueloEncontrado=true;

            }

        }
        return $vueloAVender;
    }


}