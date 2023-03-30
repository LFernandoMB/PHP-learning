<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="valorResultado.php" method="get">
        <select name="num">
            <?php 
                for($count=1; $count <= 10; $count++){
                    echo "<option>$count</option>";
                }
            ?>
            
        </select>
        <input type="submit" class="botao" value="Tabuada"/>
    </form>
</div>
</body>
</html>
 