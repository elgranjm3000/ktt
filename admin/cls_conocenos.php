<?php

include ("cls_MantixBase20.php");

class Conocenos extends MantixBase
{
    var $id;
	var $nombre;

    function __construct() {
        $this->ini_datos("ktz_conocenos","id");
		$this->pagina = "conocenos.php";
		$this->urlparam = "Conocenos";

        if($_POST['accion'] != 2)
        {
            $_POST['accion'] = 20;
            $_POST['idobj'] = $this->comprueba_id();
        }
    }

    function comprueba_id()
    {

        $c = new MantixOaD();

        $sql = "select id from ktz_conocenos";

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
            $c->ejecutar("insert into ktz_conocenos(contenido) values ('')");

            $d = new MantixOaD();

            $sql = "select id from ktz_conocenos";
            $d->listaSP($sql,"","");
            while($d->no_vacio())
            {
                return $d->valor("id");
            }
        }
    }

    function formulario() {

	    $m_Form = new MantixForm();

        $m_Form->atributos=array("texto_submit"=>"Con&oacute;cenos", "texto_idiomas"=>"si");

        $m_Form->datos=$this->datos;

 	    $m_Form->controles=array(
            array("label"=>"Contenido:","campo"=>"contenido","tipo"=>"fck"),
            array("label"=>"Contenido (Ingl&eacute;s):","campo"=>"contenido_en","tipo"=>"fck"),
            array("label"=>"Imagen:","campo"=>"imagen","tipo"=>"archivogg",
                "descripcion"=>"Im&aacute;genes JPG",
                "extensiones"=>"*.jpg; *gif; *.png",
                "tooltip"=>"Formatos permitidos: jpg, gif, png"
            ),
      );

	    $res = $m_Form->ver();

        return  $res;

    }

    function lista() {

	    $r = new MantixGrid();

   		$r->atributos=array("tabla"=>"","nropag"=>"20","ordenar"=>"id","sql"=>"select id, descripcion, estado from ktz_conocenos");
		$r->columnas=array(
            array("titulo"=>"Nombre","campo"=>"descripcion","ancho"=>"100%"),
		);

        //return $r->ver();

    }
}