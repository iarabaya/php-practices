<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // Herencia
    class Vehiculo {
        private $id;
        private $marca;
        private $modelo;
        private $patente;

        function __construct($id, $marca, $modelo, $patente){
            $this->id = $id;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->patente = $patente;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        public function setPatente($patente){
            $this->patente = $patente;
        }

        public function getId(){
            return $this->id;
        }        
        public function getMarca(){
            return $this->marca;
        }        
        public function getModelo(){
            return $this->modelo;
        }                
        public function getPatente(){
            return $this->patente;
        }      
        
        public function arrancar() {
            echo "Arrancó el vehículo patente $this->patente <br>";
        }

        protected function apagar() {
            echo "Se apagó el vehículo patente $this->patente <br>";
        }

        private function cambiarPatente($nuevaPatente) {
            echo "El vehículo cambia de patente de $this->patente a $nuevaPatente <br>";
            $this->patente = $nuevaPatente;
        }
    }

    class Camion extends Vehiculo {
        private $cargaMaxima;

        function __construct($id, $marca, $modelo, $patente, $cargaMaxima) {
            parent::__construct($id, $marca, $modelo, $patente);
            $this->cargaMaxima = $cargaMaxima;
        }

        public function setCargaMaxima($cargaMaxima) {
            $this->cargaMaxima = $cargaMaxima;
        }
        public function getCargaMaxima() {
            return $this->cargaMaxima;
        }

        public function cargar($pesoCarga) {
            if($pesoCarga > $this->cargaMaxima) {
                echo "No puede cargar más peso de la carga máxima: $this->cargaMaxima <br>";
            } else {
                echo "El camión se cargó exitosamente <br>";
            }
        }

        public function apagarCamion() {
            parent::apagar();
        }

    }


    class Omnibus extends Vehiculo {
        private $cantidadAsientos;

        function __construct($id, $marca, $modelo, $patente, $cantidadAsientos) {
            parent::__construct($id, $marca, $modelo, $patente);
            $this->cantidadAsientos = $cantidadAsientos;
        }

        public function setCantidadAsientos($cantidadAsientos) {
            $this->cantidadAsientos = $cantidadAsientos;
        }
        public function getCantidadAsientos() {
            return $this->cantidadAsientos;
        }

        public function ocuparAsientos($cantAOcupar) {
            if($cantAOcupar > $this->cantidadAsientos) {
                echo "No puede ocupar más asientos de los disponibles: $this->cantidadAsientos <br>";
            } else {
                echo "El omunibus ocupó exitosamente la cantidad de asienteos<br>";
            }
        }
    }    

    $camion1 = new Camion(1,"Scania","F100","LLI222", 5000);
    $camion1->cargar(4000);
    $camion1->arrancar();
    $camion2 = new Camion(1,"Scania","F100","LLI222", 10000);
    $camion2->cargar(4000);
    //$camion2->apagar(); //protected
    $camion2->apagarCamion();

    $omnibus1 = new Omnibus(2,"Fiat", "FF32", "LLI449", 30);
    $omnibus1->ocuparAsientos(40);
    $omnibus1->arrancar();


    //Modificadores de acceso: public, private, protected
    




    ?>    

</body>
</html>
