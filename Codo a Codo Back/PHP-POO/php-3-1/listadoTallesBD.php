<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista talles desde  BD</title>
</head>
<body>
    <h1>Lista de Talles</h1>
    

    <?php
    //conectamos nuestra pagina a mysql (bd)

    $mysqlVenta = new mysqli("localhost", "root", "", "ventas"); //servidor, user, password, nombre base de datos
    
    if ($mysqlVenta-> connect_errno) {
        die("Fallo la conexion con la base de datos.");
    }else{
        echo "conexion exitosa";
        mysqli_set_charset($mysqlVenta, "utf8");
    }

    //creamos la consulta sql, la ponemos en un string, y la guardamos en la variable sql
    $sql = "SELECT * FROM talles ORDER BY idTalle";

    //ejecutamos la consulta y el resultado lo ponemos en la variable $query
    $query = $mysqlVenta -> query($sql);

    //devuelve false si $query esta vacia
    //devuelve true si $query no esta vacia y retorna un array asociativo
    //fetch_assoc devuelve la primer fila, lo vuelve un array
    //cuando ya no hay mas filas en la bd devuelve falso y sale del while
    while ($resultado = $query -> fetch_assoc()) {
        $talles[] = $resultado; //guardamos cada fila en el array
    } 
    if(!isset($talles)){
        $talles[] = null;
    }

    $longTalles = count($talles);
    echo '<ul>';
    for ($i=0; $i < $longTalles ; $i++) { 
        echo '<li>'.$talles[$i]['nombretalle'].'</li>';
    }

    ?>
</body>
</html>