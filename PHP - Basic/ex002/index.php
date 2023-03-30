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
            $num1 = $_GET["a"];
            $num2 = $_GET["b"];
            //$resultado = $num1 + (($num2*100)/$num1);
            $resultado = $num1 + (($num2*100)/$num1);
            echo "Preço do produto é R$" . number_format($num1,2,",",".") . " e a porcentagem calculada é de $num2% - Com aumento fica R$" . number_format($resultado,2,",",".");
        ?>
    </div>
</body>
</html>