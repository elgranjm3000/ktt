<?php
include ("cls_MantixBase20.php");
class Varios extends MantixBase
{
    var $id;
	var $nombre;
    function __construct() {
        $this->ini_datos("ktz_varios","id");
		$this->pagina = "varios.php";
		$this->urlparam = "Varios";
        if($_POST['accion'] != 2)
        {
            $_POST['accion'] = 20;
            $_POST['idobj'] = $this->comprueba_id();
        }
    }
    function comprueba_id()
    {
        $c = new MantixOaD();
        $sql = "select id from ktz_varios";
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
            $c->ejecutar("insert into ktz_varios(nombre_contactenos) values ('')");
            $d = new MantixOaD();
            $sql = "select id from ktz_varios";
            $d->listaSP($sql,"","");
            while($d->no_vacio())
            {
                return $d->valor("id");
            }
        }
    }
    function formulario() {
	    $m_Form = new MantixForm();
        $m_Form->atributos=array("texto_submit"=>"Recursos Varios");
        $m_Form->datos=$this->datos;
 	    $m_Form->controles=array(
            array("label"=>"Nombre Cont&aacute;ctenos:","campo"=>"nombre_contactenos","title"=>""),
            array("label"=>"Correo Cont&aacute;ctenos:","campo"=>"correo_contactenos","title"=>""),
            array("label"=>"Nombre Cont&aacute;ctenos para Productos:","campo"=>"nombre_contactenos_productos","title"=>""),
            array("label"=>"Correo Cont&aacute;ctenos para Productos:","campo"=>"correo_contactenos_productos","title"=>""),
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