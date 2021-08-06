<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos al sistema de vehículos</h1>
    <?php 
    require_once('cliente.php');
    require_once('cuenta.php');

    $cuenta = new Cuenta(1, 10000);
    $cliente1 = new Cliente(1, "Juan", "Perez", $cuenta);
    $cliente1->mostrarSaldo();
    

    ?>    

</body>
</html>
