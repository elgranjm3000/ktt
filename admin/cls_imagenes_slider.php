<?php

include ("cls_MantixBase20.php");

class Imagenes_slider extends MantixBase
{
    var $id;
    var $nombre;

    function __construct()
    {
        $this->ini_datos("ktz_imagenes_slider","id");
        $this->pagina = "imagenes_slider.php";
        $this->urlparam = "Imagenes_slider";

        if($_POST['accion'] != 2)
        {
            $_POST['accion'] = 20;
            $_POST['idobj'] = $this->comprueba_id();
        }
    }

    function comprueba_id()
    {

        $c = new MantixOaD();

        $sql = "select id from ktz_imagenes_slider where tipo = 1";

        $c->listaSP($sql,"","");

        while($c->no_vacio())
        {
            $id_buscado = $c->valor("id");
        }

        if($id_buscado != 0)
        {
            return $id_buscado;
        }
        else
        {
            $c->ejecutar("insert into ktz_imagenes_slider(imagen_1, tipo ) values ('', 1)");

            $d = new MantixOaD();

            $sql = "select id from ktz_imagenes_slider where tipo = 1";
            $d->listaSP($sql,"","");
            while($d->no_vacio())
            {
                return $d->valor("id");
            }
        }
    }

    function formulario()
    {

        $m_Form = new MantixForm();

        $m_Form->atributos=array("texto_submit"=>"Im&aacute;genes de Slider", "texto_idiomas"=>"si");

        $m_Form->datos=$this->datos;

        $m_Form->controles=array(
            array("label"=>"Imagen 1:","campo"=>"imagen_1","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 1:","campo"=>"metas_1"),

            array("label"=>"Imagen 2:","campo"=>"imagen_2","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 2:","campo"=>"metas_2"),

            array("label"=>"Imagen 3:","campo"=>"imagen_3","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 3:","campo"=>"metas_3"),

            array("label"=>"Imagen 4:","campo"=>"imagen_4","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 4:","campo"=>"metas_4"),

            array("label"=>"Imagen 5:","campo"=>"imagen_5","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 5:","campo"=>"metas_5"),

            array("label"=>"Imagen 6:","campo"=>"imagen_6","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 6:","campo"=>"metas_6"),


            array("label"=>"Imagen 1:","campo"=>"imagen_1_en","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 1:","campo"=>"metas_1_en"),

            array("label"=>"Imagen 2:","campo"=>"imagen_2_en","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 2:","campo"=>"metas_2_en"),

            array("label"=>"Imagen 3:","campo"=>"imagen_3_en","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 3:","campo"=>"metas_3_en"),

            array("label"=>"Imagen 4:","campo"=>"imagen_4_en","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 4:","campo"=>"metas_4_en"),

            array("label"=>"Imagen 5:","campo"=>"imagen_5_en","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 5:","campo"=>"metas_5_en"),

            array("label"=>"Imagen 6:","campo"=>"imagen_6_en","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas Imagen 6:","campo"=>"metas_6_en"),
        );

        $res = $m_Form->ver();

        return  $res;

    }

    function lista() {

        $r = new MantixGrid();

        $r->atributos=array("tabla"=>"ktz_galeria_fotos", "nropag"=>"20", "ordenar"=>"id", "sql"=>"");
        $r->columnas=array(
            array("titulo"=>"Nombre de Imagen","campo"=>"nombre","ancho"=>"50%"),
            array("titulo"=>"Foto Principal","campo"=>"imagen","ancho"=>"50%"),
        );

        //return $r->ver();

    }
}