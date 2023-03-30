<?php
    class Caneta {
        private $modelo;
        private $cor;
        private $ponta;
        private $tampa;

        public function __construct($modelo, $cor, $ponta){
            $this->setModelo($modelo);
            $this->setCor($cor);
            $this->setPonta($ponta);
            $this->moverTampa();
        }

        public function moverTampa(){
            $this->tampa = !$this->tampa;
        }

        public function getCor(){
            return $this->cor;
        }

        public function setCor($c){
            $this->cor = $c;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }

        public function showAll(){
            echo "<h3>Modelo: {$this->getModelo()}\nCor: {$this->getCor()}\nPonta: {$this->getPonta()}\nTampa: $this->tampa</h3><br/>";
        }
    }    
?>