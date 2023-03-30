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
        $var = "Teste de funcao Str";

        $texto = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";

        $p = "Leite";
	    $pr = 4.5;
	    
        $v[0] = 4;
	    $v[1] = 8;
	    $v[2] = 3;
	    print_r($v);

        echo "<br/>";
	    $v2 = array(3,7,6,2,1,9);
	    print_r($v2);

        echo "<br/>";
        //echo "O $p custa R$" . number_format($pr, 2);
	    printf("O %s custa R$ %.2f<br/>", $p, $pr);

        echo "<br/>";
        $tam = strlen($var);
        echo "Strlen -> $tam<br/>";

        $tamTexto = str_word_count($texto);
        echo "Str_word_count -> $tamTexto<br/>";

        $capita = ucwords($var);
        $min = strtolower($var);
        $maius = strtoupper($var);

        echo "Strtolower: $min |\nStrtoUpper: $maius |\nUcwords: $capita<br/>";

        $rev = strrev($var);
        echo "Strrev: $rev<br/>";

        $palavra = str_pad("PALAVRA",80, " ", STR_PAD_RIGHT);
        echo "Palavra -> $palavra";

        echo "<br/>";

        $linha = str_repeat("-", 25);
        echo "$linha";

        echo "<br/>";

        $troca = str_ireplace("TESTE", "Definição", $var);
        echo "$troca";
    ?>
</div>
</body>
</html>
 