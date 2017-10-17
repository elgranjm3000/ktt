<?php

include ("cls_MantixBase20.php");

class Preguntas_frecuentes extends MantixBase
{
    var $id;
	var $nombre;

    function __construct() {
        $this->ini_datos("ktz_preguntas_frecuentes","id");
		$this->pagina = "preguntas_frecuentes.php";
		$this->urlparam = "Preguntas_frecuentes";
    }

    function formulario() {

	    $m_Form = new MantixForm();

        $m_Form->atributos=array("texto_submit"=>"Pregunta Frecuente", "texto_idiomas"=>"si");

        $m_Form->datos=$this->datos;

 	    $m_Form->controles=array(
            array("label"=>"Pregunta:","campo"=>"pregunta","tipo"=>"area"),
            array("label"=>"Respuesta:","campo"=>"respuesta","tipo"=>"area"),
            array("label"=>"Pregunta (Ingl&eacute;s):","campo"=>"pregunta_en","tipo"=>"area"),
            array("label"=>"Respuesta (Ingl&eacute;s):","campo"=>"respuesta_en","tipo"=>"area"),
      );

	    $res = $m_Form->ver();

        return  $res;

    }

    function lista() {

	    $r = new MantixGrid();

   		$r->atributos=array("tabla"=>"","nropag"=>"20","ordenar"=>"id","sql"=>"select id, pregunta, respuesta, estado from ktz_preguntas_frecuentes");
		$r->columnas=array(
            array("titulo"=>"Pregunta","campo"=>"pregunta","ancho"=>"50%"),
            array("titulo"=>"Respuesta","campo"=>"respuesta","ancho"=>"50%"),
		);

        return $r->ver();

    }
}