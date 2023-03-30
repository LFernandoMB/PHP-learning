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
        $est = isset($_GET["reg"]) ? $_GET["reg"] : 0;
        switch($est){
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
          case 7:
          case 8:
            echo "Região <span class='foco'>NORTE</sapn>";
            break;
          case 8:
          case 9:
          case 10:
          case 11:
          case 12:
          case 13:
          case 14:
          case 15:
          case 16:
            echo "Região <span class='foco'>NORDESTE</sapn>";
            break;
          case 17:
          case 18:
          case 19:
           echo "Região <span class='foco'>CENTRO-OESTE</sapn>";
            break;
          case 20:
          case 21:
          case 22:
          case 23:
            echo "Região <span class='foco'>SUDESTE</sapn>";
            break;
          case 24:
          case 25:
          case 26:
            echo "Região <span class='foco'>SUL</sapn>";
            break;
          default:
            echo "Opção inválida";
        }
    ?>
    <br>
    <p><a href="index.html" class='botao'>Clique aqui para voltar</a></p>
</div>
</body>
</html>
 