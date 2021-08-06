<?php
//clase que representa un automovil del concesionario
class Automovil {
    public $color;
    public $patente;
    public $vendido = false;

    public function arrancar(){
        echo "<p>Se arranco el automovil de color <span style='color: $this->color'> $this->color</span> con patente $this->patente</p>";
    }
 }

?>