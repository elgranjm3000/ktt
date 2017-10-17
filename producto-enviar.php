<!DOCTYPE html>



<html lang="es-ES">



<head>



<meta charset="utf-8" />



<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />



<title>www.ktzperu.com - LINEA DE GIMNASIOS Y RASCADORES PARA GATOS</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



<META content="MSHTML 6.00.2900.2180" name=GENERATOR>



<meta name="keywords" content="ktzperu">



<meta name="description" content="ktzperu">



<meta name="Title" content="ktzperu">



<!-- <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script> -->



<link rel="icon" href="http://ktzperu.com/ktzperu.ico" type="image/x-icon">



<link rel="shortcut icon" href="http://ktzperu.com/ktzperu.ico" type="image/x-icon" />



<!-- Start Canvas -->

<script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script>

<script src="http://code.createjs.com/tweenjs-0.3.0.min.js"></script>

<script src="http://code.createjs.com/movieclip-0.5.0.min.js"></script>

<script src="http://code.createjs.com/preloadjs-0.2.0.min.js"></script>

<script src="resources/js/anim/logotipo.js"></script>

<script src="resources/js/anim/animlogotipo.js"></script>

<!-- End Canvas -->



<!--[if lt IE 9]>



    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>



<![endif]-->







<script src="resources/js/run2.js" type="text/javascript"></script>



<link rel="stylesheet" type="text/css" href="resources/tipografias/stylesheet.css">



<link rel="stylesheet" href="resources/css/nav.css" type="text/css" media="all"/>







<!-- Start Menu header-->

<!--

<script src="resources/js/js-menuheader/jquery-1.8.0.min.js" type="text/javascript"></script>



<script src="resources/js/js-menuheader/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>



<script src="resources/js/js-menuheader/functions.js" type="text/javascript"></script>

-->

<!-- End Menu header -->







<!-- Start slider NIVO-->



    <link rel="stylesheet" href="resources/js/js-slider/themes/default/default.css" type="text/css" media="screen" />



    <link rel="stylesheet" href="resources/js/js-slider/nivo-slider.css" type="text/css" media="screen" />



    <link rel="stylesheet" href="resources/js/js-slider/style.css" type="text/css" media="screen" />



    <script type="text/javascript" src="resources/js/js-slider/jquery-1.9.0.min.js"></script>



    <script type="text/javascript">



    $(window).load(function() {



        $('#slider').nivoSlider();



        $("#btn_left").click(function()

        {

            $(".nivo-prevNav").click();

        });



        $("#btn_right").click(function()

        {

            $(".nivo-nextNav").click();

        });



    });



    </script>



<!-- End slider NIVO-->







<!-- Start Galeria-->



<link rel="stylesheet" href="resources/css/touchTouch.css">



<script src="resources/js/js-galeria/jquery.js"></script>



<script src="resources/js/js-galeria/jquery-migrate-1.1.1.js"></script>



<script src="resources/js/js-galeria/superfish.js"></script>



<script src="resources/js/js-galeria/touchTouch.jquery.js"></script>



<script src="resources/js/js-galeria/jquery.equalheights.js"></script>



<script src="resources/js/js-galeria/jquery.easing.1.3.js"></script>



<!-- jPages-master -->

<link rel="stylesheet" href="resources/js/jPages-master/css/jPages.css">



<script src="resources/js/jPages-master/js/jPages.js"></script>



<link rel="stylesheet" href="resources/css/formcontacto_2.css">







<script type="text/javascript">



    $(function(){

        $("#msj_enviar").hide();

        $("#btn_enviar").click(function()

        {

            if( ($("#email").val() != "") && ($("#nombre").val() != ""))

            {

                $.ajax({

                    url:"envia_consulta.php",

                    type:"POST",

                    data:$("#contacto1").serialize(),

                    beforeSend:function(data)

                    {

                        $("#msj_enviar").show();

                        $("#msj_enviar").html("Enviando consulta... <img src='resources/img/loading.gif' width=16 height=16 />");

                    },

                    success:function(data){

                        if(data != 1)

                            $("#msj_enviar").html("Hubo problema al enviar la consulta");

                        else

                        {

                            $("#msj_enviar").hide();

                            alert("Gracias. Su consulta se envio satisfactoriamente. Pronto nos comunicaremos con usted.")

                            setTimeout("window.location='producto.php'",2000);

                        }

                    }

                });

            }

            else

            {

                alert("Debe ingresar su Nombre y/o Email para poder realizar la consulta");

            }

        })



    });



