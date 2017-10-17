<?php

if (!empty($_FILES)) {

    $narchivo= time().str_replace(" ","",basename(strtolower($_FILES['Filedata']['name'])));

    //$ruta0 = "../recursos/images/".strtolower($narchivo);
    $ruta0 = "recursos/images/sliders/".strtolower($narchivo);

    move_uploaded_file($_FILES['Filedata']['tmp_name'], $ruta0);
    //copy($_FILES['Filedata']['tmp_name'], $ruta0);

    require_once 'phpThumb/ThumbLib.inc.php';

    $thumb = PhpThumbFactory::create($ruta0);
    //$thumb->adaptiveResize(157, 124);

    /*
    $thumb->adaptiveResize(177, 133);
    //$thumb->save("../recursos/images/th_".$narchivo, 'jpg');
    $thumb->save("recursos/images/th_".$narchivo, 'jpg');

    $thumb = PhpThumbFactory::create($ruta0);
    //$thumb->adaptiveResize(388, 306);
    $thumb->adaptiveResize(533, 400);
    //$thumb->save("../recursos/images/med_".$narchivo, 'jpg');
    $thumb->save("recursos/images/med_".$narchivo, 'jpg');

    $thumb = PhpThumbFactory::create($ruta0);
    $thumb->adaptiveResize(154, 140);
    //$thumb->save("../recursos/images/th1_".$narchivo, 'jpg');
    $thumb->save("recursos/images/th1_".$narchivo, 'jpg');
    */

    $thumb->adaptiveResize(996, 420);
    //$thumb->save("../recursos/images/th_".$narchivo, 'jpg');
    $thumb->save("recursos/images/sliders/996_420_".$narchivo, 'jpg');

    $thumb = PhpThumbFactory::create($ruta0);
    $thumb->adaptiveResize(60, 33);
    //$thumb->save("../recursos/images/th1_".$narchivo, 'jpg');
    $thumb->save("recursos/images/sliders/60_33_".$narchivo, 'jpg');

    unlink($ruta0);

    echo $narchivo;

}

?>