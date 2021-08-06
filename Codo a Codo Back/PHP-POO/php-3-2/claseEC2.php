<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ejemplo</title>
</head>
<body>
    <h3>Clases en php</h3>




    <?php
    //definicion de la clase
    class Automovil {
       public $color;
       public $patente;
       public $vendido = false;

       public function arrancar(){
           echo "<p>Se arranco el automovil de color <span style='color: $this->color'> $this->color</span> con patente $this->patente</p>";
       }
    }

    //creacion de un objeto
    $autoAzul = new Automovil(); //crea un objeto a partir de la clase, instanciar una clase
    $autoAzul->patente = "EEG312";
    $autoAzul->color = "blue"; //asigno un valor al atributo $color
    $autoAzul->arrancar(); //ejecuto su metodo

    //creo otro objeto
    $autoRojo = new Automovil();    
    $autoRojo->patente = "GTW442";
    $autoRojo->color = "red";
    $autoRojo->arrancar(); 

    $autoVerde = new Automovil();    
    $autoVerde->patente = "GTW442";
    $autoVerde->color = "green";
    $autoVerde->arrancar(); 

    class Vendedor {
        public $nombre;
        public $apellido;

        public function venderAuto( Automovil $auto){
            //modificar atributo del auto como vendido
            if($auto->vendido){
                echo "<p>El automovil con patente $auto->patente ya fue vendido.</p>";
            }else{
                $auto->vendido = true;
                //$this es una referencia al propio objeto
                echo "<p>El vendedor $this->nombre $this->apellido vendio un automovil con patente $auto->patente</p>";
            }
            
        }
    }

    $vendedor1 = new Vendedor();
    $vendedor1->nombre = "Juan";
    $vendedor1->apellido = "Roman";
    $vendedor1->venderAuto($autoAzul);

    $vendedor1 = new Vendedor();
    $vendedor1->nombre = "Karina";
    $vendedor1->apellido = "Suarez";
    $vendedor1->venderAuto($autoVerde);
    $vendedor1->venderAuto($autoAzul);

    
    
    
    ?>
    
</body>
</html>