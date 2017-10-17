<!DOCTYPE html>



<html lang="es-ES">



<head>



<meta charset="utf-8" />



<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />



<title>www.ktzperu.com - LINEA DE GIMNASIOS Y RASCADORES PARA GATOS - SOMOS FABRICANTES</title>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



<META content="MSHTML 6.00.2900.2180" name=GENERATOR>



<meta name="keywords" content="ktzperu">



<meta name="description" content="ktzperu">



<meta name="Title" content="ktzperu">



<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>



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







<!-- Inicio FORM-->



<script type="text/JavaScript" src="resources/js/validaciones.js"></script>



<script language="JavaScript">



function validar1()



{



 var f=document.contacto1;



   if(f.nombre.value=="")



 {



   alert ("Debes ingresar tu nombre y apellidos.");



   f.nombre.focus();



   return false;



 }







 if(f.email.value=="")



 {



		alert ("Debes ingresar el Correo Electrónico.");



		f.email.focus();



		return false;



 }



 if(f.email.value!="")



 {



   if (!isEmail( f.email.value) ) {



		alert ("El Correo Electrónico no está correctamente ingresado.");



		f.email.focus();



		return false;



   }



 }







 return true;



}



</script>



<link rel="stylesheet" type="text/css" href="./resources/css/formcontacto.css" />



<script type="text/javascript" src="./resources/jsform/jquery.min.js"></script>



	<script type="text/javascript" charset="utf-8">



		$(function(){ $("label").inFieldLabels(); });



	</script>



<!-- Fin FORM-->





<!--

<script src="resources/js/js-menuheader/jquery-1.8.0.min.js" type="text/javascript"></script>



<script src="resources/js/js-menuheader/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>



<script src="resources/js/js-menuheader/functions.js" type="text/javascript"></script>

-->





<!-- Inicio slider NIVO-->



    <link rel="stylesheet" href="resources/js/js-slider/themes/default/default.css" type="text/css" media="screen" />



    <link rel="stylesheet" href="resources/js/js-slider/nivo-slider.css" type="text/css" media="screen" />



    <link rel="stylesheet" href="resources/js/js-slider/style.css" type="text/css" media="screen" />



<!-- Fin slider NIVO -->







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



                          <li><a href="#" class="active">ESP</a></li>



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



                <li><a href="producto.php" target="_parent">Productos</a></li>



                <li><a href="galeria.php" target="_parent">Galer&iacute;a</a></li>



                <li><a href="preguntas-frecuentes.php?page=1" target="_parent">Preguntas Frecuentes</a></li>



                <li><a href="contacto.php" target="_parent" class="active">Contacto</a></li>



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



                        $sql = "select imagen_1, imagen_2, imagen_3, imagen_4, imagen_5, imagen_6, metas_1, metas_2, metas_3, metas_4, metas_5, metas_6 from ktz_imagenes_slider where estado = 1 and tipo = 1";



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



<div class="clbgm">&nbsp;</div>



<!-- FIN Slider -->











<!-- inicio main -->



