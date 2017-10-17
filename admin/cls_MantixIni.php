<?php
include("cls_MantixMenu.php");

$menu = new MantixMenu();

if($_SESSION["tipo"] == 1)
{
    $menu->opciones = array(
        array("titulo" => "Administradores", "url" => "usuarios.php?id=1"),
        //array("titulo" => "Secci&oacute;n Imagenes de Slider", "url" => "imagenes_slider.php?id=1"),
        array("titulo" => "Inicio", "url" => "imagenes_slider.php?id=1",
            "sub"=>array(
                array("titulo" => "Imagenes de Slider", "url" => "imagenes_slider.php?id=1"),
                array("titulo" => "Contenido", "url" => "inicio.php?id=1"),
                array("titulo" => "Clientes", "url" => "clientes.php?id=1"),
                ),
        ),
        //array("titulo" => "Secci&oacute;n  Con&oacute;cenos", "url" => "conocenos.php?id=1"),
        array("titulo" => "Con&oacute;cenos", "url" => "imagenes_slider_1.php?id=1",
            "sub"=>array(
                array("titulo" => "Imagenes de Slider", "url" => "imagenes_slider_1.php?id=1"),
                array("titulo" => "Contenido", "url" => "conocenos.php?id=1"),
                ),
        ),
        array("titulo" => "Productos", "url" => "imagenes_slider_3.php?id=1",
            "sub"=>array(
                array("titulo" => "Imagenes de Slider", "url" => "imagenes_slider_3.php?id=1"),
                array("titulo" => "Categor&iacute;as de Productos", "url" => "categorias_productos.php?id=1"),
                array("titulo" => "Productos", "url" => "productos.php?id=1"),
                array("titulo" => "Galer&iacute;a de Productos", "url" => "imagenes_producto.php?id=1"),
                ),
        ),
        //array("titulo" => "Secci&oacute;n  Galer&iacute;a de Fotos", "url" => "galeria.php?id=1"),
        array("titulo" => "Galer&iacute;a de Fotos", "url" => "imagenes_slider_2.php?id=1",
            "sub"=>array(
                array("titulo" => "Imagenes de Slider", "url" => "imagenes_slider_2.php?id=1"),
                array("titulo" => "Galer&iacute;a", "url" => "galeria.php?id=1"),
                ),
        ),

        //array("titulo" => "Secci&oacute;n  Preguntas Frecuentes", "url" => "preguntas_frecuentes.php?id=1"),
        array("titulo" => "Preguntas Frecuentes", "url" => "imagenes_slider_4.php?id=1",
            "sub"=>array(
                array("titulo" => "Imagenes de Slider", "url" => "imagenes_slider_4.php?id=1"),
                array("titulo" => "Preguntas Frecuentes", "url" => "preguntas_frecuentes.php?id=1"),
                ),
        ),

        //array("titulo" => "Secci&oacute;n  Detalles Web", "url" => "links.php?id=1"),
        array("titulo" => "Detalles Web", "url" => "links.php?id=1",
            "sub"=>array(
                array("titulo" => "Enlaces Externos", "url" => "links.php?id=1"),
                array("titulo" => "Gadgets", "url" => "gadgets.php?id=1"),
                array("titulo" => "Varios", "url" => "varios.php?id=1"),
                ),
        ),

        //array("titulo" => "Publicidad", "url" => "publicidad.php?id=1"),

        //array("titulo" => "Manual de Ayuda", "url" => "recursos/pdf/manual-de-ayuda-pdf.pdf"),
    );
}


