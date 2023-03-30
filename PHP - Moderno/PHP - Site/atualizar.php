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

        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Sem nome]";
        $idade = isset($_GET["idade"]) ? $_GET["idade"] : 0;
        $email = isset($_GET["email"]) ? $_GET["email"] : "[email nao informado]";
        $telefone = isset($_GET["telefone"]) ? $_GET["telefone"] : 0;

        // Exemplo de consulta de dados
        $tabela = "tableInfo";

        $dados = array(
            "nome" => $nome,
            "idade" => $idade,
            "email" => $email,
            "telefone" => $telefone);

        $id = 1; // ID do registro a ser atualizado
        
        $resultado = $conexao->atualizarDados($tabela, $dados, $id);
        if ($resultado === TRUE) {
            echo "Dados atualizados com sucesso.";
        } else {
            echo "Erro ao atualizar dados: ";
        }

    ?>
    <br>
    <a href="index.html">Clique aqui para voltar</a>
</div>
</body>
</html>
 