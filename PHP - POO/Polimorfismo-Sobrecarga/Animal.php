<?php 
    abstract class Animal {
        protected $peso;
        protected $idade;
        protected $membros;

        abstract function emitirSom();
    }
?>