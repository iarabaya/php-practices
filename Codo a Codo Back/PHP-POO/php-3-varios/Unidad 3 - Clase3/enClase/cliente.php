    <?php 
    require_once('cuenta.php');

    class Cliente {
        private $id;
        private $nombre;
        private $apellido;
        private $cajaAhorro;
        //array de cuentas

        function __construct($id, $nombre, $apellido, Cuenta $cajaAhorro){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->cajaAhorro= $cajaAhorro;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
        public function setCajaAhorro($cajaAhorro){
            $this->cajaAhorro = $cajaAhorro;
        }        

        public function getId(){
            return $this->id;
        }        
        public function getNombre(){
            return $this->nombre;
        }        
        public function getApellido(){
            return $this->apellido;
        }   
        public function getCajaAhorro(){
            return $this->cajaAhorro;
        }                        

        public function mostrarSaldo() {
            $saldo = $this->cajaAhorro->getSaldo();
            echo "El saldo de la cuenta de $this->nombre, $this->apellido es: $saldo <br>";
        }

        public function mostrarTipoCuenta() {
            $tipo = $this->cajaAhorro->getTipo();
            echo "El tipo de cuenta de $this->nombre, $this->apellido es: $tipo <br>";

        }
    }

?>    
