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
      require_once 'Banco.php';
      // INSTANCIANDO UM OBJETO DA CLASSE BANCO
      $b1 = new Banco();
      $b2 = new Banco();

      echo "INÍCIO";
      $b1->showAll(); // STATUS
      $b2->showAll(); // STATUS

      // ABRINDO A CONTA
      $b1->abrirConta("Luis Fernando","1000-7","CC");
      $b2->abrirConta("Iheda Ribeiro","1000-10","CP");

      echo "CRIANDO CONTA";
      $b1->showAll(); // STATUS
      $b2->showAll(); // STATUS

      // CHAMANDO MÉTODO DEPOSITAR
      $b1->depositar(300);
      $b2->depositar(500);

      echo "DEPOSITANDO R$300,00";
      $b1->showAll(); // STATUS
      $b2->showAll(); // STATUS

      // CHAMANDO MÉTODO SAQUE
      $b1->saque(75);
      $b2->saque(140);

      echo "SACANDO R$75,00";
      $b1->showAll(); // STATUS
      $b2->showAll(); // STATUS

      // CHAMANDO MÉTODO PAGAR MENSALIDADE
      $b1->pagarMensalidade();
      $b2->pagarMensalidade();

      echo "PAGANDO MENSALIDADE  CC: R$15,00 CP: R$12,00";
      $b1->showAll(); // STATUS
      $b2->showAll(); // STATUS

      $b1->fecharConta();
      $b2->fecharConta();

      echo "TENTANDO FECHAR CONTA";
      $b1->showAll(); // STATUS
      $b2->showAll(); // STATUS

      $b1->saque(260);
      $b2->saque(498);

      echo "SACANDO R$240,00";
      $b1->showAll(); // STATUS
      $b2->showAll(); // STATUS

      $b1->fecharConta();
      $b2->fecharConta();

      echo "CONTA FECHADA";
      $b1->showAll(); // STATUS
      $b2->showAll(); // STATUS

    ?>
  </pre>
</div>
</body>
</html>