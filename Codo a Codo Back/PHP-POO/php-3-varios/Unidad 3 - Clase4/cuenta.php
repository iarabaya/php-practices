    <?php 

    class Cuenta {
        private $id;
        private $tipo;
        private $saldo;

        function __construct($id, $tipo, $saldo){
            $this->id = $id;
            $this->tipo = $tipo;
            $this->saldo = $saldo;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function getId(){
            return $this->id;
        }        
        public function getTipo(){
            return $this->tipo;
        }        
        public function getSaldo(){
            return $this->saldo;
        }                
    }

?>    
