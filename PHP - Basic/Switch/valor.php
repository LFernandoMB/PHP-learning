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
        $num = isset($_GET["num"]) ? $_GET["num"] : 0;
        $op = isset($_GET["oper"]) ? $_GET["oper"] : 1;
        switch($op){
          case 1:
            $r = $num * 2;
            echo "Resultado do dobro de $num: <span class='foco'>$r</sapn>";
            break;
          case 2:
            $r = $num * 3;
            echo "Resultado do triplo de $num: <span class='foco'>$r</sapn>";
            break;
          case 3: 
            $r = sqrt($num);
            echo "Resultado da raiz quadrada de $num: <span class='foco'>$r</sapn>";
            break;
          default:
            echo "Opção inválida";
        }
    ?>
    <br>
    <a href="index.html">Clique aqui para voltar</a>
</div>
</body>
</html>
 