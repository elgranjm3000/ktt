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

<script src="../resources/js/anim/logotipo-eng.js"></script>

<script src="../resources/js/anim/animlogotipo-eng.js"></script>

<!-- End Canvas -->



<!--[if lt IE 9]>



	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>



<![endif]-->







<script src="../resources/js/run2.js" type="text/javascript"></script>



<link rel="stylesheet" type="text/css" href="../resources/tipografias/stylesheet.css">



<link rel="stylesheet" href="../resources/css/nav.css" type="text/css" media="all"/>





<!--

<script src="../resources/js/js-menuheader/jquery-1.8.0.min.js" type="text/javascript"></script>



<script src="../resources/js/js-menuheader/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>



<script src="../resources/js/js-menuheader/functions.js" type="text/javascript"></script>



-->







<!-- Start slider NIVO-->



    <link rel="stylesheet" href="../resources/js/js-slider/themes/default/default.css" type="text/css" media="screen" />



    <link rel="stylesheet" href="../resources/js/js-slider/nivo-slider.css" type="text/css" media="screen" />



    <link rel="stylesheet" href="../resources/js/js-slider/style.css" type="text/css" media="screen" />



<!-- End slider NIVO -->





<!-- Start slider 3 col -->



<link rel="stylesheet" type="text/css" media="all" href="../resources/js/js-slider-col/style2.css">



<script type="text/javascript" src="../resources/js/js-slider-col/jquery-1.7.2.min.js"></script>



<script type="text/javascript" src="../resources/js/js-slider-col/jquery.easing.1.3.js"></script>



<script type="text/javascript" src="../resources/js/js-slider-col/jquery.elastislide.js"></script>



