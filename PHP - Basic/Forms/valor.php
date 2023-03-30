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
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Sem nome]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sexo Indefinido]";
        $idade = date("Y") - $ano;
        echo "Olá $nome, você tem $idade e é do sexo $sexo!"
    ?>
    <br>
    <a href="index.html">Clique aqui para voltar</a>
</div>
</body>
</html>
 