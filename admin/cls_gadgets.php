<?php

include ("cls_MantixBase20.php");

class Gadgets extends MantixBase
{
    var $id;
	var $nombre;

    function __construct()
    {
        $this->ini_datos("ktz_gadgets","id");
		$this->pagina = "gadgets.php";
		$this->urlparam = "Gadgets";

        if($_POST['accion'] != 2)
        {
            $_POST['accion'] = 20;
            $_POST['idobj'] = $this->comprueba_id();
        }
    }

    function comprueba_id()
    {

        $c = new MantixOaD();

        $sql = "select id from ktz_gadgets";

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
            $c->ejecutar("insert into ktz_gadgets(script) values ('')");

            $d = new MantixOaD();

            $sql = "select id from ktz_gadgets";
            $d->listaSP($sql,"","");
            while($d->no_vacio())
            {
                return $d->valor("id");
            }
        }
    }

    function formulario()
    {

	    $m_Form = new MantixForm();

        $m_Form->atributos=array("texto_submit"=>"Secci&oacute;n");

        $m_Form->datos=$this->datos;

 	    $m_Form->controles=array(
            //array("label"=>"Tipos:","campo"=>"id_tipos","obligatorio"=>"1","tipo"=>"select","opciones"=>$this->get_tipos()),
            array("label"=>"Script:","campo"=>"script","tipo"=>"area"),
        );

	    $res = $m_Form->ver();

        return  $res;

    }

    function lista() {

	    $r = new MantixGrid();

   		$r->atributos=array("tabla"=>"","nropag"=>"20","ordenar"=>"","sql"=>"select id, case tipo when 1 then 'Twitter Portada' when 2 then 'Twitter Interiores' when 3 then 'Tipo de Cambio Principal' when 4 then 'El Tiempo Principal' end as nomb_tipo, script, estado from al_gadgets");
		$r->columnas=array(
            array("titulo"=>"Tipo de Gadget","campo"=>"nomb_tipo","ancho"=>"100%"),
		);

        //return $r->ver();

    }
}