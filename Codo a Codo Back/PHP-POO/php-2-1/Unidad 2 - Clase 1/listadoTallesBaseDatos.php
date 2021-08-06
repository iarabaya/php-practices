<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Talles - Base de Datos</title>
</head>
<body>
    <h3>Listado de Talles - Base de Datos</h3>

    <?php 
    // debemos obtener estos datos desde la base de datos
    // $talles[0] = "S";
    // $talles[1] = "M";
    // $talles[2] = "L"; 
    // $talles[3] = "XL"; 

    // conectarnos a la base de datos MySql 
    // y poner la conexión en la variable $mysqlVentas
    $mySqlVentas = new mysqli("localhost", "root", "", "ventas");

    if ($mySqlVentas->connect_errno) {
        die("Falló la conexión a la base de datos Mysql ventas");
    } else {
        mysqli_set_charset($mysqli, "utf8");
    }

    // creamos la consulta como una cadena y la ponemos 
    // en la variable $sql
    $sql = "SELECT * FROM talles ORDER BY idtalle";

    // ejecutamos la consulta y el resultado lo ponemos
    // en la variable $resultado
    $resultado = $mySqlVentas->query($sql);

    $resultado->fetch_assoc();

    

    
    ?>
    
</body>
</html>