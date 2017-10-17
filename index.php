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


<!--
<script src="resources/js/js-menuheader/jquery-1.8.0.min.js" type="text/javascript"></script>

<script src="resources/js/js-menuheader/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>

<script src="resources/js/js-menuheader/functions.js" type="text/javascript"></script>
-->




<!-- Start slider NIVO-->

    <link rel="stylesheet" href="resources/js/js-slider/themes/default/default.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="resources/js/js-slider/nivo-slider.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="resources/js/js-slider/style.css" type="text/css" media="screen" />

<!-- End slider NIVO -->



<!-- Start slider 3 col -->

<link rel="stylesheet" type="text/css" media="all" href="resources/js/js-slider-col/style.css">

<script type="text/javascript" src="resources/js/js-slider-col/jquery-1.7.2.min.js"></script>

<script type="text/javascript" src="resources/js/js-slider-col/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="resources/js/js-slider-col/jquery.elastislide.js"></script>

<!-- End slider 3 col -->

<!-- boostrap -->

<link rel="stylesheet" href="resources/bootstrap4/css/bootstrap.css" type="text/css" media="screen" />


</head>



<body onload="init();">

<div id="fb-root"></div>

<!--
<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>
-->


<!-- header -->

<div class="container" style="margin-top: 30px; margin-left: 0px; ,margin-right: 0px; width: 100%; padding-left: 0px; padding-right: 0px;">
    <div class="row">
        <div class="col-md-6">
            <a href="index.php"><canvas id="canvas" width="640" height="110" style="background-color:#ffffff"></canvas></a>
        </div>
        <div class="col-md-6">
                <div class="col-md-12">
                    <nav class="idioma-nav">

                        <ul>

                          <li><a href="#" class="active">ESP</a></li>

                          <li><a href="en/index.php">ENG</a></li>

                          <li><a href="admin/index.php" target="_blank"><img src="resources/img/icono-ktz-login-0.png"></a></li>

                        </ul>

                    </nav>
                    
                </div>
                <div class="col-md-12">
                    <nav style="margin-top: 30px;">

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
    </div>

    
<div class="col-md-12" style=" background: #1f4e6c; height: 49px;">
            <!-- inicio MENU -->

<div id="topmenur">

    <div class="shell">

        <nav id="navigation">

            <ul>

                <li><a href="index.php" target="_parent" class="active">Inicio</a></li>

                <li><a href="conocenos.php" target="_parent">Conócenos</a></li>

                <li><a href="producto.php" target="_parent">Productos</a></li>

                <li><a href="galeria.php" target="_parent">Galer&iacute;a</a></li>

                <li><a href="preguntas-frecuentes.php?page=1" target="_parent">Preguntas Frecuentes</a></li>

                <li><a href="contacto.php" target="_parent">Contacto</a></li>

            </ul>

        </nav>

    </div>

</div>

<!-- FIN MENU -->

    </div>




            
<!-- inicio Slider -->
<div class="col-md-12" style="padding-bottom: 0px; margin-bottom: 0px;">
<div id="topsliderf" style="margin-left: -15px; margin-right: -15px">

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
                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_1.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_1.'" alt="'.$metas_1.'" title="" class="img-circle" />';
                            if($imagen_2 != "")
                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_2.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_2.'" alt="'.$metas_2.'" title="" class="img-responsive"/>';
                            if($imagen_3 != "")
                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_3.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_3.'" alt="'.$metas_3.'" title="" class="img-responsive" />';
                            if($imagen_4 != "")
                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_4.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_4.'" alt="'.$metas_4.'" title="" />';
                            if($imagen_5 != "")
                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_5.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_5.'" alt="'.$metas_5.'" title="" class="img-responsive"/>';
                            if($imagen_6 != "")
                                echo '<img src="admin/recursos/images/sliders/996_420_'.$imagen_6.'" data-thumb="admin/recursos/images/sliders/996_420_'.$imagen_6.'" alt="'.$metas_6.'" title="" class="img-responsive"/>';
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
                    <a id="btn_left" class="nivo-prevNav" style="margin-top: -10%;">Prev</a>
                    <a id="btn_right" class="nivo-nextNav" style="margin-top: -10%;">Next</a>
                </div>

            </div>

        </div>

    </div>

</div>

<div class="clbgm">&nbsp;</div>
</div>
<!-- FIN Slider -->

    















