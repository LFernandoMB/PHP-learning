<?php 
    abstract class Pessoa{
        // Atributos
        private $nome;
        private $idade;
        private $sexo;

        // Métodos Especiais - Cosntrutor
        /*
        public function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }
        */

        // Métodos Especiais - Getters and Setters
        public function getNome(){
            return $this->nome;
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($i){
            $this->idade = $i;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($s){
            $this->sexo = $s;
        }

        // Métodos da Classe
        public final function fazerAniversario(){
            $this->idade ++;
        }
    }
?>