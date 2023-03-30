<?php 
    require_once "Pessoa.php";
// Herança para Diferença, onde a classe Aluno herda da classe Pessoa porém a classe Aluno possuí elementos próprios (Atributos e métodos)
    class Aluno extends Pessoa {
        // Atributos
        private $matricula;
        private $curso;

        // Métodos Especiais - Cosntrutor
        function __construct(){
            $this->matricula = false;
        }

        // Métodos Especiais - Getters and Setters
        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula(){
            $this->matricula = true;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($c){
            $this->curso = $c;
        }

        // Métodos da Classe
        public function cancelarMatricula(){
            $this->matricula = false;
        }
    }
?>