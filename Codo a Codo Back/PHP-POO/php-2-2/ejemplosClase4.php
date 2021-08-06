<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP</h1>

    <?php
    
    $datos = [
        "Juan Perez",
        33,
        2553451,
        "juan@gmail.com",
        5000.33,
        true
    ];

    for ($i=0; $i < count($datos) ; $i++) { //array comun se recorre con for
        echo "<br>".$datos[$i];
    }

    //array asociativo
    $vendedor = [
        "nombre" => "Juan Perez",
        "edad" => 33,
        "dni" => 2553451,
        "email" => "juan@gmail.com",
        "sueldo" => 50000.33,
        "activo" => true
    ];

    foreach ($vendedor as $value) { //array asociativo se recorre con foreach
        echo "<br>";
        echo $value;
    }

    echo "<br>";
    echo $vendedor["nombre"];

    //cadenas
    $nombre = "Juan";
    $apellido = "Perez";
    $mensaje = "Bienvenido".$apellido.$nombre;
    $mensaje = "Bienvenido $apellido, $nombre a la plataforma";
    echo "<br>";
    
    $mensajeHtml = "Hola mundo <b>php</b>";
    echo "<br>";
    echo $mensajeHtml;

    $mensajeHtml = htmlspecialchars("Hola mundo <b>php</b>");
    echo "<br>";
    echo $mensajeHtml;

    //funciones
    function miFuncion(){
        echo "<br>Mi funcion";
    }
    miFuncion();

    //con parámetros
    function mostrar($mensaje){
        echo "<br>";
        echo $mensaje;
    }

    mostrar("Hola php");
    mostrar(33);

    //parámetros por valor 
    //la funcion no va a modificar el valor de la variable enviada como parametro
    function parametroXValor($numero){
        $numero = 33;
        echo "<br> $numero";
    }

    $edad = 45;
    parametroXValor($edad);
    echo "<br> $edad";

    //parámetros por referencia
    //& significa referencia, y la variable referida en el parametro es modificada
    function parametroXReferencia(&$numero){
        $numero = 33;
        echo "<br> $numero";
    }

    $edad = 45;
    parametroXValor($edad);
    echo "<br> $edad";

    //parametros por defecto
    function sumar($a=4, $b=4){
        echo "<br>";
        echo $a+$b;
    }
    sumar(3,2);
    sumar(3);

    function dividir($a, $b=2){
        echo "<br>";
        echo $a/$b;
    }
    dividir(4);

    //return
    function restar($a,$b){
        return $a - $b;
    }

    $resultado = restar(10,5);
    echo "<br> $resultado";
    echo restar(2,5);

    function validarUsuario(){
        //...
        return true;
    }

    if(validarUsuario()){
        echo "usuario válido";
    } else {
        echo "usuario invalido";
    }

    //require o include: hace referencia a un archivo php externo
    //si no encuentra el archivo php, require da un error para la ejecucion
    //include no da error solo warning
    //include("libreria.php");
    require("libreria.php");

    //if
    $hoyllueve = true;
    if($hoyllueve){
        echo "llevar paraguas";
    }else{
        echo "no llevar paraguas";
    }

    //bucles
    $size = 1;
    while ($size <= 10) {
        echo "<font size=$size>Tamaño</font><br>";
        $size++;
    }

    //post o envio de formularios $_POST $HTTP_POST_VARS

    ?>
    
</body>
</html>