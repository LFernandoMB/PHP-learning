<?php
    class Correr {
        var $tenisAmarrado;
        var $shorts;
        var $camiseta;
        var $agua;

        function caminhar(){
            echo "[CAMINHANDO]";
        }

        function correndo(){
            echo "[CORRENDO]";
        }

        function amarrarTenis(){
            if ($this->tenisAmarrado == false){
                $this->tenisAmarrado = true;
                echo "[TENIS AMARRADO]";
                echo "<br/>";
            } else {
                echo "[TENIS NÃO ESTÁ DESAMARRADO!]";
                echo "<br/>";
            }
        }

        function beberAgua(){
            $this->agua = true;
            echo "[BEBENDO AGUA]";
        }

        function show(){
            echo "Cadarço status: $this->tenisAmarrado";
            echo "<br/>";
            echo "Bebeu água: $this->agua";
        }
    }    
?>