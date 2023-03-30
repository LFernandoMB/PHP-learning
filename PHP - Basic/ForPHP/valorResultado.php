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
        $n = isset($_GET['num']) ? $_GET['num'] : 1;
        for($tab=0; $tab <= 10; $tab++){
            $r = $n*$tab;
            echo "$n X $tab = <span class='foco'>\t$r</span> <br>";
        }
    ?>
    <a href="valor.php">Voltar página anterior</a>
</div>
</body>
</html>
 