<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo php</title>
</head>
<body>
    <h1>Hola mundo PHP</h1>


    <?php
    $mensaje = "Hola mundo";
    //$mensaje += ", mensaje desde php";
    echo $mensaje;
    

    //datos hardcode "hardcodeado
    $talles[0] = "S";
    $talles[1] = "M";
    $talles[2] = "L";
    $talles[3] = "XL";
    $talles[4] = "XXL";
    
    $longArray = count($talles); //talles tiene longitud de 3 elementos

    for ($i=0; $i < $longArray; $i++) { 
        echo "<p>".$talles[$i]."</p>"; // <p>S</p><p>M</p><p>L</p>...
    }

    echo "<h3> Adios </h3>";
    ?>
    
</body>
</html>