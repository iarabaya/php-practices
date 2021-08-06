<?php

class Vendedor {
    public $nombre;
    public $apellido;

    public function venderAuto( Automovil $auto, Cliente $cliente){
        //modificar atributo del auto como vendido
        if($auto->vendido){
            echo "<p>El automovil con patente $auto->patente ya fue vendido.</p>";
        }else{
            $auto->vendido = true;
            $cliente->comprarAuto($auto);
            //$this es una referencia al propio objeto
            echo "<p>El vendedor $this->nombre $this->apellido vendio un automovil con patente $auto->patente</p>";
        }
        
    }
}

?>