<!-- End slider 3 col -->







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



                          <li><a href="../index.php">ESP</a></li>



                          <li><a href="index.php" class="active">ENG</a></li>



                          <li><a href="../admin/index.php" target="_blank"><img src="../resources/img/icono-ktz-login-0.png"></a></li>



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

                                include_once '../admin/cls_MantixOaD.php';



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



            	<li><a href="index.php" target="_parent">Home</a></li>



                <li><a href="conocenos.php" target="_parent">About Us</a></li>



                <li><a href="producto.php" target="_parent" class="active">Products</a></li>



                <li><a href="galeria.php" target="_parent">Gallery</a></li>



                <li><a href="preguntas-frecuentes.php?page=1" target="_parent">FAQ</a></li>



                <li><a href="contacto.php" target="_parent">Contact</a></li>



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

                        include_once '../admin/cls_MantixOaD.php';



                        $obj_secciones = new MantixOaD();



                        $sql = "select imagen_1_en, imagen_2_en, imagen_3_en, imagen_4_en, imagen_5_en, imagen_6_en, metas_1_en, metas_2_en, metas_3_en, metas_4_en, metas_5_en, metas_6_en from ktz_imagenes_slider where estado = 1 and tipo = 3";



                        $obj_secciones->listaSP($sql, "", "");



                        while($obj_secciones->no_vacio())

                        {

                            $imagen_1 = $obj_secciones->valor('imagen_1_en');

                            $imagen_2 = $obj_secciones->valor('imagen_2_en');

                            $imagen_3 = $obj_secciones->valor('imagen_3_en');

                            $imagen_4 = $obj_secciones->valor('imagen_4_en');

                            $imagen_5 = $obj_secciones->valor('imagen_5_en');

                            $imagen_6 = $obj_secciones->valor('imagen_6_en');

                            $metas_1 = $obj_secciones->valor('metas_1_en');

                            $metas_2 = $obj_secciones->valor('metas_2_en');

                            $metas_3 = $obj_secciones->valor('metas_3_en');

                            $metas_4 = $obj_secciones->valor('metas_4_en');

                            $metas_5 = $obj_secciones->valor('metas_5_en');

                            $metas_6 = $obj_secciones->valor('metas_6_en');



                            if($imagen_1 != "")

                                echo '<img src="../admin/recursos/images/sliders/996_420_'.$imagen_1.'" data-thumb="../admin/recursos/images/sliders/996_420_'.$imagen_1.'" alt="'.$metas_1.'" title="" />';

                            if($imagen_2 != "")

                                echo '<img src="../admin/recursos/images/sliders/996_420_'.$imagen_2.'" data-thumb="../admin/recursos/images/sliders/996_420_'.$imagen_2.'" alt="'.$metas_2.'" title="" />';

                            if($imagen_3 != "")

                                echo '<img src="../admin/recursos/images/sliders/996_420_'.$imagen_3.'" data-thumb="../admin/recursos/images/sliders/996_420_'.$imagen_3.'" alt="'.$metas_3.'" title="" />';

                            if($imagen_4 != "")

                                echo '<img src="../admin/recursos/images/sliders/996_420_'.$imagen_4.'" data-thumb="../admin/recursos/images/sliders/996_420_'.$imagen_4.'" alt="'.$metas_4.'" title="" />';

                            if($imagen_5 != "")

                                echo '<img src="../admin/recursos/images/sliders/996_420_'.$imagen_5.'" data-thumb="../admin/recursos/images/sliders/996_420_'.$imagen_5.'" alt="'.$metas_5.'" title="" />';

                            if($imagen_6 != "")

                                echo '<img src="../admin/recursos/images/sliders/996_420_'.$imagen_6.'" data-thumb="../admin/recursos/images/sliders/996_420_'.$imagen_6.'" alt="'.$metas_6.'" title="" />';

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



	<section id="detallepdtos">



    <div class="fil1">



    	<div class="titulo"><h1>PRODUCTS</h1></div>



    </div>



    <div class="fil1">



		<div class="col1">



            <?php



                $obj_cat = new MantixOaD();



                // listamos todas la categorias del tipo 1

                $sql = "select id, nombre_eng as nombre from ktz_categorias_productos where estado = 1 order by nombre";



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



                                echo '<li><a '.$texto_class.' href="producto-detalle.php?id_producto='.$obj_prod_list->valor('id').'&id_cat_prod='.$obj_prod_list->valor('idcategoria').'&idtipo=0">'.$obj_prod_list->valor('nombre_eng').'</a></li>';

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



            <div id="detalle-pdto-list">



                <div class="itemreg">



                    <!--

                        <div class="pdtonew"></div>

                        <div class="pdtoimg"><img src="uploads/productos/001.jpg" width="340" height="340"></div>

                    -->



                    <?php



                    $obj_imag = new MantixOaD();



                    $sql = "select imagen, estado_nuevo from ktz_productos where id = ".$_GET['id_producto']."";



                    $obj_imag->listaSP($sql, "", "");



                    $imagen_agregar = "";



                    while($obj_imag->no_vacio())

                    {



                        if($obj_imag->valor('estado_nuevo') == 1)

                            echo '<div class="pdtonew_en"></div>';



                        echo '<div class="pdtoimg"><img src="../admin/recursos/images/360_360_'.$obj_imag->valor('imagen').'" width="360" height="360"></div>';



                        $imagen_agregar = $obj_imag->valor('imagen');

                    }

                ?>



                </div>

            </div>





            <div id="carousel-portfolio" class="es-carousel-wrapper">



                <div class="es-carousel">



                    <ul id="carousel_img" class="es-carousel_list">



                        <?php

                            include_once '../admin/cls_MantixOaD.php';



                            $obj_gal_client = new MantixOaD();



                            $sql = "select id, imagen from ktz_galeria_productos where idproducto = ".$_GET['id_producto']." and estado = 1";



                            $obj_gal_client->listaSP($sql, "", "");



                            $contador = 1;



                            while($obj_gal_client->no_vacio())

                            {

                                if($contador == 1)

                                {

                                    echo

                                    '

                                        <li class="es-carousel_li" id="'.$contador.'">

                                            <figure class="featured-thumbnail" id="preview_image" data-preview="../admin/recursos/images/212_212_'.$imagen_agregar.'"><img src="../admin/recursos/images/134_134_'.$imagen_agregar.'" alt="" title=""></figure>

                                            <!-- <figure class="featured-thumbnail" id="preview_image" data-preview="admin/recursos/images/212_212_'.$imagen_agregar.'"><a href="" title=""><img src="admin/recursos/images/134_134_'.$obj_gal_client->valor('imagen').'" alt="" title=""></a></figure> -->

                                        </li>

                                    ';

                                    $contador++;

                                }



                                echo

                                '

                                    <li class="es-carousel_li" id="'.$obj_gal_client->valor('id').'">

                                        <figure class="featured-thumbnail" id="preview_image" data-preview="../admin/recursos/images/212_212_'.$obj_gal_client->valor('imagen').'"><img src="../admin/recursos/images/134_134_'.$obj_gal_client->valor('imagen').'" alt="" title=""></figure>

                                        <!-- <figure class="featured-thumbnail" id="preview_image" data-preview="admin/recursos/images/212_212_'.$obj_gal_client->valor('imagen').'"><a href="" title=""><img src="admin/recursos/images/134_134_'.$obj_gal_client->valor('imagen').'" alt="" title=""></a></figure> -->

                                    </li>

                                ';

                            }

                        ?>



                    </ul>



                </div>







                <div class="es-nav">



                    <span class="es-nav-prev" style="display: none; ">Previous</span>



                    <span class="es-nav-next" style="display: none;">Next</span>



                </div>



            </div>



            <script>

                $("#carousel_img li").css("cursor", "pointer");



                jQuery("#carousel-portfolio").elastislide({

                    imageW      : 115,



                    minItems    : 4,



                    speed       : 600,



                    easing      : "easeOutQuart",



                    margin      : 11,



                    border      : 0,

                });



                $(function()

                {

                    $("#carousel_img li").click(function()

                    {

                        var id_click = $(this).attr("id");

                        var img = $("#"+id_click+" figure").attr("data-preview");

                        $(".pdtoimg img").attr("src", img);

                    });

                })

            </script>



        </div>



		<div class="col3">



            <div id="detalle-pdto-info">

             <?php



                    $obj_imag = new MantixOaD();



                    $sql = "select ktz_productos.codigo, ktz_productos.descripcion_eng as descripcion, ktz_productos.product_size, ktz_productos.ctn_size, ktz_productos.packing_rate, ktz_productos.color, ktz_productos.material, ktz_productos.packing, ktz_productos.moq, ktz_productos.lead_time, ktz_productos.speciality, ktz_productos.customized_styles, ktz_productos.nombre_eng as nombre from ktz_productos, ktz_categorias_productos where ktz_productos.idcategoria = ktz_categorias_productos.id and ktz_productos.id = ".$_GET['id_producto']."";



                    $obj_imag->listaSP($sql, "", "");



                    $i = 1;



                    while($obj_imag->no_vacio())

                    {

                        echo '<h2>'.$obj_imag->valor('nombre').'</h2>';

                        echo '<nav id="detalle-pdto-list-1">

                                <ul><li>';

                        echo $obj_imag->valor('codigo');

                        echo '</li></ul></nav>';



                        echo

                        '

                            <nav id="detalle-pdto-list-1">

                            <ul style="margin-left: 18px;">

                        ';



                        /*echo '<li>'.$i.'. '.$obj_imag->valor('product_size').'</li>';

                        $i++;

                        echo '<li>'.$i.'. '.$obj_imag->valor('ctn_size').'</li>';

                        $i++;

                        echo '<li>'.$i.'. '.$obj_imag->valor('packing_rate').'</li>';

                        $i++;

                        echo '<li>'.$i.'. '.$obj_imag->valor('color').'</li>';

                        $i++;

                        echo '<li>'.$i.'. '.$obj_imag->valor('material').'</li>';

                        $i++;

                        echo '<li>'.$i.'. '.$obj_imag->valor('packing').'</li>';

                        $i++;

                        echo '<li>'.$i.'. '.$obj_imag->valor('moq').'</li>';

                        $i++;

                        echo '<li>'.$i.'. '.$obj_imag->valor('lead_time').'</li>';

                        $i++;

                        echo '<li>'.$i.'. '.$obj_imag->valor('speciality').'</li>';

                        $i++;

                        echo '<li>'.$i.'. '.$obj_imag->valor('customized_styles').'</li>';*/



                        echo $obj_imag->valor('descripcion');



                        echo '</ul></nav>';



                        $nombre = $obj_imag->valor('nombre');

                        $codig = $obj_imag->valor('codigo');

                        $color = $obj_imag->valor('color');

                        $size = $obj_imag->valor('product_size');

                    }

            ?>



            <!--

            <nav id="detalle-pdto-list-1">

                <ul>

                    <li>1. Product Size: 45*45*215cm</li>

                    <li>2. Ctn Size: 48*48*33cm</li>

                    <li>3. Packing Rate: 1pcs</li>

                    <li>4. Color: as picture</li>

                    <li>5. Material: flakeboard, sisal</li>

                    <li>6. Packing : carton</li>

                    <li>7. MOQ : 50 Pcs</li>

                    <li>8. Lead Time : 30 days</li>

                    <li>9. Specialty : comfortable,durable,eco-friendly</li>

                    <li>10. Customized styles, sizes and colors are available</li>

                </ul>

            </nav>



            -->



            <nav id="detalle-pdto-list-2">

                <ul>

                    <li>Size:</li>

                    <!-- <li>45*35*215CM</li> -->

                    <li><?php echo $size;?></li>



                </ul>



                <ul>

                    <li>Color:</li>

                    <!-- <li>DarkBrown</li> -->

                    <li><?php echo $color;?></li>

                </ul>

            </nav>



            <div class="pdtobtn" >



                            <a href="producto-enviar.php?id_producto=<?php echo $_GET['id_producto']?>&nombre_prod=<?php echo $nombre;?>&id_cat_prod=<?php echo $_GET['id_cat_prod']?>&idtipo=<?php echo $_GET['idtipo']?>&codigo=<?php echo $codig;?>&tamanio=<?php echo $size;?>&color=<?php echo $color;?>" class="btn"><img src="../resources/img/icono-ktz-shopping.png"> <span>Check Now!</span></a>



                        </div>

            </div>



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



            <h2>Information</h2>



            <nav id="mfooter">



                <ul>



                    <li><a href="index.php">Home</a></li>



                    <li><a href="conocenos.php">About Us</a></li>



                    <li><a href="producto.php">Products</a></li>



                    <li><a href="galeria.php">Gallery</a></li>



                    <li><a href="preguntas-frecuentes.php">FAQ</a></li>



                    <li><a href="contacto.php">Contact</a></li>



                </ul>



            </nav>



        </div>







        <div class="col1">



            <h2>Contact Us</h2>



            <nav class="mfooter-c">



                <ul>



                    <li><a class="icon-1" href="mailto:contacto@ktzperu.com">contacto@ktzperu.com</a></li>



                    <li><a class="icon-3" href="#">964&nbsp;393&nbsp;128</a></li>



                    <li><a class="icon-3" href="#">98&nbsp;(105*4478)</a></li>



                </ul>



            </nav>



        </div>







        <div class="col1">



            <h2>Connect with us</h2>



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



            <h3>Line of Gyms<br>



                and Scrapers for Cats</h3>



            <p>© 2014 KTZperu.com<br>



                Todos los derechos reservados.</p>



        </div>



    </div>



    <!-- end of shell -->



    <div class="cl50">&nbsp;</div>



</div>



<!-- FIN footer -->







<!-- Start slider NIVO-->



    <script type="text/javascript" src="../resources/js/js-slider/jquery-1.9.0.min.js"></script>



    <script type="text/javascript" src="../resources/js/js-slider/jquery.nivo.slider.js"></script>



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