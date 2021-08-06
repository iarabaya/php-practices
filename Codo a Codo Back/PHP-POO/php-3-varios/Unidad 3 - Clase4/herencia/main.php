<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Página principal de vehículos</h3>

    <?php 
        require_once("Camion.php");
        require_once("Omnibus.php");

        $camion1 = new Camion(1,"Renault", "2012", "KEL123", 10000, 4);
        $cargaMax = $camion1->getCargaMaxima();
        $camion1->setCargaMaxima(8000);
        $camion1->cargar(10000); //err
        $camion1->cargar(7000); //ok
        $camion1->setPatente("LKE333"); //EJECUTA método de la clase padre, setea un atributo
        $camion1->arrancar();

        $omni1 = new Omnibus(2, "Fiat", "2015", "KEK333", 35);
        $omni1->asignarAsientos(30);

    
    ?>
    
</body>
</html>