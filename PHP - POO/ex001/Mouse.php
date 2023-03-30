<?php
    class Mouse {
        var $btnDireito;
        var $btnEsquerdo;
        var $scroll;
        var $laser;
        var $marca;

        function cliqueDireito(){
            echo "BTN DIREITO Clicado!";
        }

        function cliqueEsquerdo(){
            echo "BTN ESQUERDO Clicado!";
        }

        function cliqueScroll(){
            echo "SCROLL girando!";
        }

        function deslizeLaser(){
            echo "LASER deslizando!";
        }

        function show(){
            echo "Marca: $this->marca";
        }
    }    
?>