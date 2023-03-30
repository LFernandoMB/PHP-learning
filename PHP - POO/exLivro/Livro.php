<?php 
    require_once "Publicacao.php";
    require_once "Pessoa.php";

    class Livro implements Publicacao {
        // Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        // Métodos Especiais
        function __construct($tit, $aut, $tot, $leitor) {
            $this->titulo = $tit;
            $this->autor = $aut;
            $this->totPaginas = $tot;
            $this->leitor = $leitor;
            $this->pagAtual = 0;
            $this->aberto = false;
        }

        protected function getTitulo(){
            return $this->titulo;
        }

        protected function getAutor(){
            return $this->autor;
        }

        protected function getTotPaginas(){
            return $this->totPaginas;
        }

        protected function getPagAtual(){
            return $this->pagAtual;
        }

        protected function getAberto(){
            return $this->aberto;
        }

        protected function getLeitor(){
            return $this->leitor;
        }

        protected function setTitulo($var){
            $this->titulo = $var;
        }

        protected function setAutor($var){
            $this->titulo = $var;
        }

        protected function setTotPaginas($var){
            $this->titulo = $var;
        }

        protected function setPagAtual($var){
            $this->titulo = $var;
        }

        protected function setAberto($var){
            $this->titulo = $var;
        }

        protected function setLeitor($var){
            $this->titulo = $var;
        }

        // Métodos da Classe
        public function detalhes(){
            echo "<hr>Livro <strong>" . $this->getTitulo() . "</strong>, escrito por " . $this->getAutor();
            echo "<br>Páginas: " . $this->getTotPaginas();
            echo "<br>Sendo lido por: " . $this->leitor->getNome();
        }

        // Implementações
        public function abrir(){
            $this->aberto = true;
        }

        public function fechar(){
            $this->aberto = false;
        }

        public function avancaPag(){
            $this->pagAtual++;
        }

        public function voltarPag(){
            $this->pagAtual--;
        }
    }

?>