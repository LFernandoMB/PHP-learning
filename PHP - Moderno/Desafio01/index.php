<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso Básico de PHP - Gustavo Guanabara</title>
</head>
<body>
    <div>
        <?php 
            $valor = $_GET["a"];
            echo "Valor enviado foi $valor, seu antecessor é " . --$valor . ", e seu sucessor é " . ++$valor;
        ?>
    </div>
</body>
</html>