</script>





<!-- End Galeria-->







<!-- Start slider NIVO-->



<script type="text/javascript" src="resources/js/js-slider/jquery.nivo.slider.js"></script>



<!-- End slider NIVO-->







</head>





<body onload="init();">

<!-- header -->



<header class="header">



	<div class="shell">



		<div class="header-top">



			<div class="header-col0">

                <a href="index.php"><canvas id="canvas" width="640" height="110" style="background-color:#ffffff"></canvas></a>

            </div>



            <div class="header-col3">



            	<div class="col31">



                    <nav class="idioma-nav">



                        <ul>



                          <li><a href="index.php" class="active">ESP</a></li>



                          <li><a href="en/index.php">ENG</a></li>



                          <li><a href="admin/index.php" target="_blank"><img src="resources/img/icono-ktz-login-0.png"></a></li>



                        </ul>



                    </nav>



                </div>



            	<div class="col32">



                	<div class="icono">&nbsp;</div>



                    <div><p class="txttelf">&nbsp;</p></div>



                </div>



            	<div class="col33">



                    <nav>



                        <ul class="list-rs">



                            <?php

                                include_once 'admin/cls_MantixOaD.php';



                                $obj_links = new MantixOaD();



                                $sql = "select * from ktz_links where id = 1";



                                $obj_links->listaSP($sql, "", "");



                                while($obj_links->no_vacio())

                                {

                                    echo

                                    '

                                        <li><a class="icon-1" href="'.$obj_links->valor('facebook').'" target="_blank"></a></li>



                                        <li><a class="icon-2" href="'.$obj_links->valor('twitter').'" target="_blank"></a></li>



                                        <li><a class="icon-3" href="'.$obj_links->valor('youtube').'" target="_blank"></a></li>

                                    ';



                                }



                                ?>

                            <!--

                            <li><a class="icon-1" href="#"></a></li>



                            <li><a class="icon-2" href="#"></a></li>



                            <li><a class="icon-3" href="#"></a></li>

                            -->



                        </ul>



                    </nav>



                </div>



            </div>



		</div><!-- FIN header-top -->



    </div><!-- FIN shell -->



</header>



<!-- FIN header -->







<!-- inicio MENU -->



<div id="topmenur">



    <div class="shell">



		<nav id="navigation">



			<ul>



            	<li><a href="index.php" target="_parent">Inicio</a></li>



                <li><a href="conocenos.php" target="_parent">Conócenos</a></li>



                <li><a href="producto.php" target="_parent" class="active">Productos</a></li>



                <li><a href="galeria.php" target="_parent">Galería</a></li>



                <li><a href="preguntas-frecuentes.php?page=1" target="_parent" >Preguntas Frecuentes</a></li>



                <li><a href="contacto.php" target="_parent">Contacto</a></li>



			</ul>



		</nav>



    </div>



</div>



<!-- FIN MENU -->







<!-- inicio Slider -->



