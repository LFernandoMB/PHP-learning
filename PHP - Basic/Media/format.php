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
        $nota1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        $nota2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
        $media = ($nota1 + $nota2)/2;
        if($media < 5){
          $status = "REPROVADO";
        }elseif(($media >=5) && ($media < 7)){
          $status = "RECUPERAÇÃO";
        }else{
          $status = "APROVADO";
        }
        echo "Média do aluno foi $media, e seu statos é: $status!"; 
    ?>
    <br>
    <a href="index.html">Clique aqui para voltar</a>
</div>
</body>
</html>
 