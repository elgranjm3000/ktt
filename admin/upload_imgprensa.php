<?php

if (!empty($_FILES)) {

    $narchivo= mktime().str_replace(" ","",basename(strtolower($_FILES['Filedata']['name'])));

    //$ruta0 = "../recursos/images/".strtolower($narchivo);
    
    $ruta0 = "recursos/images/".strtolower($narchivo);

    move_uploaded_file($_FILES['Filedata']['tmp_name'], $ruta0);

 	require_once 'phpThumb/ThumbLib.inc.php';

    $thumb = PhpThumbFactory::create($ruta0);
   	$thumb->adaptiveResize(535,95);
	$thumb->save("../recursos/images/th_".$narchivo, 'jpg');
   
    echo $narchivo;

}

?>