<html>
<head>
    <title>Laboraotrio 3.3</title>
</head>
<body>
    <?PHP 
        if (array_key_exists('enviar',$_POST)){
            if($_REQUEST ['Apellido'] != ""){
                echo "El apellido Ingresado es: $_REQUEST [Apellido] ";
            }else{
                echo "Favor coloque el apellido";
            }

            echo "<BR>";

            if($_REQUEST ['Nombre'] != ""){
                echo "El nombre Ingresado es: $_REQUEST [nombre] ";
            }else{
                echo "Favor coloque el nombre";
            }

        }
        else{
            ?>
            <form action="lab33.php" method="post">
                nombre: <input type="text" name="Nombre"><br>
                Apellido: <input type="text" name="Nombre"><br>
                <input type="submit" name="enviar" value="Enviar datos">
            </form>
            <?PHP
        }
    ?>
</body>
</html>