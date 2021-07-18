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
    
    if ($mysqlVenta-> connect_errno ) {
        die("Fallo la conexion");
    }else{
        //echo "conexion exitosa";

    }

    //creamos la consulta sql y la ponemos en un string
    $sql = "SELECT * FROM talles ORDER BY idTalle";

    //ejecutamos la consulta y el resultado lo ponemos en la variable $query
    $query = $mysqlVenta -> query($sql);

    //devuelve false si $query esta vacia
    //devuelve true si $query no esta vacia y retorna un array asociativo

    while ($resultado = $query -> fetch_assoc()) {
        # code...
    }

    
    ?>
</body>
</html>