if($_SESSION["tipo"] == 2)
{
    $menu->opciones = array(
        array("titulo" => "Secciones", "url" => "secciones.php?id=1"),

        array("titulo" => "Noticias", "url" => "noticias.php?id=1",
            "sub"=>array(
                array("titulo" => "Noticias", "url" => "noticias.php?id=1"),
                array("titulo" => "Noticias Relacionadas", "url" => "noticias_relacionadas.php?id=1"),
                array("titulo" => "Comentarios P&uacute;blicos", "url" => "comentarios_publicos.php?id=1"),
                //array("titulo" => "Fotos", "url" => "fotos.php?id=1"),
                //array("titulo" => "Videos", "url" => "videos.php?id=1"),
                ),
        ),


        array("titulo" => "Galer&iacute;a de Fotos y Videos", "url" => "album_fotos.php?id=1",
            "sub"=>array(
                array("titulo" => "Galer&iacute;a de Fotos", "url" => "album_fotos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_fotos.php?id=1"),
                    array("titulo" => "Listado de Fotos", "url" => "fotos_album.php?id=1"),
                    ),
                ),
                array("titulo" => "Galer&iacute;a de Videos", "url" => "album_videos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_videos.php?id=1"),
                    array("titulo" => "Listado de Videos", "url" => "videos_album.php?id=1"),
                    ),
                ),
            ),
        ),

        array("titulo" => "Gadgets", "url" => "gadgets.php?id=1"),

        //array("titulo" => "Publicidad", "url" => "publicidad.php?id=1"),

        //array("titulo" => "Manual de Ayuda", "url" => "recursos/pdf/manual-de-ayuda-pdf.pdf"),
    );
}


if($_SESSION["tipo"] == 3)
{
    $menu->opciones = array(

        array("titulo" => "Noticias", "url" => "noticias.php?id=1",
            "sub"=>array(
                array("titulo" => "Noticias", "url" => "noticias.php?id=1"),
                array("titulo" => "Noticias Relacionadas", "url" => "noticias_relacionadas.php?id=1"),
                array("titulo" => "Comentarios P&uacute;blicos", "url" => "comentarios_publicos.php?id=1"),
                //array("titulo" => "Fotos", "url" => "fotos.php?id=1"),
                //array("titulo" => "Videos", "url" => "videos.php?id=1"),
                ),
        ),


        array("titulo" => "Galer&iacute;a de Fotos y Videos", "url" => "album_fotos.php?id=1",
            "sub"=>array(
                array("titulo" => "Galer&iacute;a de Fotos", "url" => "album_fotos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_fotos.php?id=1"),
                    array("titulo" => "Listado de Fotos", "url" => "fotos_album.php?id=1"),
                    ),
                ),
                array("titulo" => "Galer&iacute;a de Videos", "url" => "album_videos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_videos.php?id=1"),
                    array("titulo" => "Listado de Videos", "url" => "videos_album.php?id=1"),
                    ),
                ),
            ),
        ),

        array("titulo" => "Gadgets", "url" => "gadgets.php?id=1"),

        //array("titulo" => "Publicidad", "url" => "publicidad.php?id=1"),

        //array("titulo" => "Manual de Ayuda", "url" => "recursos/pdf/manual-de-ayuda-pdf.pdf"),
    );
}

if($_SESSION["tipo"] == 4)
{
    $menu->opciones = array(

        array("titulo" => "Noticias", "url" => "noticias.php?id=1",
            "sub"=>array(
                array("titulo" => "Noticias", "url" => "noticias.php?id=1"),
                array("titulo" => "Noticias Relacionadas", "url" => "noticias_relacionadas.php?id=1"),
                array("titulo" => "Comentarios P&uacute;blicos", "url" => "comentarios_publicos.php?id=1"),
                //array("titulo" => "Fotos", "url" => "fotos.php?id=1"),
                //array("titulo" => "Videos", "url" => "videos.php?id=1"),
                ),
        ),


        array("titulo" => "Galer&iacute;a de Fotos y Videos", "url" => "album_fotos.php?id=1",
            "sub"=>array(
                array("titulo" => "Galer&iacute;a de Fotos", "url" => "album_fotos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_fotos.php?id=1"),
                    array("titulo" => "Listado de Fotos", "url" => "fotos_album.php?id=1"),
                    ),
                ),
                array("titulo" => "Galer&iacute;a de Videos", "url" => "album_videos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_videos.php?id=1"),
                    array("titulo" => "Listado de Videos", "url" => "videos_album.php?id=1"),
                    ),
                ),
            ),
        ),

        array("titulo" => "Gadgets", "url" => "gadgets.php?id=1"),

        //array("titulo" => "Publicidad", "url" => "publicidad.php?id=1"),

        //array("titulo" => "Manual de Ayuda", "url" => "recursos/pdf/manual-de-ayuda-pdf.pdf"),
    );
}

