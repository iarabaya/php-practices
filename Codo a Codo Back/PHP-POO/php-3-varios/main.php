<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php
        require_once("Automovil.php");
        // $auto1 = new Automovil();
        // $auto1->setColor("Blue");
        // $auto1->setPatente("HGS352");
        // $auto1->arrancar();

        //por constructor
        $auto1 = new Automovil("blue","HGS352",false);
    ?>
</body>
</html>