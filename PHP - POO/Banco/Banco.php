<?php
    class Banco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Construtor
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        public function abrirConta($dono, $nConta, $tp){
            $this->setDono($dono);
            $this->setNumConta($nConta);
            $this->tipo = $tp;
            $this->setStatus(true);
            if($tp == "CC"){
                $this->setSaldo(50);
            }else{
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "Retire todo dinheiro da conta antes de fechar! Saldo atual: R$ {$this->getSaldo()}";
            }elseif($this->getSaldo() < 0){
                echo "Saldo Negativo! Pagar débitos para cancelar!";
            }else{
                echo "Conta desativada com sucesso!";
                $this->setStatus(false);
            }
        }

        public function depositar($dinheiro){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $dinheiro);
            }else{
                echo "Conta inativa!";
            }
            
        }

        public function saque($dinheiro){
            if($this->getStatus()){
                if ($this->getSaldo() >= $dinheiro){
                    $this->setSaldo($this->getSaldo() - $dinheiro);
                    echo "{$this->getDono()} acabou de sacar R$$dinheiro - Saldo em conta é de R$ {$this->getSaldo()}";
                }else{
                    echo "Saldo Insuficiente - Saldo Atual: R$ {$this->getSaldo()}";
                }
            }else{
                echo "Conta inativa!";
            }
        }

        public function pagarMensalidade(){
            if($this->getTipo() == "CC"){
                $this->saldo -= 15;
            } else{
                $this->saldo -= 12;
            }
        }
        
        // Getters and Setters
        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($v){
            $this->numConta = $v;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($n){
            $this->dono = $n;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($v){
            $this->saldo = $v;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($s){
            $this->status = $s;
        }
        
        // Apresentação dos dados
        public function showAll(){
            echo "<h3>Conta: {$this->getNumConta()}\nTipo: {$this->getTipo()}\nSaldo: {$this->getSaldo()}\nCliente: {$this->getDono()}\nStatus: {$this->getStatus()}</h3><br/>";
        }

    }    
?>