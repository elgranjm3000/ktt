<?php

if (!empty($_FILES))
{

    $narchivo= time().str_replace(" ","",basename(strtolower($_FILES['Filedata']['name'])));

    //$ruta0 = "../recursos/swf/".strtolower($narchivo);
    $ruta0 = "../recursos/videos/".strtolower($narchivo);

    move_uploaded_file($_FILES['Filedata']['tmp_name'], $ruta0);

    echo $narchivo;

}

?>