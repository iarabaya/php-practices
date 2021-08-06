<?php 
require_once("camion.php");
require_once("omnibus.php");

$camion1 = new Camion(1,"Scania","SC333", "KDE333", 10000, "4", "mosquito");  //hardcode
$camion1->cargar(8000);

$omnibus1 = new Omnibus(1, "Fiat", "F333", "LKK334", 40, 2, "Larga Distancia");
$omnibus1->asignarAsientos(30);
?> 