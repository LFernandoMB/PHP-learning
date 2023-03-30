<?php 
    require_once "Animal.php";
    class Peixe extends Animal {
        private $corEscama;

        public function getCorEscama() { 
            return $this->corEscama;
        }

        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }

        public function locomover(){
            echo "Nadando";
        }

        public function emitirSom(){
            echo "Som de peixe";
        }

        public function alimentar()
        {
            echo "Comendo Algas";
        }
    }
?>