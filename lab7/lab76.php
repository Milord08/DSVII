<?php
    include('class_lib.php');

    $diam = $_post['diam'];
    $altu = $_post['altu'];

    $cil = new Cilindro($diam,$altu);

    $volumen = $cil->calc_volumen();
    $area = $cil->calc_area();

    echo "<br/> EL VOLUMEN DEL CILINDRO ES DE ". volumen ."metros cubicos";
    echo "<br/> EL AREA DEL CILINDRO ES DE ". $area." METROS CUADRADOS "
?>