<div id="topsliderf">



    <div class="shell">



        <div id="wrapper">



            <div class="slider-wrapper theme-default">



                <ol><div id="slider" class="nivoSlider">



                    <?php

                        include_once 'admin/cls_MantixOaD.php';



                        $obj_secciones = new MantixOaD();



                        $sql = "select imagen_1, imagen_2, imagen_3, imagen_4, imagen_5, imagen_6, metas_1, metas_2, metas_3, metas_4, metas_5, metas_6 from ktz_imagenes_slider where estado = 1 and tipo = 4";



                        $obj_secciones->listaSP($sql, "", "");



                        while($obj_secciones->no_vacio())

                        {

                            $imagen_1 = $obj_secciones->valor('imagen_1');

                            $imagen_2 = $obj_secciones->valor('imagen_2');

                            $imagen_3 = $obj_secciones->valor('imagen_3');

                            $imagen_4 = $obj_secciones->valor('imagen_4');

                            $imagen_5 = $obj_secciones->valor('imagen_5');

                            $imagen_6 = $obj_secciones->valor('imagen_6');

                            $metas_1 = $obj_secciones->valor('metas_1');

                            $metas_2 = $obj_secciones->valor('metas_2');

                            $metas_3 = $obj_secciones->valor('metas_3');

                            $metas_4 = $obj_secciones->valor('metas_4');

                            $metas_5 = $obj_secciones->valor('metas_5');

                            $metas_6 = $obj_secciones->valor('metas_6');



                            if($imagen_1 != "")

                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_1.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_1.'" alt="'.$metas_1.'" title="" />';

                            if($imagen_2 != "")

                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_2.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_2.'" alt="'.$metas_2.'" title="" />';

                            if($imagen_3 != "")

                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_3.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_3.'" alt="'.$metas_3.'" title="" />';

                            if($imagen_4 != "")

                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_4.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_4.'" alt="'.$metas_4.'" title="" />';

                            if($imagen_5 != "")

                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_5.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_5.'" alt="'.$metas_5.'" title="" />';

                            if($imagen_6 != "")

                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_6.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_6.'" alt="'.$metas_6.'" title="" />';

                        }



                        /*echo

                        '

                            <img src="admin/recursos/images/sliders/996_420_'.$imagen_1.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_1.'" alt="'.$metas_1.'" title="" />



                            <img src="admin/recursos/images/sliders/996_420_'.$imagen_2.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_2.'" alt="'.$metas_2.'" title="" />



                            <img src="admin/recursos/images/sliders/996_420_'.$imagen_3.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_3.'" alt="'.$metas_3.'" title="" />



                            <img src="admin/recursos/images/sliders/996_420_'.$imagen_4.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_4.'" alt="'.$metas_4.'" title="" />



                            <img src="admin/recursos/images/sliders/996_420_'.$imagen_5.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_5.'" alt="'.$metas_5.'" title="" />



                            <img src="admin/recursos/images/sliders/996_420_'.$imagen_6.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_6.'" alt="'.$metas_6.'" title="" />

                        ';*/

                    ?>

                    <!--



                    <img src="resources/img/slider/s11.jpg" data-thumb="resources/img/slider/s11.jpg" alt="" title="" />



                    <img src="resources/img/slider/s12.jpg" data-thumb="resources/img/slider/s12.jpg" alt="" title="" />



                    <img src="resources/img/slider/s13.jpg" data-thumb="resources/img/slider/s13.jpg" alt="" title="" />



                    <img src="resources/img/slider/s14.jpg" data-thumb="resources/img/slider/s14.jpg" alt="" title="" />



                    <img src="resources/img/slider/s15.jpg" data-thumb="resources/img/slider/s15.jpg" alt="" title="" />



                    -->

                </div></ol>



                <div class="nivo-directionNav">

                    <a id="btn_left" class="nivo-prevNav">Prev</a>

                    <a id="btn_right" class="nivo-nextNav">Next</a>

                </div>



            </div>



        </div>



    </div>



</div>



<div class="clbg25">&nbsp;</div>



<!-- FIN Slider -->











<!-- inicio main -->



