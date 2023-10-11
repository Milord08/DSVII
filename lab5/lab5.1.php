<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 5.1</title>
</head>
<body>
    Ejemplo de subir servidor web
    <br/><br/>
    <form action="lab51.php" method="post" enctype="multipart/form-data">
    <input type="file" name="nombre_archivo_cliente" /><br/><br/>
    <input type="submit" name="enviar" value="Enviar" />

    <?php
        if (is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'])){
            $idUnico = time();
            $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";

            move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'],
            $nombreDirectorio . $nombrearchivo); 

            echo "El archivo se ha subido satisfactoriamente al directorio 
            $nombreDirectorio<br>";
                echo "No se ha podido subir el archivo <br>";
        }else
            

    ?>
</body>
</html>