<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario</title>
</head>
<body>
    <h3>Pagina inicial del concesionario</h3>


    <?php
    require_once('Automovil.php');
    require_once('Vendedor.php');
    require_once('Cliente.php');

    $auto1 = new Automovil();
    $auto1->setPatente('EEG335');
    $auto1->setColor('blue');

    $auto2 = new Automovil();
    $auto2->setPatente('ASF664');
    $auto2->setColor('red');

    $auto3 = new Automovil();
    $auto3->setPatente('DDT135');
    $auto3->setColor('yellow');

    $vendedor1 = new Vendedor();
    $vendedor1->setNombre("Pablo");
    $vendedor1->setApellido("Rodriguez");

    $vendedor2 = new Vendedor();
    $vendedor2->setNombre("Lucia");
    $vendedor2->setApellido("Gonzalez");

    $cliente1 = new Cliente();
    $cliente1->setNombre("Ernesto");
    $cliente1->setApellido("Suarez");

    $vendedor2->venderAuto($auto3, $cliente1);

    

    ?>
</body>
</html>