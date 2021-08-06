<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Vehiculo {
        private $id;
        private $marca;
        private $modelo;
        private $patente;
        
        function __construct($id, $marca, $modelo, $patente) {
            $this->id=$id;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->patente=$patente;            
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of marca
         */ 
        public function getMarca()
        {
                return $this->marca;
        }

        /**
         * Set the value of marca
         *
         * @return  self
         */ 
        public function setMarca($marca)
        {
                $this->marca = $marca;

                return $this;
        }

        /**
         * Get the value of modelo
         */ 
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         *
         * @return  self
         */ 
        public function setModelo($modelo)
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of patente
         */ 
        public function getPatente()
        {
                return $this->patente;
        }

        /**
         * Set the value of patente
         *
         * @return  self
         */ 
        public function setPatente($patente)
        {
                $this->patente = $patente;

                return $this;
        }

        public function arrancar() {
            echo "Arrancó el vehículo con patente $this->patente <br>";
        
        }

        protected function apagar() {
            echo "Se apagó el vehículo con patente $this->patente <br>";    
        }

        //abstract protected function getValor();

    }    


    /**
     * Clase Camión hereda de Vehículo
     */
    class Camion extends Vehiculo {
        private $cargaMaxima; //definido en miles de kilogramos
        private $cantEjes;
        private $tipo;
                              
        function __construct($id, $marca, $modelo, $patente, $cargaMaxima, $cantEjes, $tipo) {
            parent::__construct($id, $marca, $modelo, $patente);
            $this->cargaMaxima=$cargaMaxima;
            $this->cantEjes=$cantEjes;
            $this->tipo=$tipo;
        }

        /**
         * Get the value of cargaMaxima
         */ 
        public function getCargaMaxima()
        {
                return $this->cargaMaxima;
        }

        /**
         * Set the value of cargaMaxima
         *
         * @return  self
         */ 
        public function setCargaMaxima($cargaMaxima)
        {
                $this->cargaMaxima = $cargaMaxima;

                return $this;
        }

        /**
         * Get the value of cantEjes
         */ 
        public function getCantEjes()
        {
                return $this->cantEjes;
        }

        /**
         * Set the value of cantEjes
         *
         * @return  self
         */ 
        public function setCantEjes($cantEjes)
        {
                $this->cantEjes = $cantEjes;

                return $this;
        }

        /**
         * Get the value of tipo
         */ 
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         *
         * @return  self
         */ 
        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Carga el camión con el peso definido
         * por el parámetro
         * 
         * @param $pesoCarga expreso en miles de kilogramos
         */
        public function cargar($pesoCarga) {
            if($pesoCarga > $this->cargaMaxima) {
                echo "No se puede cargar más de su capacidad máxima: $this->cargaMaxima <br>";
            } else {
                echo "Se cargó exitosamente el camión con $pesoCarga kilogramos<br>";
            }
        }

        public function getValor() {
            echo "entró";
        }

    }


    /**
     * Clase omnibus
     */
    class Omnibus extends Vehiculo {
        private $cantAsientos;
        private $cantPisos;
        private $tipo;

        function __construct($id, $marca, $modelo, $patente, $cantAsientos, $cantPisos, $tipo){
            parent::__construct($id, $marca, $modelo, $patente);
            $this->cantAsientos=$cantAsientos;
            $this->cantPisos=$cantPisos;
            $this->tipo=$tipo;
        }


        /**
         * Get the value of cantAsientos
         */ 
        public function getCantAsientos()
        {
                return $this->cantAsientos;
        }

        /**
         * Set the value of cantAsientos
         *
         * @return  self
         */ 
        public function setCantAsientos($cantAsientos)
        {
                $this->cantAsientos = $cantAsientos;

                return $this;
        }

        /**
         * Get the value of cantPisos
         */ 
        public function getCantPisos()
        {
                return $this->cantPisos;
        }

        /**
         * Set the value of cantPisos
         *
         * @return  self
         */ 
        public function setCantPisos($cantPisos)
        {
                $this->cantPisos = $cantPisos;

                return $this;
        }

        /**
         * Get the value of tipo
         */ 
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         *
         * @return  self
         */ 
        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Este método asigna una cantidad
         * fija de asientos
         * 
         * @param $asientos cantidad de asientos a ocupar
         */
        public function asignarAsientos($asientos) {
            if($this->validarAsignacion($asientos)) {
                echo "Se ocuparon exitosamente $asientos asientos <br>";
            } else {
                echo "No se puede ocupar más de la cantidad de asientos: $this->cantAsientos <br>";
            }
        }

        /**
         * Private solo puede invocarse dentro de la clase
         */
        private function validarAsignacion($asientos) {
            return $asientos <= $this->cantAsientos;    
        }

        public function apagarCamion() {
                $this->apagar();
        }
    }

    $camion1 = new Camion(1, "Scania", "F1000", "FGE356", 10000, 4, "Mosquito");
    $camion1->cargar(8000); //método del hijo
    $camion1->arrancar(); //método del padre

    $omnibus1 = new Omnibus(1, "Fiat", "FA33", "LEI334", 30, 2, "Larga Distancia");
    //$omnibus1->validarAsignacion(20);
    $omnibus1->asignarAsientos(20);
    $omnibus1->arrancar();
    $omnibus1->apagarCamion();

    
    ?>
</body>
</html>