if($_SESSION["tipo"] == 5)
{
    $menu->opciones = array(

        array("titulo" => "Noticias", "url" => "noticias.php?id=1",
            "sub"=>array(
                array("titulo" => "Noticias", "url" => "noticias.php?id=1"),
                array("titulo" => "Noticias Relacionadas", "url" => "noticias_relacionadas.php?id=1"),
                array("titulo" => "Comentarios P&uacute;blicos", "url" => "comentarios_publicos.php?id=1"),
                //array("titulo" => "Fotos", "url" => "fotos.php?id=1"),
                //array("titulo" => "Videos", "url" => "videos.php?id=1"),
                ),
        ),


        array("titulo" => "Galer&iacute;a de Fotos y Videos", "url" => "album_fotos.php?id=1",
            "sub"=>array(
                array("titulo" => "Galer&iacute;a de Fotos", "url" => "album_fotos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_fotos.php?id=1"),
                    array("titulo" => "Listado de Fotos", "url" => "fotos_album.php?id=1"),
                    ),
                ),
                array("titulo" => "Galer&iacute;a de Videos", "url" => "album_videos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_videos.php?id=1"),
                    array("titulo" => "Listado de Videos", "url" => "videos_album.php?id=1"),
                    ),
                ),
            ),
        ),

        array("titulo" => "Gadgets", "url" => "gadgets.php?id=1"),

        //array("titulo" => "Publicidad", "url" => "publicidad.php?id=1"),

        //array("titulo" => "Manual de Ayuda", "url" => "recursos/pdf/manual-de-ayuda-pdf.pdf"),
    );
}

if($_SESSION["tipo"] == 6)
{
    $menu->opciones = array(

        array("titulo" => "Noticias", "url" => "noticias.php?id=1",
            "sub"=>array(
                array("titulo" => "Noticias", "url" => "noticias.php?id=1"),
                array("titulo" => "Noticias Relacionadas", "url" => "noticias_relacionadas.php?id=1"),
                array("titulo" => "Comentarios P&uacute;blicos", "url" => "comentarios_publicos.php?id=1"),
                //array("titulo" => "Fotos", "url" => "fotos.php?id=1"),
                //array("titulo" => "Videos", "url" => "videos.php?id=1"),
                ),
        ),


        array("titulo" => "Galer&iacute;a de Fotos y Videos", "url" => "album_fotos.php?id=1",
            "sub"=>array(
                array("titulo" => "Galer&iacute;a de Fotos", "url" => "album_fotos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_fotos.php?id=1"),
                    array("titulo" => "Listado de Fotos", "url" => "fotos_album.php?id=1"),
                    ),
                ),
                array("titulo" => "Galer&iacute;a de Videos", "url" => "album_videos.php?id=1",
                "sub"=>array(
                    array("titulo" => "Detalle de &Aacute;lbum", "url" => "album_videos.php?id=1"),
                    array("titulo" => "Listado de Videos", "url" => "videos_album.php?id=1"),
                    ),
                ),
            ),
        ),

        array("titulo" => "Gadgets", "url" => "gadgets.php?id=1"),

        //array("titulo" => "Publicidad", "url" => "publicidad.php?id=1"),

        //array("titulo" => "Manual de Ayuda", "url" => "recursos/pdf/manual-de-ayuda-pdf.pdf"),
    );
}

/*
if($_SESSION["tipo"] == 4)
{
    $menu->opciones = array(
    array("titulo" => "Noticias y Eventos", "url" => "evento.php?id=1",
                "sub"=>array(
                    array("titulo" => "Eventos", "url" => "evento.php?id=1"),
                    array("titulo" => "Noticias", "url" => "noticia.php?id=1"),
                ),
        ),
    array("titulo" => "Manual de Ayuda", "url" => "recursos/pdf/manual-de-ayuda-pdf.pdf"),
    );

}*/




$img_top = "bg-top.jpg";
//$img_top = "";

$usuario = "";

?>