<?php

include ("cls_MantixBase20.php");

class Clientes extends MantixBase
{
    var $id;
    var $nombre;

    function __construct()
    {
        $this->ini_datos("ktz_clientes","id");
        $this->pagina = "clientes.php";
        $this->urlparam = "Clientes";
    }

    function formulario()
    {

        $m_Form = new MantixForm();

        $m_Form->atributos=array("texto_submit"=>"Cliente");

        $m_Form->datos=$this->datos;

        $m_Form->controles=array(
            array("label"=>"Nombre de Clientes:","campo"=>"nombre","obligatorio"=>"1"),
            array("label"=>"Imagen:","campo"=>"imagen","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
            array("label"=>"Url:","campo"=>"url"),
        );

        $res = $m_Form->ver();

        return  $res;

    }

    function lista() {

        $r = new MantixGrid();

        $r->atributos=array("tabla"=>"ktz_clientes", "nropag"=>"20", "ordenar"=>"id", "sql"=>"");
        $r->columnas=array(
            array("titulo"=>"Nombre de Imagen","campo"=>"nombre","ancho"=>"25%"),
            array("titulo"=>"Url Cliente","campo"=>"url","ancho"=>"25%"),
            array("titulo"=>"Foto Principal","campo"=>"imagen","ancho"=>"50%"),
        );

        return $r->ver();

    }
}