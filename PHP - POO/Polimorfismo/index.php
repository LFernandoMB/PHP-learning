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
            require_once "Reptil.php";
            require_once "Peixe.php";
            require_once "Ave.php";

            // $animal1 = new Animal(); // Não pode ser instanciado por ser Classe Abstrata
            $animal1 = new Mamifero();
            $animal2 = new Reptil();
            $animal3 = new Peixe();
            $animal4 = new Ave();

            $animal1->setCorPelo("Preto");
            $animal2->setCorEscama("Verde");
            $animal3->setCorEscama("Prata");
            $animal4->setCorPena("Amarelo");

            print_r($animal1);
            print_r($animal2);
            print_r($animal3);
            print_r($animal4);

            echo "<hr>";

            $animal1->locomover();
            echo "<br>";
            $animal2->locomover();
            echo "<br>";
            $animal3->locomover();
            echo "<br>";
            $animal4->locomover();

            echo "<hr>";

            $animal1->alimentar();
            echo "<br>";
            $animal2->alimentar();
            echo "<br>";
            $animal3->alimentar();
            echo "<br>";
            $animal4->alimentar();

            echo "<hr>";

            $animal1->emitirSom();
            echo "<br>";
            $animal2->emitirSom();
            echo "<br>";
            $animal3->emitirSom();
            echo "<br>";
            $animal4->emitirSom();
       ?>
    </pre>
</body>
</html>