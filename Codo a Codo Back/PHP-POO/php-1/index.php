<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primer html con php</title>
</head>
<body>
    <h1>Hola mundo</h1>


    <!--etiqueta que indica que dentro de ella hay codigo php-->
    <?php 
        $mensaje = "Hola mundo, mensaje desde php"; //crea una variable y le asigna string
        echo $mensaje; //muestra el valor de la variable en html

        //como ejecutar un archivo .php
        /*
        -crear archivo .php
        -poner el tag <?php ---?>
        -ejecutar Xampp, Mysql y Apache
        -crear una carpeta prueba en directorio c:\xampp\htdocs\prueba
        -colocar el archivo .php ahi
        
        */
    ?>
    
</body>
</html>