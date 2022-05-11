<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 
    for($i=0;$i<=100;$i++){
    
    echo "<p>$i </br></p>";

    if($i==18) {
        echo "<p>Bienvenido a la mayoría de edad</p>";
    }

    if($i==40) {
        echo "<p>Bienvenido a los nuevos 30</p>";
    }

    if($i==60) {
        echo "<p>Ya te queda poco para jubilarte</p>";
    }

    if($i==70) {
        echo "<p>Aguanta un poco más que tu puedes</p>";
    }

    if($i==90) {
        echo "<p>Bueno ya has vivido suficiente, qué mas quieres</p>";

        break;
    }

    

    
}

    ?>
</body>
</html>