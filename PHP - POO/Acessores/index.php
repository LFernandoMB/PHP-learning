<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - POO - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
  <?php
      require_once 'Caneta.php';

      $c1 = new Caneta("Bic","Preta",0.5);
      $c2 = new Caneta("Moblanc","Azul",1.0);
      print_r($c1);
      print_r($c2);

      $c1->setModelo("Troca");
      $c1->setPonta(0.3);
      $c1->moverTampa();

      print_r($c1);
      
      $c1->showAll();
      $c2->showAll();

      $c1->moverTampa();
      $c1->showAll();
    ?>
  </pre>
</div>
</body>
</html>