<div class="shell">



	<section id="pdto-enviar">



    <div class="fil1">



    	<div class="titulo"><h1>PRODUCTOS</h1></div>



    </div>



    <div class="fil1">



		<div class="col1">



            <?php



                $obj_cat = new MantixOaD();



                // listamos todas la categorias del tipo 1

                $sql = "select id, nombre from ktz_categorias_productos where estado = 1 order by nombre";



                $obj_cat->listaSP($sql, "", "");



                $texto_class = "";



                while($obj_cat->no_vacio())

                {

                    echo "<h2>".$obj_cat->valor('nombre')."</h2>";



                        echo '<nav id="detalle-pdto-list">';



                            echo "<ul>";



                            $obj_prod_list = new MantixOaD();



                            $sql = "select * from ktz_productos where estado = 1 and idcategoria = ".$obj_cat->valor('id')." ";



                            $obj_prod_list->listaSP($sql, "", "");



                            while($obj_prod_list->no_vacio())

                            {

                                $texto_class = "";



                                if($_GET['id_producto'] == $obj_prod_list->valor('id'))

                                    $texto_class = "class='active'";

                                else

                                    $texto_class = "";



                                echo '<li><a '.$texto_class.' href="producto-detalle.php?id_producto='.$obj_prod_list->valor('id').'&id_cat_prod='.$obj_prod_list->valor('idcategoria').'&idtipo=0">'.$obj_prod_list->valor('nombre').'</a></li>';

                            }



                            echo "</ul>";



                        echo "</nav>";



                        echo '<div class="clbg15">&nbsp;</div>';



                }



            ?>

            <!--

            <h2>Gimnasio</h2>



            <nav id="detalle-pdto-list">



                <ul>





                    <li><a href="#">Producto gimnasio uno</a></li>



                    <li><a href="#">Producto gimnasio dos</a></li>



                    <li><a href="#">Producto gimnasio tres</a></li>



                    <li><a href="#">Producto gimnasio cuatro</a></li>



                    <li><a href="#">Producto gimnasio cinco</a></li>





                </ul>



            </nav>



            <div class="clbg15">&nbsp;</div>







            <h2>Rascadores</h2>



            <nav id="detalle-pdto-list">



                <ul>



                    <li><a href="#">Producto gimnasio uno</a></li>



                    <li><a href="#">Producto gimnasio dos</a></li>



                    <li><a href="#">Producto gimnasio tres</a></li>



                    <li><a href="#">Producto gimnasio cuatro</a></li>



                    <li><a href="#">Producto gimnasio cinco</a></li>



                </ul>



            </nav>



            -->



        </div>



		<div class="col2">



            <div class="itemreg">



            	<!-- <div class="pdtonew"></div> -->



                <?php

                    include_once 'admin/cls_MantixOaD.php';



                    $obj_imag = new MantixOaD();



                    $sql = "select imagen, estado_nuevo from ktz_productos where id = ".$_GET['id_producto']."";



                    $obj_imag->listaSP($sql, "", "");



                    while($obj_imag->no_vacio())

                    {

                        if($obj_imag->valor('estado_nuevo') == 1)

                            echo '<div class="pdtonew"></div>';



                        echo '<div class="pdtoimg"><img src="admin/recursos/images/212_212_'.$obj_imag->valor('imagen').'"></div>';

                    }

                ?>



            	<!-- <div class="pdtoimg"><img src="uploads/productos/001.jpg"></div> -->



            </div>



        </div>



		<div class="col3">



			<span>Nota:</span>



            <p>Envíe su pregunta aquí y nos comunicaremos tan pronto como sea posible!</p>



            <div class="clbg25">&nbsp;</div>



            <span class="tipo_span">Datos de Contacto:</span>



            <div id="formcontacto">



            <?

            /*

            error_reporting(0);

            if($_POST["email"]!="") {



                include_once 'admin/recursos/php/phpmailer.php';



                $a_email="contacto@ktzperu.com";



                $mail = new phpmailer();



                $mail->From = $_POST["email"];



                $mail->FromName = utf8_decode($_POST["nombre"]);

                $mail->Subject = utf8_decode("KTZ Perú: Contacto desde la web");

                $mail->AltBody = utf8_decode("Para ver el mensaje debe habilitar la opción HTML en su correo.");

                $mail->IsHTML(true);







                $mensaje = "<style type=\"text/css\">.titulo { font-family: 'OpenSans-Regular',Arial,sans-serif; font-size:13px; font-weight:bold; color:#B163A3 } \n .label { font-family: 'OpenSans-Regular',Arial,sans-serif; font-size:13px; color:#464648 } \n .datos { font-family: 'OpenSans-Regular',Arial,sans-serif; font-size:13px; color:#464648; background-color:#F4F3F0; }</style>";



                $mensaje .= "<table width=478 border=0 cellspacing=0 cellpadding=0>";



                $mensaje .= "<tr><td colspan=2 align=center class=\"titulo\" width=200>KTZ Perú: Contacto desde la web</td></tr><tr><td width=159></td><td width=319>&nbsp;</td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Nombre:</td><td class=\"datos\" align=left>".$_POST["nombre"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Empresa:</td><td class=\"datos\" align=left>".$_POST["empresa"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">E-mail:</td><td class=\"datos\" align=left>".$_POST["email"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Direcci&oacute;n:</td><td class=\"datos\" align=left>".$_POST["direccion"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Tel&eacute;fono:</td><td class=\"datos\" align=left>".$_POST["telefono"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Producto:</td><td class=\"datos\" align=left>".$_POST["producto"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">C&oacute;digo:</td><td class=\"datos\" align=left>".$_POST["codigo"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Color:</td><td class=\"datos\" align=left>".$_POST["color"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Cantidad:</td><td class=\"datos\" align=left>".$_POST["cantidad"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Taman&tilde;o:</td><td class=\"datos\" align=left>".$_POST["tamanio"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Consulta:</td><td class=\"datos\" align=left>".$_POST["consulta"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "</table>";



                $mail->Body = $mensaje;

                $mail->AddAddress($a_email, $a_email);



                if($mail->Send())

                {

                    //echo '>Error al enviar el correo. Por favor, int&eacute;ntelo nuevamente.';

                    echo 'Error al enviar el email';

                }

                else

                {

                    //echo '<p style="text-align:center; font-size:13px; color: white;">Su pedido se ha relizado correctamente,<br/>en breve recibir&aacute; un email con la confirmaci&oacute;n del pedido<br/>y las instrucciones para realizar el pago. Gracias.</p>';

                    echo

                    '

                        <div style="color: #EA3A42">



                            <legend>Gracias, tu informaci&oacute;n fue enviada con &eacute;xito.</legend>



                        </div>

                    ';

                }

            */

            ?>







                <!-- <script>setTimeout("window.location='producto.php'",5000);</script> -->



                <form id="contacto1" name="contacto1" action="enviar_consulta.php" method="post" onSubmit="return validar1()" style="margin:0">



                  <fieldset>



                        <p>



                            <label for="nombre">Producto:</label><br />



                            <input type="text" name="producto" id="producto" value="<?php echo $_GET['nombre_prod'];?>">



                        </p>



                        <p>



                            <label for="empresa">C&oacute;digo:</label><br />



                            <input type="text" name="codigo" value="<?php echo $_GET['codigo'];?>" id="codigo">



                        </p>



                        <p>



                            <label for="color">Color:</label><br />



                            <input type="text" name="color" value="<?php echo $_GET['color'];?>" id="color">



                        </p>



                        <p>



                            <label for="cantidad">Cantidad:</label><br />



                            <input type="text" name="cantidad" value="" id="cantidad">



                        </p>



                        <p>



                            <label for="tamanio">Tama&ntilde;o:</label><br />



                            <input type="text" name="tamanio" value="<?php echo $_GET['tamanio'];?>" id="tamanio">



                        </p>



                        <p>



                            <label for="nombre">Nombre:</label><br />



                            <input type="text" name="nombre" value="" id="nombre">



                        </p>



                        <p>



                            <label for="email">E-mail:</label><br />



                            <input type="text" name="email" value="" id="email" autocomplete="off">



                        </p>



                        <p>



                            <label for="direccion">Direcci&oacute;n:</label><br />



                            <input type="text" name="direccion" value="" id="direccion">



                        </p>



                        <p>



                            <label for="telefono">Tel&eacute;fono:</label><br />



                            <input type="text" name="telefono" value="" id="telefono">



                        </p>



                        <p>



                            <label for="consulta">Consulta:</label><br />



                            <textarea cols="30" rows="13" name="consulta" id="consulta"></textarea>



                        </p>



                    </fieldset>



                    <!--<p><input id="btn_enviar" type="button" value="Enviar Consulta Ahora!" class="btn"></p>-->



                    <div class="pdtobtn" style="margin-left: 20px;" >



                        <a id="btn_enviar" class="btn"><img src="resources/img/icono-ktz-shopping.png"> <span>Enviar Consultar Ahora!</span></a>



                    </div>



                </form>



                <p id="msj_enviar" style="margin-top: -5px;"></p>



            </div><!-- FIN formcontacto -->



            <!-- <form></form> -->



        </div>



    </div><!-- FIN fil1 -->



    </section>



