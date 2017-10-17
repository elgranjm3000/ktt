<?php
function insertarmarcadeagua($imagen,$marcadeagua,$margen, $opc)
{
	//Se supone que la marca de agua tiene menor tamaño que la imagen
	//$imagen es la ruta de la imagen. Ej.: "carpeta/imagen.jpg"
	//&marcadeagua es la ruta de la imagen marca de agua. Ej.: "marca.png"
	//$margen determina el margen que quedará entre la marca y los bordes de la imagen

	//Averiguamos la extensión del archivo de imagen
	$trozos_nombre_imagen=explode(".",$imagen);
	$extension_imagen=$trozos_nombre_imagen[count($trozos_nombre_imagen)-1];

	//Creamos la imagen según la extensión leída en el nombre del archivo
	if(preg_match('/jpg|jpeg|JPG|JPEG/',$extension_imagen))
		$img=ImageCreateFromJPEG($imagen);
    	if(preg_match('/png|PNG/',$extension_imagen))
        	$img=ImageCreateFromPNG($imagen);
    	if(preg_match('/gif|GIF/',$extension_imagen))
        	$img=ImageCreateFromGIF($imagen);

	//declaramos el fondo como transparente
	ImageAlphaBlending($img, true);

	//Ahora creamos la imagen de la marca de agua
	//$marcadeagua = ImageCreateFromPNG($marcadeagua);
	$marcadeagua = imagecreatefrompng($marcadeagua);
	//$marcadeagua = imagecreatefromjpeg($marcadeagua);

	//Hallamos las dimensiones de ambas imágenes para alinearlas
	$Xmarcadeagua = imagesx($marcadeagua);
	$Ymarcadeagua = imagesy($marcadeagua);
	$Ximagen = imagesx($img);
	$Yimagen = imagesy($img);

	//echo $Ximagen." ".$Xmarcadeagua."<br>";

	//Copiamos la marca de agua encima de la imagen (alineada abajo a la derecha)
	//imagecopy($img, $marcadeagua, $Ximagen-$Xmarcadeagua-$margen, $Yimagen-$Ymarcadeagua-$margen, 0, 0, $Xmarcadeagua, $Ymarcadeagua);

	$ubicacion_x = 10;
	$ubicacion_y = 0;

	if($opc == 1)
	{
		// para imagenes de 800 * 600
		//imagecopy($img, $marcadeagua, 20, ($Yimagen/2)-70, 0, 0, $Xmarcadeagua, $Ymarcadeagua);
		$ubicacion_y = ($Yimagen/2)-70;
	}

	if($opc == 2)
	{
		// para imagenes de 220 * 116
		//imagecopy($img, $marcadeagua, 15, ($Yimagen/2)-30, 0, 0, $Xmarcadeagua, $Ymarcadeagua);
		$ubicacion_y = ($Yimagen/2)-30;
	}
	
	if($opc == 3)
	{
		// para imagenes de 220 * 116
		//imagecopy($img, $marcadeagua, 15, ($Yimagen/2)-30, 0, 0, $Xmarcadeagua, $Ymarcadeagua);
		$ubicacion_y = ($Yimagen/2)-50;
	}
	
	if($opc == 4)
	{
		// para imagenes de 220 * 116
		//imagecopy($img, $marcadeagua, 15, ($Yimagen/2)-30, 0, 0, $Xmarcadeagua, $Ymarcadeagua);
		$ubicacion_y = ($Yimagen/2)-60;
	}

	if($opc == 5)
	{
		// para imagenes de 220 * 116
		//imagecopy($img, $marcadeagua, 15, ($Yimagen/2)-30, 0, 0, $Xmarcadeagua, $Ymarcadeagua);
		$ubicacion_y = ($Yimagen/2)-1;
	}

	imagecopy($img, $marcadeagua, $ubicacion_x, $ubicacion_y, 0, 0, $Xmarcadeagua, $Ymarcadeagua);

	//Guardamos la imagen sustituyendo a la original, en este caso con calidad 100
	ImageJPEG($img, $imagen,100);


	//$ruta0 = "combinar/".$img;
	//copy($img, "combinar");

	//Eliminamos de memoria las imágenes que habíamos creado
	imagedestroy($img);
	imagedestroy($marcadeagua);
}
?>

<?php
	//insertarmarcadeagua("007g.jpg","ktz-marca-agua-150.png",10);

?>