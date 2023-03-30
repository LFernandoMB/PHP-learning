<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de Herança</title>
</head>
<body>
    <pre>
        <?php 
            require_once "Pessoa.php";
            require_once "Aluno.php";
            require_once "Professor.php";
            require_once "Visitante.php";
            
            //$p1 = new Pessoa(); // Classe abstrata não pode ser instanciada
            $v1= new Visitante();

            $v1->setNome("Visitante 01");
            echo "{$v1->getNome()}";

        ?>
    </pre>
</body>
</html>