<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Obligatoria php unidad 2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="actividad-ob.css">
</head>
<body>
    <h1>Actividad Obligatoria unidad 2 Backend</h1>    
    

<?php

$nombre = 'Iara ';
$apellido = 'Baya Vargas';
$edad = 24;
$hobby = 'Tocar el bajo';
$ide = 'Visual Studio Code';
$sisop = 'Windows 8.1';

echo '<div class="info">
        <h3>Datos</h3>
        <p class="nombre"> Nombre y Apellido: <span>'.$nombre.$apellido.'</span></p>
        <p class="edad"> Edad: <span>'.$edad.'</span></p>
            <div class="extra">
                <p> Hobby: <span>'.$hobby.'</span></p>
                <p> Editor de Texto favorito: <span>'.$ide.'</span></`p`>
                <p> Sistema Operativo: <span>'.$sisop.'</span></p>
            </div>
</div>';

?>
</body>
</html>