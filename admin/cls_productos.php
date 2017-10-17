<?php

include ("cls_MantixBase20.php");

class Productos extends MantixBase
{
    var $id;
    var $nombre;

    function __construct()
    {
        $this->ini_datos("ktz_productos","id");
        $this->pagina = "productos.php";
        $this->urlparam = "Productos";
    }

    function get_categorias()
    {
        $c = new MantixOaD();
        $c->listaSP("select * from ktz_categorias_productos where estado = 1 order by nombre","","");
        $cad='<option value=""> - Seleccione Categor&iacute;as - </option>';
        while($c->no_vacio())
        {
            $cad.='<option value="'.$c->valor("id").'">'.$c->valor("nombre")."</option>";
        }
        return $cad;
    }

    function opciones()
    {
        $cad='<option value=""> - Estado Nuevo - </option>';
        $cad.='<option value="1">Si</option>';
        $cad.='<option value="0">No</option>';
        return $cad;
    }

    function formulario()
    {

        $m_Form = new MantixForm();

        $m_Form->atributos=array("texto_submit"=>"Producto", "texto_idiomas"=>"si");

        $m_Form->datos=$this->datos;

        $m_Form->controles=array(
            array("label"=>"Tipo de Categor&iacute;a:","campo"=>"idcategoria","obligatorio"=>"1","tipo"=>"select", "opciones"=>$this->get_categorias()),
            array("label"=>"Nombre en Espa&ntilde;ol:","campo"=>"nombre","obligatorio"=>"1"),
            array("label"=>"Nombre en Ingl&eacute;s:","campo"=>"nombre_eng","obligatorio"=>"1"),
            array("label"=>"Imagen:","campo"=>"imagen","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),

            array("label"=>"C&oacute;digo:","campo"=>"codigo"),
            array("label"=>"Tama&ntilde;o:","campo"=>"product_size"),
            /*array("label"=>"Ctn Size:","campo"=>"ctn_size"),
            array("label"=>"Packing Rate:","campo"=>"packing_rate"),*/
            array("label"=>"Color:","campo"=>"color"),
            array("label"=>"Descripci&oacute;n:","campo"=>"descripcion","tipo"=>"fck"),
            array("label"=>"Descripci&oacute;n:","campo"=>"descripcion_eng","tipo"=>"fck"),
            /*array("label"=>"Material:","campo"=>"material"),
            array("label"=>"Packing:","campo"=>"packing"),
            array("label"=>"Moq:","campo"=>"moq"),
            array("label"=>"Lead Time:","campo"=>"lead_time"),
            array("label"=>"Speciality:","campo"=>"speciality"),
            array("label"=>"Customized Styles:","campo"=>"customized_styles"),*/
            array("label"=>"Producto Nuevo:","campo"=>"estado_nuevo","tipo"=>"select", "opciones"=>$this->opciones()),

        );

        $res = $m_Form->ver();

        return  $res;

    }

    function lista() {

        $r = new MantixGrid();

        $r->atributos=array("tabla"=>"", "nropag"=>"20", "ordenar"=>"id",
            "sql"=>"select ktz_productos.id, ktz_productos.nombre, ktz_productos.nombre_eng, ktz_productos.estado, ktz_productos.codigo, ktz_categorias_productos.nombre as nomb_cat, ktz_productos.imagen from ktz_categorias_productos, ktz_productos where ktz_productos.idcategoria = ktz_categorias_productos.id");
        $r->columnas=array(
            array("titulo"=>"Categor&iacute;a","campo"=>"nomb_cat","ancho"=>"15%"),
			array("titulo"=>"C&oacute;digo","campo"=>"codigo","ancho"=>"10%"),
            array("titulo"=>"Nombre en Espa&ntilde;ol","campo"=>"nombre","ancho"=>"25%"),
            array("titulo"=>"Nombre en Ingl&eacute;s","campo"=>"nombre_eng","ancho"=>"25%"),
            array("titulo"=>"Imagen","campo"=>"imagen","ancho"=>"15%"),
        );

        return $r->ver();

    }
}