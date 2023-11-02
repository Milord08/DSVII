<?php
    if(array_key_exists('enviar', $_POST)){

        include('class_lib.php');

        $diam = $_POST['diam'];
        $altu = $_POST['altu'];

        $cil = new Cilindro($diam,$altu);

        $volumen = $cil->calc_volumen();
        $area = $cil->calc_area();

        echo "<br/> EL VOLUMEN DEL CILINDRO ES DE ".$volumen." METROS CUBICOS";
        echo "<br/> EL AREA DEL CILINDRO ES DE ".$area."METROS CUADRADOS";
    }else {
    
    }
?>