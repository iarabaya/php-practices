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

        $auto1 = new Automovil("blue","LEC333", false);
        $auto1->setColor("red");
        $auto1->setPatente("LEC333");
        $auto1->arrancar();

    ?>
    
</body>
</html>