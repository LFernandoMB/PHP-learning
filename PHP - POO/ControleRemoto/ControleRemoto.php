<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Métodos Especiais
    function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;        
    }

    private function getVolume(){
        return $this->volume;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function getTocando(){
        return $this->tocando;
    }

    private function setVolume($vol){
            $this->volume = $vol;
    }

    private function setLigado(){
        if($this->getLigado()){
            $this->ligado = false;
        }else{
            $this->ligado = true;
        }
    }

    private function setTocando(){
        if($this->getTocando()){
            $this->tocando = false;
        }else{
            $this->tocando = true;
        }
    }

    // Implementando Métodos Abstratos
    public function ligar(){
        $this->setLigado();
    }

    public function desligar(){
        $this->setLigado();
    }

    public function abrirMenu(){
        echo "<p>----- MENU -----</p>";
        echo "<br>Ligado:".($this->getLigado()?"SIM":"NÃO");
        echo "<br>Ligado:".($this->getLigado()?"SIM":"NÃO");
        echo "<br>Volume: ". $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu(){
        echo "<br> Fechando Menu..</br>";
    }

    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() >  0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() ==  0){
            $this->setVolume(50);
        }
    }

    public function play(){
        if($this->getLigado()){
            $this->setTocando();
        }
    }

    public function pause(){
        if($this->getLigado()){
            $this->setTocando();
        }
    }
}
?>