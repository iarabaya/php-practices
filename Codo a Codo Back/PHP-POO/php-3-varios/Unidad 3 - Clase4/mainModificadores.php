<?php 
    require_once("modificadores.php");

    $omnibus1 = new Omnibus(1, "Fiat", "FA33", "LEI334", 30, 2, "Larga Distancia");
    $omnibus1->asignarAsientos(20);
    $omnibus1->arrancar();
    $omnibus1->apagar();

    //$cliente1->cambiarSaldo(100000);
?>