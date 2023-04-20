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
        <h1>Números Aleatórios</h1>
        <p>
            <?php 
                echo "<p>Gerando número aleatório entre 0 e 100... <br></p>";
                $lista = array();
                // $valor = rand(0, 100); // rand() = 1951 -> Linear Congrential Generator
                // $valor = mt_rand(1, 10); // mt_rand() = 1997 -> Mersenne Twister
                // $valor = random_int(0, 100); // random_int() -> Gera números aleatórios criptograficamente seguros
                while (count($lista) < 10){
                    $valor = mt_rand(1, 10);
                    if (in_array($valor, $lista)) {
                        echo "<p>Número $valor já foi gerado!<p>";
                    } else {
                        echo "<p>O valor gerado foi <strong>$valor</strong></p>";
                        array_push($lista, $valor);
                    }
                }

                print_r($lista);
                
            ?>
            <button onclick="javascript:document.location.reload()">&#x1F504 Gerar outro</button>
        </p>
    </main>
</body>
</html>
