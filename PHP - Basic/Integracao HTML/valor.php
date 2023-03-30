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
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "Valor enviado: $valor, a raiz dele é " . number_format($rq, 2);
    ?>
    <br>
    <a href="index.html">Clique aqui para voltar</a>
</div>
</body>
</html>
 