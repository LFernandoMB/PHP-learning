<?php 
    require_once "Animal.php";
    class Ave extends Animal {
        private $corPena;

        public function getCorPena() { 
            return $this->corPena;
        }

        public function setCorPena($corPena){
            $this->corPena = $corPena;
        }

        public function locomover(){
            echo "Voando";
        }

        public function emitirSom(){
            echo "Som de Pássaro";
        }

        public function alimentar()
        {
            echo "Comendo Frutos";
        }

        public function fazerNinho(){
            echo "Fazendo ninho!";
        }
    }
?>