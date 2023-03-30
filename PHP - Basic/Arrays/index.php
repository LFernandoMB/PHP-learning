<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
        <?php 
        /*
        // Array simples
            $n = array(3,5,2,8);
        // Add item no array
            $n[] = 7;
            print_r($n);

        // Array com passo
            $c = range(1, 20, 1);
            print_r($c);
            $c[] = 77;
            print_r($c);
            
        // Foreach
            $f = range(1, 20, 1);
            foreach($f as $v){
                echo "$v";
            }
            */
        // Criando Vetor com indice nomeado
            $v = array(1=>"A",4=>"B",7=>"C");
            print_r($v);
        // Add sempre ao fim do vetor
            $v[] = "L";
            $v[] = "F";
            print_r($v);
        // Destruindo posição 9 do vetor
            unset($v[9]);
            print_r($v);
            
        ?>
    </pre>
</div>
</body>
</html>
 