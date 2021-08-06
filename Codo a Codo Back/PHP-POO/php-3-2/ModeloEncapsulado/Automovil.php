<?php
//clase que representa un automovil del concesionario
class Automovil { 
    //al estar los atributos en privado solo se puede acceder mediante setter y getter
    private $color;
    private $patente;
    private $vendido = false;

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of patente
     */ 
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Set the value of patente
     *
     * @return  self
     */ 
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get the value of vendido
     */ 
    public function getVendido()
    {
        return $this->vendido;
    }

    /**
     * Set the value of vendido
     *
     * @return  self
     */ 
    public function setVendido($vendido)
    {
        $this->vendido = $vendido;

        return $this;
    }

        public function arrancar(){
        echo "<p>Se arranco el automovil de color <span style='color: $this->color'> $this->color</span> con patente $this->patente</p>";
    }
 }

?>