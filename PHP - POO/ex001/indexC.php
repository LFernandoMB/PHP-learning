<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - POO - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      require_once 'Correr.php';

      $c1 = new Correr;

      $c1->caminhar();
      echo "<br/>";
      $c1->correndo();
      echo "<br/>";

      $c1->agua = false;
      $c1->show();
      echo "<br/>";

      $c1->beberAgua();
      echo "<br/>";

      $c1->show();
      echo "<br/>";

      $c1->tenisAmarrado = true;
      $c1->amarrarTenis();
      echo "<br/>";

      $c1->tenisAmarrado = false;
      $c1->amarrarTenis();
      echo "<br/>";

      $c1->show();

    ?>
</div>
</body>
</html>