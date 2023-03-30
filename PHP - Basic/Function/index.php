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
        function mult($a, $b){
            $r = $a * $b;
            echo "<h2>Resultado é: $r [Procedimento]</h2>";
        }

        function soma(){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for($i=0; $i < $t; $i++){
                $s += $p[$i];
            }
            return $s;
        }

        mult(9, 7);
        mult(8, 7);
        mult(6, 7);

        $x = soma(2,5,8,7);
        echo "<h1>[Função] Resultado: $x</h1>";
        $y = soma(234,454,786,23);
        echo "<h1>[Função] Resultado: $y</h1>";
        $z = soma(10,3,7,5);
        echo "<h1>[Função] Resultado: $z</h1>";

    ?>
    <a href="valor.php">Voltar página anterior</a>
</div>
</body>
</html>
 