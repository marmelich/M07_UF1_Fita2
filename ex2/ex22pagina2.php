<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita2 - Ex2</title>
</head>
<body>
    <?php
    for($i=1; $i <=$_POST["quantitat"]; $i++ ){
        echo("<a href='ex22pagina3.php?comanda=$i'>Comanda ". $i. "</a></br>"); //posar al link ? seguit de la info que volem passar
    }


    ?>

</body>
</html>