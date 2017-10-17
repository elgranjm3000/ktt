<?php

include ("cls_MantixBase20.php");

class Galeria_fotos extends MantixBase
{
    var $id;
    var $nombre;

    function __construct()
    {
        $this->ini_datos("ktz_galeria_fotos","id");
        $this->pagina = "galeria.php";
        $this->urlparam = "Galeria_fotos";
    }

    function formulario()
    {

        $m_Form = new MantixForm();

        $m_Form->atributos=array("texto_submit"=>"Galeria de Fotos");

        $m_Form->datos=$this->datos;

        $m_Form->controles=array(
            array("label"=>"Nombre de Foto:","campo"=>"nombre","obligatorio"=>"1"),
            array("label"=>"Imagen:","campo"=>"imagen","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Metas:","campo"=>"metas"),
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

        return $r->ver();

    }
}