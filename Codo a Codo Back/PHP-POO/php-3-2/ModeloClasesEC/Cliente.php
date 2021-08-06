<?php
class Cliente {
    public $nombre;
    public $apellido;
    public $patenteAuto;

    public function comprarAuto (Automovil $auto){
        $patenteAuto = $auto->patente;
        echo "<p>El cliente $this->nombre $this->apellido compro el auto con patente $auto->patente </p>";

    }
}

?>