<?php
include("cls_MantixBase20.php");
class Registro extends MantixBase {
    var $id;
    function __construct() {
        $this->ini_datos("pic_estaticos", "id");
        $this->onlyUpdate(6);
    }
    function formulario() {
        $m_Form = new MantixForm();
        $m_Form->atributos = array("texto_submit" => "Registro");
        $m_Form->datos = $this->datos;
        $m_Form->controles = array(
            array("label" => "Banner:", "campo" => "contenido", "tipo" => "archivogg",
                "descripcion" => "Banner home: Imagen o SWF",
                "extensiones" => "*.jpg; *.swf",
                "tooltip" => "Formatos permitidos: jpg, swf <br> Tamaño: 960 x 220 px"
            ),
        );
        $res = $m_Form->ver();
        return $res;
    }
    function lista() {
        /*$r = new MantixGrid();
        $sql = "select * from pic_salas";
        $r->atributos = array("sql" => $sql, "nropag" => "20", "ordenar" => "id");
        $r->columnas = array(
            array("titulo" => "Título", "campo" => "titulo"),
        );
        return $r->ver();*/
        return "&nbsp;";
    }
}
?>