<div class="shell">



	<section id="contecontacto">



    	<div class="titulo"><h1>CONTACTO</h1></div>



        <div class="fil1">



        	<p>Llámenos a los teléfonos que ponemos a su disposición, envíenos un e-mail a <a class="link01" href="mailto:contacto@ktzperu.com">contacto@ktzperu.com</a> o rellene este sencillo formulario con su consulta. </p>



            <div class="clbgm15">&nbsp;</div>



            <p><strong>Móvil:</strong> 964-393128</p>



            <p><strong>Nextel:</strong> 98(105*4478)</p>



            <div class="clbgm15">&nbsp;</div>



            <p class="color">Horario de Atención:</p>



            <p>Lunes a Viernes de 8:00 am a 7:00 pm </p>



			<p>Sábados de 9:00 a 1:00 pm </p>



        </div>



    <div class="fil1">



    	<div class="imagen"><img src="resources/img/img-02.jpg"></div>



    </div>



    </section>











    <aside id="sidebar">



		<section>



            <div class="titulocontacto"><h2>FORMULARIO</h2></div>



            <div id="formcontacto">



			<?



            error_reporting(0);

            if($_POST["email"]!="") {



                $a_email="contacto@ktzperu.com";



                $eol="\r\n";



                $now = mktime().".".md5(rand(1000,9999));



                $headers = "From:".$a_email.$eol."To:".$a_email.$eol;



                $headers .= 'Reply-To: '.$a_email.'<'.$a_email.'>'.$eol;



                $headers .= 'Return-Path: '.$a_email.'<'.$a_email.'>'.$eol;



                $headers .= "Message-ID: <".$now." TheSystem@".$_SERVER['SERVER_NAME'].">".$eol;



                $headers .= "X-Mailer: PHP v".phpversion().$eol;



                $headers .= "Content-Type: text/html; charset=iso-8859-1".$eol;



                $mensaje = "<style type=\"text/css\">.titulo { font-family: 'OpenSans-Regular',Arial,sans-serif; font-size:13px; font-weight:bold; color:#B163A3 } \n .label { font-family: 'OpenSans-Regular',Arial,sans-serif; font-size:13px; color:#464648 } \n .datos { font-family: 'OpenSans-Regular',Arial,sans-serif; font-size:13px; color:#464648; background-color:#F4F3F0; }</style>";



                $mensaje .= "<table width=478 border=0 cellspacing=0 cellpadding=0>";



                $mensaje .= "<tr><td colspan=2 align=center class=\"titulo\" width=200>KTZ Peru: Contacto desde la web</td></tr><tr><td width=159></td><td width=319>&nbsp;</td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Nombre:</td><td class=\"datos\" align=left>".$_POST["nombre"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Empresa:</td><td class=\"datos\" align=left>".$_POST["empresa"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">E-mail:</td><td class=\"datos\" align=left>".$_POST["email"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Tel&eacute;fono:</td><td class=\"datos\" align=left>".$_POST["telefono"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "<tr><td align=left class=\"label\">Consulta:</td><td class=\"datos\" align=left>".$_POST["consulta"]  . "</td></tr><tr><td height=20></td></tr>";



                $mensaje .= "</table>";



                $resultado=mail($a_email, "KTZ Per&uacute;: Contacto desde la web", $mensaje, $headers);



            ?>



                <div style="color: #B163A3">



                	<legend>Gracias, tu informaci&oacute;n fue enviada con &eacute;xito.</legend>



                </div>



                <script>setTimeout("window.location='contacto.php'",5000);</script>



                <?



    }



    else {



    ?>



                <form name="contacto1" action="contacto.php" method="post" onSubmit="return validar1()" style="margin:0">



                  <fieldset>



                        <p>



                            <label for="nombre">Nombre y Apellidos *:</label><br />



                            <input type="text" name="nombre" value="" id="nombre">



                        </p>



                        <p>



                            <label for="empresa">Empresa:</label><br />



                            <input type="text" name="empresa" value="" id="empresa">



                        </p>



                        <p>



                            <label for="email">Email *:</label><br />



                            <input type="text" name="email" value="" id="email">



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



                    <p><input type="submit" value="Enviar Consulta"></p>



                    <p>* Campos obligatorios.</p>



            <? } ?>



                </form>



            </div><!-- FIN formcontacto -->



		</section>



    </aside>







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



    <script type="text/javascript" src="resources/js/js-slider/jquery-1.9.0.min.js"></script>



    <script type="text/javascript" src="resources/js/js-slider/jquery.nivo.slider.js"></script>



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



<!-- Inicio Form -->



<script type="text/javascript" src="./resources/jsform/jquery.infieldlabel.min.js"></script>



<!-- Fin Form -->











</body>



</html>