<!-- inicio main -->

<div class="shell">

	<section id="contehome">

    <div class="fil1">

		<div class="col1"><h1>KTZ</h1></div>

        <div class="col2">

        <!-- Somos una empresa Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. -->

        <?php
            include_once 'admin/cls_MantixOaD.php';

            $obj_secciones = new MantixOaD();

            $sql = "select contenido from ktz_inicio where estado = 1";

            $obj_secciones->listaSP($sql, "", "");

            while($obj_secciones->no_vacio())
            {
                $contenido = $obj_secciones->valor('contenido');
            }
        ?>

        <?php
            echo $contenido;
        ?>

        </div>

    </div>

        <div id="videoktz">
            <iframe width="675" height="397" src="//www.youtube.com/embed/N4Q2ge3_nh0" frameborder="0" allowfullscreen></iframe>
        </div>

    <div class="fil2">

	<div class="carousel-wrap projects">

    	<div class="title-wrap"><h2>NUESTROS CLIENTES</h2></div>

        <div id="carousel-portfolio" class="es-carousel-wrapper">

                <div class="es-carousel">

                    <ul class="es-carousel_list">

                        <?php
                            include_once 'admin/cls_MantixOaD.php';

                            $contador = 0;

                            $obj_gal_client = new MantixOaD();

                            $sql = "select imagen, url from ktz_clientes where estado = 1";

                            $obj_gal_client->listaSP($sql, "", "");

                            while($obj_gal_client->no_vacio())
                            {
                                //$contenido = $obj_gal_client->valor('imagen');

                                echo
                                '
                                    <li class="es-carousel_li">
                                        <figure class="featured-thumbnail"><a href="'.$obj_gal_client->valor('url').'" title="" target="_blank"><img src="admin/recursos/images/134_134_'.$obj_gal_client->valor('imagen').'" alt="" title=""></a></figure>
                                    </li>
                                ';

                                $contador++;
                            }
                        ?>

                        <!--

                        <li class="es-carousel_li">

                            <figure class="featured-thumbnail"><a href="#" title=""><img src="resources/img/nuestros-clientes/nc-01.jpg" alt="" title=""></a></figure>

                        </li>

                        <li class="es-carousel_li">

                            <figure class="featured-thumbnail"><a href="#" title=""><img src="resources/img/nuestros-clientes/nc-02.jpg" alt="" title=""></a></figure>

                        </li>

                        <li class="es-carousel_li">

                            <figure class="featured-thumbnail"><a href="#" title=""><img src="resources/img/nuestros-clientes/nc-03.jpg" alt="" title=""></a></figure>

                        </li>

                        <li class="es-carousel_li">

                            <figure class="featured-thumbnail"><a href="#" title=""><img src="resources/img/nuestros-clientes/nc-04.jpg" alt="" title=""></a></figure>

                        </li>

                        <li class="es-carousel_li">

                            <figure class="featured-thumbnail"><a href="#" title=""><img src="resources/img/nuestros-clientes/nc-05.jpg" alt="" title=""></a></figure>

                        </li>

                        -->

                    </ul>

                </div>



                <div class="es-nav" style="">

                    <?php
                        if($contador > 4)
                        {
                    ?>

                    <span id="previousButton" class="es-nav-prev" style="">Previous</span>

                    <span id="nextButton" class="es-nav-next" style="">Next</span>

                    <?php
                        }
                    ?>

                </div>

        </div>

                    <script>

                    jQuery("#carousel-portfolio").elastislide({

                        imageW 		: 154,

                        minItems	: 3,

                        speed		: 600,

                        easing		: "easeOutQuart",

                        margin		: 16,

                        border		: 0,

                        onClick		: function() {}

                    });</script>

    </div>

    </div>

    </section>





    <aside id="sidebar">

		<section>

            <?php
                include_once 'admin/cls_MantixOaD.php';

                $obj_gadget = new MantixOaD();

                $sql = "select script from ktz_gadgets where id = 1";

                $obj_gadget->listaSP($sql, "", "");

                while($obj_gadget->no_vacio())
                {
                    echo $obj_gadget->valor("script");
                }

            ?>

            <!--
			<div class="fb-like-box" data-href="http://www.facebook.com/ktzperu" data-width="290" data-height="391" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
            -->

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

        	<h1 id="footerlogo"><a href="#">KTZ Perú</a></h1>

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

</body>

</html>