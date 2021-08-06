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
    $auto1->patente = 'EEG335';
    $auto1->color = 'blue';

    $auto2 = new Automovil();
    $auto2->patente = 'ASF664';
    $auto2->color = 'red';

    $auto3 = new Automovil();
    $auto3->patente = 'DDT135';
    $auto3->color = 'yellow';

    $vendedor1 = new Vendedor();
    $vendedor1->nombre = "Pablo";
    $vendedor1->apellido = "Rodriguez";

    $vendedor2 = new Vendedor();
    $vendedor2->nombre = "Lucia";
    $vendedor2->apellido = "Gonzalez";

    $cliente1 = new Cliente();
    $cliente1->nombre = "Ernesto";
    $cliente1->apellido = "Suarez";

    $vendedor2->venderAuto($auto3, $cliente1);

    

    ?>
</body>
</html>