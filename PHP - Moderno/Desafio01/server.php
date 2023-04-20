<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Curso PHP Moderno- Gustavo Guanabara</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $valor = $_GET["num"] ?? 0;
                echo "<p>Valor enviado foi <strong>$valor</strong></p>";
                echo "<p>Seu antecessor é <strong>" . $valor - 1 ."</strong></p>";
                echo "<p>Seu sucessor é <strong>" . $valor + 1 ."</strong></p>";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        <!-- <button onclick="javascript:history.go">&#x2B05; Voltar</button> -->
    </main>
</body>
</html>