<?php 
    require_once "InterfaceLuta.php";
    require_once "Lutador.php";

    class Luta implements InterfaceLuta{
        // Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Métodos Especiais - Getters and Setters
        protected function getDesafiado(){
            return $this->desafiado;
        }

        protected function setDesafiado($des){
            $this->desafiado = $des;
        }

        protected function getDesafiante(){
            return $this->desafiante;
        }

        protected function setDesafiante($des){
            $this->desafiante = $des;
        }

        protected function getRounds(){
            return $this->rounds;
        }

        protected function setRounds($round){
            $this->rounds = $round;
        }

        protected function getAprovada(){
            return $this->aprovada;
        }

        protected function setAprovada($aprov){
            $this->aprovada = $aprov;
        }

        // Métodos Interface
        public function marcarLuta($l1, $l2){
            if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar(){
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0, 2);
                echo "<p>----- LUTANDO -----</p>";
                switch($vencedor){
                    case 0:
                        echo "<p>Empate</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        echo "<p>". $this->desafiado->getNome()." venceu!";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2:
                        echo "<p>". $this->desafiante->getNome()." venceu!";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                }
                echo "<p>-------------------</p>";
            }
        }
    }
?>