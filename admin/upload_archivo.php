<?php

if (!empty($_FILES)) {

    $narchivo= mktime().str_replace(" ","",basename(strtolower($_FILES['Filedata']['name'])));

    $ruta0 = "../recursos/pdf/".strtolower($narchivo);

    move_uploaded_file($_FILES['Filedata']['tmp_name'], $ruta0);

    echo $narchivo;

}

?>