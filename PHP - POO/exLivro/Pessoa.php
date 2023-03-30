<?php 
    class Pessoa {
        // Atributos
        private $nome;
        private $idade;
        private $sexo;

        // Métodos Especiais
        function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        function getNome(){
            return $this->nome;
        }

        function getIdade(){
            return $this->idade;
        }

        function getSexo(){
            return $this->sexo;
        }

        function setNome($var){
            $this->nome = $var;
        }

        function setIdade($var){
            $this->idade = $var;
        }

        function setSexo($var){
            $this->sexo = $var;
        }

        // Métodos da Classe
        public function fazerAniversario(){
            $this->idade ++;
        }
    }
?>