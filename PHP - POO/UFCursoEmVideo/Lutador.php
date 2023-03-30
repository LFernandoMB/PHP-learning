<?php 
    require_once "InterfaceLutador.php";

    class Lutador implements InterfaceLutador {
        // Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Especiais
        function __construct($no, $nac, $age, $alt, $pe, $vit, $der, $emp){
            $this->nome = $no;
            $this->nacionalidade = $nac;
            $this->idade = $age;
            $this->altura = $alt;
            $this->setPeso($pe);
            $this->vitorias = $vit;
            $this->derrotas = $der;
            $this->empates = $emp;
        }

        //Getters e Setters
        function getNome() {
            return $this->nome;
        }

        function getNacionalidade() {
            return $this->nacionalidade;
        }

        function getIdade() {
            return $this->idade;
        }

        function getAltura() {
            return $this->altura;
        }

        function getPeso() {
            return $this->peso;
        }

        function getCategoria() {
            return $this->categoria;
        }

        function getVitorias() {
            return $this->vitorias;
        }

        function getDerrotas() {
            return $this->derrotas;
        }

        function getEmpates() {
            return $this->empates;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNacionalidade($nac) {
            $this->nacionalidade = $nac;
        }

        function setIdade($age) {
            $this->idade = $age;
        }

        function setAltura($alt) {
            $this->altura = $alt;
        }

        function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }

        private function setCategoria() {
            if($this->getPeso() < 52.2){
                $this->categoria = "Inválido";
            }elseif($this->getPeso() <= 70.3){
                $this->categoria = "Leve";
            }elseif($this->getPeso() <= 83.9){
                $this->categoria = "Médio";
            }elseif($this->getPeso() <= 120.2){
                $this->categoria = "Pesado";
            }else {
                $this->categoria = "Inválido";
            }
        }

        function setVitorias($vit) {
            $this->vitorias = $vit;
        }

        function setDerrotas($der) {
            $this->derrotas = $der;
        }

        function setEmpates($emp) {
            $this->empates = $emp;
        }

        // Métodos Implementados
        public function apresentar(){
            echo "<p> ----- APRESENTANDO -----</p>";
            echo "<br>Lutador: ". $this->getNome();
            echo "<br>Nacionalidade: ". $this->getNacionalidade();
            echo "<br>Idade: ".$this->getIdade();
            echo "<br>Peso: ".$this->getPeso();
            echo "<br>Altura: ".$this->getAltura();
            echo "<br>Categoria: ".$this->getCategoria();
            echo "<br>Vitorias: ".$this->getVitorias();
            echo "<br>Derrotas: ".$this->getDerrotas();
            echo "<br>Empates: ".$this->getEmpates();
        }

        public function status(){
            echo "<br>----- Status -----</br>";
            echo "<br>Lutador: ". $this->getNome();
            echo "<br>Vitórias: ".$this->getVitorias();
            echo "<br>Derrotas: ".$this->getDerrotas();
            echo "<br>Empates: ".$this->getEmpates();
            echo "<br>";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    }

?>