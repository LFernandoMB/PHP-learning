<?php 
    class Conexao {
        private $servername;
        private $username;
        private $password;
        private $dbname;
        private $conn;
    
        function __construct($servername, $username, $password, $dbname) {
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
    
            // Cria a conexão
            $this->conn = new mysqli($servername, $username, $password, $dbname);
    
            // Verifica se a conexão foi estabelecida com sucesso
            if ($this->conn->connect_error) {
                die("Conexão falhou: " . $this->conn->connect_error);
            }
        }
    
        function inserirDados($tabela, $dados) {
            $keys = array_keys($dados);
            $values = array_map(array($this->conn, 'real_escape_string'), array_values($dados));
            $sql = "INSERT INTO " . $tabela . " (" . implode(",", $keys) . ") VALUES ('" . implode("','", $values) . "')";
            $result = $this->conn->query($sql);
            return $result;
        }
    
        function atualizarDados($tabela, $dados, $id) {
            $set = array();
            foreach ($dados as $key => $value) {
                $set[] = $key . "='" . $this->conn->real_escape_string($value) . "'";
            }
            $sql = "UPDATE " . $tabela . " SET " . implode(",", $set) . " WHERE id=" . $id;
            $result = $this->conn->query($sql);
            return $result;
        }
    
        function consultarDados($tabela) {
            $sql = "SELECT * FROM " . $tabela;
            $result = $this->conn->query($sql);
            $data = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            return $data;
        }
    
        function __destruct() {
            // Fecha a conexão com o banco de dados quando você terminar de usá-la
            $this->conn->close();
        }
    }
?>