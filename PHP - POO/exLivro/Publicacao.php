<?php 
    interface Publicacao{
        public function abrir();
        public function fechar();
        public function avancaPag();
        public function voltarPag();
    }

?>