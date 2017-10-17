<?php

include ("cls_MantixBase20.php");

class Categorias_productos extends MantixBase
{
    var $id;
    var $nombre;

    function __construct()
    {
        $this->ini_datos("ktz_categorias_productos","id");
        $this->pagina = "categorias_productos.php";
        $this->urlparam = "Categorias_productos";
    }

    function tipo_categorias()
    {
        $cad='<option value=""> - Tipo Categor&iacute;as - </option>';
        $cad.='<option value="1"> Gimnasios</option>';
        $cad.='<option value="2"> Rascadores</option>';

        return $cad;
    }

    function formulario()
    {

        $m_Form = new MantixForm();

        $m_Form->atributos=array("texto_submit"=>"Categor&iacute;a de Productos");

        $m_Form->datos=$this->datos;

        $m_Form->controles=array(
            //array("label"=>"Tipo de Categor&iacute;a:","campo"=>"idtipo","obligatorio"=>"1","tipo"=>"select", "opciones"=>$this->tipo_categorias()),
            array("label"=>"Nombre en Espa&ntilde;ol:","campo"=>"nombre","obligatorio"=>"1"),
            array("label"=>"Nombre en Ingl&eacute;s:","campo"=>"nombre_eng","obligatorio"=>"1"),
        );

        $res = $m_Form->ver();

        return  $res;

    }

    function lista() {

        $r = new MantixGrid();

        $r->atributos=array("tabla"=>"", "nropag"=>"20", "ordenar"=>"id",
            "sql"=>"select id, nombre, nombre_eng, estado from ktz_categorias_productos");
        $r->columnas=array(
            array("titulo"=>"Nombre en Espa&ntilde;ol","campo"=>"nombre","ancho"=>"50%"),
            array("titulo"=>"Nombre en Ingl&eacute;s","campo"=>"nombre_eng","ancho"=>"50%"),
        );

        return $r->ver();

    }
}