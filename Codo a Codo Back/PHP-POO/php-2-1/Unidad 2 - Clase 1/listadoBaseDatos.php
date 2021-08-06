<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Listado de Base de Datos</h1>
    <?php
        // Variables de la conexion a la DB
        $mysqli = new mysqli("localhost", "root", "", "ventas"); //localhost
        //$postgres = new postgres("localhost", "root", "", "ventas"); //localhost

        // Comprobamos la conexion
        if ($mysqli->connect_errno) {
            die("Fallo la conexion");
        } else {
            //echo "Conexion exitosa";
            mysqli_set_charset($mysqli, "utf8");
        }

        //creamos consulta en cadena de texto
        $sql = "SELECT * from talles order by idtalle";
        // ejecutamos consulta sql en mysql
        $query = $mysqli->query($sql);

        // devuelve false si $query está vacío
        // devuelve true si $query no está vacío y retorna un array asociativo
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
        for ($i = 0; $i < $long; $i++) {
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
    <!--    
    <ul>
        <li>S</li>
        <li>M</li>
        <li>L</li>
        <li>XL</li>
    </ul>
    -->

</body>

</html>