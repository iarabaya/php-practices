<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos PHP</title>
</head>
<body>
    
    <?php  
        
        echo $_SERVER['HTTP_USER_AGENT'];
        //echo $_SERVER['PATH'];
        /*
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
            echo 'Está usando Internet Explorer.<br />';
        }*/

        phpinfo(); 
    ?>

    
</body>
</html>