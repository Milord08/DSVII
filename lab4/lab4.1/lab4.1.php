<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.1</title>
</head>
<body>
    <h1>Imágenes Dinámicas</h1>
    
    <?php
    // Obtener el valor de las ventas desde el usuario (puedes usar un formulario para esto).
    $ventas = $_POST['ventas'] ?? null;

    if ($ventas !== null && is_numeric($ventas)) {
        // Determinar qué imagen mostrar según el desempeño de ventas.
        if ($ventas > 80) {
            $imagen = './Applications/XAMPP/xamppfiles/htdocs/php/lab4/lab4.1/Satisfecho.png';
            $mensaje = 'Las ventas superan el 80%.';
        } elseif ($ventas >= 50 && $ventas <= 79) {
            $imagen = './Applications/XAMPP/xamppfiles/htdocs/php/lab4/lab4.1/Medio.png';
            $mensaje = 'Las ventas están entre el 50% y el 79%.';
        } else {
            $imagen = './Applications/XAMPP/xamppfiles/htdocs/php/lab4/lab4.1/Malo.png';
            $mensaje = 'Las ventas no alcanzan el 50%.';
        }
        
        // Mostrar la imagen y el mensaje.
        echo '<img src="' . $imagen . '" alt="Imagen de desempeño">';
        echo '<p>' . $mensaje . '</p>';
    } else {
        // Si no se proporciona un valor válido, mostrar un mensaje de error.
        echo '<p>Por favor, introduce un valor válido de ventas.</p>';
    }
    ?>

    <!-- Formulario para ingresar el valor de las ventas -->
    <form method="post">
        <label for="ventas">Valor de las ventas:</label>
        <input type="text" name="ventas" id="ventas" required>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>