<?php 
    require_once "Pessoa.php";

    class Funcionario extends Pessoa {
        // Atributos
        private $setor;
        private $trabalhando;

        // Métodos Especiais - Cosntrutor
        function __construct(){
            $this->trabalhando = false;
        }

        // Métodos Especiais - Getters and Setters
        public function getSetor(){
            return $this->setor;
        }

        public function setSetor($s){
            $this->setor = $s;
        }

        public function getTrabalhando(){
            return $this->trabalhando;
        }

        public function setTrabalhando(){
            $this->trabalhando = !$this->getTrabalhando();
        }

        // Métodos da Classe
        public function mudarTrabalho($s){
            $this->setTrabalhando();
        }
    }
?>