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
            require_once "Animal.php";
            require_once "Mamifero.php";
            require_once "Lobo.php";
            require_once "Cachorro.php";

            // $animal1 = new Animal(); // Não pode ser instanciado por ser Classe Abstrata
            $animal1 = new Mamifero();
            $cachorro = new Cachorro();
            $lobo = new Lobo();

            $animal1->emitirSom();
            $cachorro->emitirSom();
            $lobo->emitirSom();
            echo "<hr>";


       ?>
    </pre>
</body>
</html>