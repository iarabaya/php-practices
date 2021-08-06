<?php

class Vendedor {
    private $nombre;
    private $apellido;

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function venderAuto( Automovil $auto, Cliente $cliente){
        //modificar atributo del auto como vendido
        if($auto->getVendido()){
            echo "<p>El automovil con patente $auto->getPatente ya fue vendido.</p>";
        }else{
            $auto->setVendido(true);
            $cliente->comprarAuto($auto);
            //$this es una referencia al propio objeto
            echo "<p>El vendedor $this->nombre $this->apellido vendio un automovil con patente $auto->getPatente</p>";
        }
        
    }
}

?>