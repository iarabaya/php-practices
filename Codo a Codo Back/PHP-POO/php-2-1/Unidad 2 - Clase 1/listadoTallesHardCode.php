<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Talles - Página Dinámica - Hardcode</title>
</head>
<body>
    <h3>Listado de Talles - Página Dinámica - Hardcode</h3>

    <?php 
    // datos hardcode "harcodeado", variable $talles array con cada uno de los talles
    $talles[0] = "S";
    $talles[1] = "M";
    $talles[2] = "L"; 
    $talles[3] = "XL"; 

    // calcula la longitud del array
    $longTalles = count($talles);

    // recorremos cada uno de los elementos del array para mostrarlos
    for ($i=0; $i < $longTalles; $i++) { 
        // generando código html
        echo "<p>"+ $talles[$i] + "</p>";
    }

    
    
    ?>
    
</body>
</html>
