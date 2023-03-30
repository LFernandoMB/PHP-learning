<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resposta do Forms</title>
</head>
<body>
    <header>
        <h1>Obrigado por responder</h1>
    </header>
    <main>
    <?php 
        $nome = $_GET["nome"] ?? "Sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "da Silva";

        echo "Obrigado por responder o Forms <strong>$nome $sobrenome</strong>!"
    ?>
    </main>
    <p><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>
</body>
</html>