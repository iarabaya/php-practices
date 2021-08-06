<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Html y Php</h1>    
    <p>Ejemplo de utilización de php y html</p>

    <?php 
        $talles[0] = "S";
        $talles[1] = "M";
        $talles[2] = "L";
        $talles[3] = "XL";
        $talles[4] = "XXL";

        $long = count($talles); //3
    ?>
    <ul>
    <?php
        for ($i=0; $i<$long; $i++) {
    ?>  
        <li><?php echo $talles[$i]; ?></li>
    <?php        
        }
    ?>
    </ul>

    <ul>
        <li>S</li>
        <li>M</li>
        <li>L</li>
    </ul>

</body>
</html>