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

        /**
         * * Mensaje importante
         * ! alerta
         * ? duda
         * TODO: algo por hacer en el m??todo, falta validar si tiene permisos
         */
        public function arrancar() {
            echo "Arranc?? el veh??culo con patente $this->patente <br>";
        }
    }    


    /**
     * Clase cami??n
     */
    class Camion extends Vehiculo {
        private $cargaMaxima; //expreaso en toneladas

        function __construct($id, $marca, $modelo, $patente, $cargaMaxima) {
            parent::__construct($id, $marca, $modelo, $patente);
            $this->cargaMaxima=$cargaMaxima;
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
         * Carga un cami??n con una cantidad de toneladas
         * ! verifica que las toneladas no superen la carga m??xima $cargaMaxima
         * 
         * @param toneladasACargar es un integer con tonedalas
         */
        public function cargar($toneladasACargar) {
            if ($toneladasACargar > $this->cargaMaxima) {
                echo "No puede cargar m??s de $this->cargaMaxima toneladas <br>";
            } else {
                echo "Se carg?? exitosamente el cami??n <br>";
            }
            
        }
    }
    
    class Omnibus extends Vehiculo {
        private $cantAsientos;
        
        function __construct($id, $marca, $modelo, $patente, $cantAsientos) {
            parent::__construct($id, $marca, $modelo, $patente);
            $this->cantAsientos=$cantAsientos;
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
         * Ocupa una cantidad determinada de asientos
         * ! Valida que no se ocupen m??s asientos de la cantidad m??xima
         * 
         * @param cantAOcupar recibe un integer con la cantidad de asientos a ocupar
         */
        public function asignarAsientos($cantAOcupar) {
            if($cantAOcupar > $this->cantAsientos) {
                echo "No puede ocupar m??s de $this->cantAsientos asientos <br>";
            } else {
                echo "Se ocuparon existosamente los asientos <br>";
            }
        }
    }
    
    $camion1 = new Camion(1, "Scania", "F1000", "LES233", 10000);
    $camion1->cargar(11000); //m??todo de la clase
    $camion1->arrancar(); //m??todo herredado de veh??culo

    $camion2 = new Camion(2, "Fiat", "FA10", "LEE353", 8000);
    $camion2->cargar(11000); //m??todo de la clase

    $omnibus1 = new Omnibus(1, "Volvo", "Vo 333", "ERT333", 30);
    $omnibus1->asignarAsientos(40);
    $omnibus1->arrancar();

    ?>
    
</body>
</html>