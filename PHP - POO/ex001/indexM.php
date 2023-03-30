<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - POO - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      require_once 'Mouse.php';

      $m1 = new Mouse;
      
      $m1->cliqueDireito();
      echo "<br/>";
      $m1->cliqueEsquerdo();
      echo "<br/>";
      $m1->cliqueScroll();
      echo "<br/>";
      $m1->show();
      echo "<br/>";
      $m1->marca = "logitech";
      $m1->show();
    ?>
</div>
</body>
</html>
 