</div>



<!-- FIN main -->







<div class="cl50">&nbsp;</div>







<!-- INICIO footer -->



<div id="footer">



	<!-- shell -->



	<div class="shell">



    	<div class="col1">



        	<h2>Información</h2>



			<nav id="mfooter">



                <ul>



                    <li><a href="index.php">Inicio</a></li>



                    <li><a href="conocenos.php">Conócenos </a></li>



                    <li><a href="producto.php">Productos</a></li>



                    <li><a href="galeria.php">Galería</a></li>



                    <li><a href="preguntas-frecuentes.php">Preguntas Frecuentes</a></li>



                    <li><a href="contacto.php">Contacto</a></li>



                </ul>



            </nav>



        </div>







        <div class="col1">



        	<h2>Contáctanos</h2>



			<nav class="mfooter-c">



				<ul>



                	<li><a class="icon-1" href="mailto:contacto@ktzperu.com">contacto@ktzperu.com</a></li>



                    <li><a class="icon-3" href="#">964&nbsp;393&nbsp;128</a></li>



                    <li><a class="icon-3" href="#">98&nbsp;(105*4478)</a></li>



				</ul>



			</nav>



        </div>







        <div class="col1">



        	<h2>Conecta con nosotros</h2>



			<nav class="mfooter-rs">



				<ul>



                	<?php

                    $obj_links = new MantixOaD();



                    $sql = "select * from ktz_links where id = 1";



                    $obj_links->listaSP($sql, "", "");



                    while($obj_links->no_vacio())

                    {

                        echo

                        '

                            <li><a class="icon-1" href="'.$obj_links->valor('facebook').'" target="_blank">Facebook</a></li>



                            <li><a class="icon-2" href="'.$obj_links->valor('twitter').'" target="_blank">Twitter</a></li>



                            <li><a class="icon-3" href="'.$obj_links->valor('youtube').'" target="_blank">Youtube</a></li>

                        ';



                    }



                    ?>



                    <!--



                    <li><a class="icon-1" href="#">Facebook</a></li>



                    <li><a class="icon-2" href="#">Twitter</a></li>



                    <li><a class="icon-3" href="#">Twitter</a></li>



                    -->



				</ul>



			</nav>



        </div>







        <div class="col1">



        	<h1 id="footerlogo"><a href="index.php">KTZ Perú</a></h1>



            <h3>Línea de Gimnasios<br>



				y Rascadores para Gatos</h3>



            <p>© 2014 KTZperu.com<br>



				Todos los derechos reservados.</p>



        </div>



	</div>



    <!-- end of shell -->



    <div class="cl50">&nbsp;</div>



</div>



<!-- FIN footer -->







<!-- Start slider NIVO-->



    <!--

    <script type="text/javascript" src="resources/js/js-slider/jquery-1.9.0.min.js"></script>



    <script type="text/javascript" src="resources/js/js-slider/jquery.nivo.slider.js"></script>



    <script type="text/javascript">



    $(window).load(function() {



        $('#slider').nivoSlider();



    });



    </script> -->



<!-- End slider NIVO-->



</body>



</html>