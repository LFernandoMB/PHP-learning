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
            require_once "Funcionario.php";
            
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pessoa");
            $p2->setNome("Aluno");
            $p3->setNome("Professor");
            $p4->setNome("Funcionaria");

            $p1->setIdade(30);
            $p2->setIdade(18);
            $p3->setIdade(50);
            $p4->setIdade(28);

            $p1->setSexo("F");
            $p2->setSexo("M");
            $p3->setSexo("M");
            $p4->setSexo("F");

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

            echo "<hr>";

            $p1->fazerAniversario();
            $p2->fazerAniversario();
            $p3->fazerAniversario();
            $p4->fazerAniversario();

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

            echo "<hr>";

            $p2->setCurso("PHP");
            $p3->setEspecialidade("Programação");
            $p4->setSetor("Comercial");

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

            echo "<hr>";

            $p2->setMatricula();
            $p3->setSalario(5500);
            $p4->setTrabalhando();

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
    </pre>
</body>
</html>