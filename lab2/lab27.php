<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $posicion = "arriba";

        switch($posicion){
            case "arriba": //Bloque 1
                echo "La variable contine";
                echo "el valor de arriba";
                break;
            case "abajo": //Bloque 2
                echo "La variable contiene";
                echo "el valor de abajo";
                break;
            default: //bloque 3
                echo "La variable contiene otro valor";
                echo "distinto de arriba y abajo";
        }
    ?>
</body>
</html>