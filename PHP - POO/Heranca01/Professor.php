<?php 
    require_once "Pessoa.php";

    class Professor extends Pessoa {
        // Atributos
        private $especialidade;
        private $salario;

        // Métodos Especiais - Cosntrutor
        function __construct(){
            
        }

        // Métodos Especiais - Getters and Setters
        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function setEspecialidade($e){
            $this->especialidade = $e;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function setSalario($s){
            $this->salario = $s;
        }

        // Métodos da Classe
        public function receberAumento($s){
            $this->setSalario($this->getSalario() + $s);
        }
    }
?>