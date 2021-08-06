<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos php</title>
</head>
<body>
    <?php
    //variables debilmente tipadas, sensibles a las minusculas
    $entero = 33;
    $Entero = 23;
    $real = 33.34;
    $cadena = "Feliz Año nuevo";
    $anio = 2021;
    $cadena = "Feliz año $anio";//comillas dobles reconoce
    $cadena2 = 'Feliz Año $anio';//comillas simples no reconocen caracteres
    echo '<br>';
    echo $cadena;

    $booleano = true;

    //las variables de referencia se llaman punteros en c y c++
    //los punteros se usan para ordenar un array con algoritmo de burbuja
    $edad = 35;
    $refEdad = &$edad;
    echo '<br>';
    echo $edad;
    echo '<br>';
    echo $refEdad;//es una variable que apunta a otra

    $refEdad = 45;//si modifico la referencia, se cambia edad
    echo '<br>';
    echo $edad;
    echo '<br>';
    echo $refEdad;

    //cambiar el tipo, forzado o casteo
    $cadena = "333";
    setType($cadena,"integer"); //transformo la cadena a entero, forzado
    $entero2 = (integer) $cadena; //transformo la cadena a entero, casteo

    //ambito de variables
    $varGlobal1 = "Pedro";
    $varGlobal2 = "Romina";

    function miFuncion(){
        $varLocal = "Juan";
        echo '<br>';
        echo $varLocal;
        echo '<br>';
        echo $varGlobal1;
        echo $GLOBALS["varGlobal1"];
        echo $GLOBALS["varGlobal2"];
    }
    miFuncion();

    //Variables del sistema
    //phpInfo();
    echo '<br>';
    echo $_SERVER["DOCUMENT_ROOT"];
    echo '<br>';
    echo $_SERVER["SCRIPT_FILENAME"];

    //array con indice numero automático
    $meses = ["enero","febrero","marzo"];
    $long = count($meses);

    for ($i=0; $i < $long; $i++) { 
        echo '<br>';
        echo $meses[$i];
    }

    //array asociativo, por clave-valor
    $moneda = [
        "argentina" => "pesos",
        "francia" => "euros",
        "japon" => "yen"
    ];

    echo "<br>";
    echo $moneda["argentina"];
    echo $moneda["japon"];

    foreach ($moneda as $value) {
        echo "<br>";
        echo $value;
    }

    //matrices o arrays multidimensionales
    $pais = [
        "argentina" =>[
            "nombre" => "Republica Argentina",
            "lengua" => "Castellano",
            "moneda" => "Pesos"
        ],
        "francia" =>[
            "nombre" => "Francia",
            "lengua" => "Frances",
            "moneda" => "Euro"
        ]
        ];
    echo "<br>";
    echo $pais["argentina"]["moneda"];
    echo $pais["francia"]["lengua"];

    foreach ($pais as  $value) {
        foreach ($value as $value1) {
            echo "<br>";
            echo $value1;
        }
    }

    $monedas = [
        "argentina" => "pesos",
        "francia" => "euro",
        "japon" => "yen"
    ];

    asort($monedas); //ordena por los valores
    echo "<br>";
    var_dump($monedas);

    ksort($monedas); //ordena por las keys
    echo "<br>";
    var_dump($monedas);


    ?>
</body>
</html>