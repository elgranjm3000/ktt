<?php
include ("cls_MantixBase20.php");
class Links extends MantixBase
{
    var $id;
	var $nombre;
    function __construct() {
        $this->ini_datos("ktz_links","id");
		$this->pagina = "links.php";
		$this->urlparam = "Links";
        if($_POST['accion'] != 2)
        {
            $_POST['accion'] = 20;
            $_POST['idobj'] = $this->comprueba_id();
        }
    }
    function comprueba_id()
    {
        $c = new MantixOaD();
        $sql = "select id from ktz_links";
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
            $c->ejecutar("insert into ktz_links(facebook) values ('')");
            $d = new MantixOaD();
            $sql = "select id from ktz_links";
            $d->listaSP($sql,"","");
            while($d->no_vacio())
            {
                return $d->valor("id");
            }
        }
    }
    function formulario() {
	    $m_Form = new MantixForm();
        $m_Form->atributos=array("texto_submit"=>"Links");
        $m_Form->datos=$this->datos;
 	    $m_Form->controles=array(
            array("label"=>"Facebook:","campo"=>"facebook","title"=>"Ingrese la URL del enlace completa, tal como se muestra en su navegador."),
            array("label"=>"Twitter:","campo"=>"twitter","title"=>"Ingrese la URL del enlace completa, tal como se muestra en su navegador."),
            array("label"=>"Youtube:","campo"=>"youtube","title"=>"Ingrese la URL del enlace completa, tal como se muestra en su navegador."),
        );
	    $res = $m_Form->ver();
        return  $res;
    }
    function lista() {
	    $r = new MantixGrid();
   		$r->atributos=array("tabla"=>"","nropag"=>"20","ordenar"=>"id","sql"=>"select id, descripcion, estado from uv_tipos");
		$r->columnas=array(
            array("titulo"=>"Nombre","campo"=>"descripcion","ancho"=>"100%"),
		);
        //return $r->ver();
    }
}