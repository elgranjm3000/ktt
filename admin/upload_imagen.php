<?php

if (!empty($_FILES)) {

    //$narchivo= mktime().str_replace(" ","",basename(strtolower($_FILES['Filedata']['name'])));

    $narchivo= time().str_replace(" ","",basename(strtolower($_FILES['Filedata']['name'])));

    //$ruta0 = "../recursos/images/".strtolower($narchivo);
    $ruta0 = "recursos/images/".strtolower($narchivo);

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

    require_once 'recursos/images/combina_image.php';

    $thumb->adaptiveResize(800, 600);
    //$thumb->save("../recursos/images/th_".$narchivo, 'jpg');
    $thumb->save("recursos/images/800_600_".$narchivo, 'jpg');
    $thumb->save("recursos/images/ma_800_600_".$narchivo, 'jpg');
    insertarmarcadeagua("recursos/images/ma_800_600_".$narchivo,"recursos/images/ktz-marca-agua-150.png",10, 1);

    $thumb = PhpThumbFactory::create($ruta0);
    $thumb->adaptiveResize(212, 212);
    //$thumb->save("../recursos/images/th1_".$narchivo, 'jpg');
    $thumb->save("recursos/images/212_212_".$narchivo, 'jpg');
    $thumb->save("recursos/images/ma_212_212_".$narchivo, 'jpg');
    insertarmarcadeagua("recursos/images/ma_212_212_".$narchivo,"recursos/images/ktz-marca-agua-75.png",10, 3);
	
	$thumb = PhpThumbFactory::create($ruta0);
    $thumb->adaptiveResize(360, 360);
    //$thumb->save("../recursos/images/th1_".$narchivo, 'jpg');
    $thumb->save("recursos/images/360_360_".$narchivo, 'jpg');
    $thumb->save("recursos/images/ma_360_360_".$narchivo, 'jpg');
    insertarmarcadeagua("recursos/images/ma_360_360_".$narchivo,"recursos/images/ktz-marca-agua-120.png",10, 4);

    $thumb = PhpThumbFactory::create($ruta0);
    //$thumb->adaptiveResize(388, 306);
    $thumb->adaptiveResize(220, 166);
    //$thumb->save("../recursos/images/med_".$narchivo, 'jpg');
    $thumb->save("recursos/images/220_166_".$narchivo, 'jpg');
    $thumb->save("recursos/images/ma_220_166_".$narchivo, 'jpg');
    insertarmarcadeagua("recursos/images/ma_220_166_".$narchivo,"recursos/images/ktz-marca-agua-50.png",10, 2);

    //$thumb = PhpThumbFactory::create($ruta0);
    //$thumb->adaptiveResize(455, 200);
    		//$thumb->save("../recursos/images/med_".$narchivo, 'jpg');
    //$thumb->save("recursos/images/455_200_".$narchivo, 'jpg');

    $thumb = PhpThumbFactory::create($ruta0);
    //$thumb->adaptiveResize(388, 306);
    $thumb->adaptiveResize(134, 134);
    //$thumb->save("../recursos/images/med_".$narchivo, 'jpg');
    $thumb->save("recursos/images/134_134_".$narchivo, 'jpg');
    $thumb->save("recursos/images/ma_134_134_".$narchivo, 'jpg');
    insertarmarcadeagua("recursos/images/ma_134_134_".$narchivo,"recursos/images/ktz-marca-agua-50.png",10, 5);

    $thumb = PhpThumbFactory::create($ruta0);
    $thumb->adaptiveResize(60, 33);
    //$thumb->save("../recursos/images/th1_".$narchivo, 'jpg');
    $thumb->save("recursos/images/60_33_".$narchivo, 'jpg');


    unlink($ruta0);
    echo $narchivo;

}

?>