<?php

include ("cls_MantixBase20.php");

class Imagenes_Producto extends MantixBase
{
    var $id;
    var $nombre;

    function __construct()
    {
        $this->ini_datos("ktz_galeria_productos","id");
        $this->pagina = "imagenes_producto.php";
        $this->urlparam = "Imagenes_Producto";
    }

    function get_productos()
    {
        $c = new MantixOaD();
        $c->listaSP("select * from ktz_productos where estado = 1 order by id","","");
        $cad='<option value=""> - Seleccione Producto - </option>';
        while($c->no_vacio())
        {
            $cad.='<option value="'.$c->valor("id").'">'.$c->valor("nombre")."</option>";
        }
        return $cad;
    }

    function formulario()
    {

        $m_Form = new MantixForm();

        $m_Form->atributos=array("texto_submit"=>"Im&aacute;genes de Producto");

        $m_Form->datos=$this->datos;

        $m_Form->controles=array(
            array("label"=>"Producto:","campo"=>"idproducto","obligatorio"=>"1","tipo"=>"select", "opciones"=>$this->get_productos()),
            array("label"=>"Nombre de Foto:","campo"=>"nombre_imagen","obligatorio"=>"1"),
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

        $r->atributos=array("tabla"=>"", "nropag"=>"20", "ordenar"=>"id",
            "sql"=>
            "select ktz_galeria_productos.id, ktz_galeria_productos.nombre_imagen, ktz_galeria_productos.imagen, ktz_productos.nombre as nombre_producto, ktz_galeria_productos.estado
             from ktz_galeria_productos, ktz_productos
             where ktz_galeria_productos.idproducto = ktz_productos.id and ktz_galeria_productos.estado = 1 ");
        $r->columnas=array(
            array("titulo"=>"Producto","campo"=>"nombre_producto","ancho"=>"40%"),
            array("titulo"=>"Nombre de Imagen","campo"=>"nombre_imagen","ancho"=>"40%"),
            array("titulo"=>"Imagen","campo"=>"imagen","ancho"=>"20%"),
        );

        return $r->ver();

    }
}