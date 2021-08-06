<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado desde Base de Datos</title>
</head>
<body>
    <h1>Listado de Base de Datos</h1>

    <?php 
        $mysqli = new mysqli("localhost", "root", "", "ventas"); //conexión a base de datos, ip, usuario, contraseña, base de datos
        
        // Comprobamos la conexion
        if ($mysqli->connect_errno) {
            die("Fallo la conexion");
        } else {
            //echo "Conexion exitosa";
            mysqli_set_charset($mysqli, "utf8");
        }
    
        $sql = "SELECT * FROM talles ORDER BY idtalle";
        $query = $mysqli->query($sql);

        // transforma $query e un array llamado $tallres
        while ($resultado = $query->fetch_assoc()) {
            $talles[] = $resultado;
        }
        if (!isset($talles)) {
            $talles[] = null;
        }

    ?>
    <ul> 
    <?php    
        $long = count($talles);
        for ($i=0; $i<$long; $i++) {
    ?>    
        <li>
            <?php 
                echo $talles[$i]['idtalle']; 
                echo " - ";
                echo $talles[$i]['nombretalle'];
            ?>
        </li> 
    <?php       
        }
    ?>
    </ul>

    <ul>
        <li>talles 1, idtalle, nombreTalle</li>
        <li>talles 2, idtalle, nombreTalle</li>
        <li>talles 3, idtalle, nombreTalle</li>
    </ul>
    
</body>
</html>