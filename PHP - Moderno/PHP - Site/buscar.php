<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        // Inclui o arquivo da classe de conexão
        require_once 'Conexao.php';

        // Configuração de conexão com o banco de dados
        $servername = "localhost"; // Endereço do servidor MySQL
        $username = "root"; // Nome de usuário do MySQL
        $password = ""; // Senha do MySQL
        $dbname = "mydatabase"; // Nome do banco de dados

        // Cria uma instância da classe Conexao
        $conexao = new Conexao($servername, $username, $password, $dbname);

        // Exemplo de consulta de dados
        $tabela = "tableInfo";

        $resultado = $conexao->consultarDados($tabela);
        if (count($resultado) > 0) {
            foreach ($resultado as $cliente) {
                echo "ID: " . $cliente['id'] . "<br>";
                echo "Nome: " . $cliente['nome'] . "<br>";
                echo "Idade: " . $cliente['idade'] . "<br>";
                echo "E-mail: " . $cliente['email'] . "<br>";
                echo "Telefone: " . $cliente['telefone'] . "<br>";
                echo "<hr>";
            }
        } else {
            echo "Não foram encontrados registros na tabela " . $tabela;
        }

    ?>
    <br>
    <a href="index.html">Clique aqui para voltar</a>
</div>
</body>
</html>
 