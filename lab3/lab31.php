<?php
    $diametro = $_POST['diam'];
    $altura = $_POST['altu'];
    $radio = $diametro/2;
    $Pi = 3.141593;
    $volumen = $Pi*$radio*$altura;
    echo "<br/> El Volumen del cilindro es de ". $volumen. "metros cubicos";
?>