<?php
include("cls_MantixBase20.php");

class Usuarios extends MantixBase
{
	var $id;
	var $nombres;
	var $apellidos;
	var $usuario;
	var $password;

	function __construct()
	{
		$this->ini_datos("ktz_usuarios","usuario");
	}

	function get_fila2($idu)
	{
		 $this->datos->get_fila($idu);
		 $this->id=$this->datos->valor("id");
		 $this->nombres=$this->datos->valor("nombres");
		 $this->apellidos=$this->datos->valor("apellidos");
		 $this->usuario=$this->datos->valor("usuario");
		 $this->password=$this->datos->valor("password");
	}

	function full_nombre()
	{
	 	return $this->datos->valor("nombres")."&nbsp;".$this->datos->valor("apellidos");
	}

	function pre_ins()
	{
	 	$this->datos->agregar("password",md5($_POST["password"]));
	}

	function pre_upd()
	{
		 if($_POST['id_cambio'] == 1)
		 	$this->datos->agregar("password",md5($_POST["password"]));
	}

	function ingresar()
	{
		$this->datos->listaSP("select * from ktz_usuarios where usuario='".str_replace("'","",trim($_POST["txt_user"]))."' and password='".md5(trim($_POST["txt_pass"]))."'","","");
		if ($this->datos->no_vacio())
		{
			  include_once("cls_MantixSession.php");
			  $_SESSION["user"]=array("id"=>$this->datos->valor("id"),"nombre"=>$this->datos->valor("nombres")." ".$this->datos->valor("apellidos"),"usuario"=>$this->datos->valor("usuario"),"password"=>$this->datos->valor("password"));
	          $_SESSION["tipo"]= $this->datos->valor("tipo");
			  return 0;
		 }
		 else
		 {
		 	return 11;
		 }
	}

	function modificar_password()
	{
		if($_SESSION["user"]["password"]==trim(md5($_POST["password"])))
		{
			$this->datos->ejecutar("update ktz_usuarios set password='".md5(trim($_POST["nueva"]))."' where id=".$_SESSION["user"]["id"]);
		    return "Contraseña cambiada correctamente.";
		}
		else
		{
			return "Verifique la Contraseña actual.";
		}
	}

	function tipo_usuario()
	{
	    $cad='<option value=""> - Tipo Usuario - </option>';
	    $cad.='<option value="1"> Super Administrador </option>';
	    $cad.='<option value="2"> Administrador </option>';
	    $cad.='<option value="3"> Reportero </option>';
	    $cad.='<option value="4"> Redes Sociales </option>';
	    $cad.='<option value="5"> P&uacute;blico </option>';
	    $cad.='<option value="6"> Fotos </option>';

	    return $cad;
	}

	function lista()
	{
		$r = new MantixGrid();
		$r->atributos=array("tabla"=>"","nropag"=>"20","ordenar"=>"usuario", "sql"=>"select * from ktz_usuarios where tipo != 5");
		$r->columnas=array(
			array("titulo"=>"Usuario","campo"=>"usuario","ancho"=>"25%"),
			array("titulo"=>"Nombre","campo"=>"nombres","ancho"=>"25%"),
			array("titulo"=>"Apellidos","campo"=>"apellidos","ancho"=>"50%"),
		);
		return $r->ver();
	}

	function opciones()
	{
	    $cad='<option value="0">No</option>';
	    $cad.='<option value="1">Si</option>';
	    return $cad;
	}

	function opciones_boletin()
	{
		$cad='<option value=""> - Frecuencia de Env&iacute;o - </option>';
	    $cad.='<option value="1">Diario</option>';
	    $cad.='<option value="2">Semanal</option>';
	    return $cad;
	}

	function formulario()
	{
	    //if($_SESSION["tipo"]!= 1){header('Location: proveedores.php?id=1');}

		$m_Form = new MantixForm();
		$m_Form->atributos=array("texto_submit"=>"Usuario");
		$m_Form->datos=$this->datos;
		$m_Form->controles=array(
		    array("label"=>"Usuario:","campo"=>"usuario","obligatorio"=>"1","max_car"=>"30"),
		    array("label"=>"Contrase&ntilde;a:","campo"=>"password","tipo"=>"password","max_car"=>"30","obligatorio"=>"1"),
		    array("label"=>"Reingresar Contrase&ntilde;a:","campo"=>"rpass","max_car"=>"30","tipo"=>"password","obligatorio"=>"1"),
		    array("label"=>"Nombre:","campo"=>"nombres","obligatorio"=>"1"),
		    array("label"=>"Apellidos:","campo"=>"apellidos","obligatorio"=>"1"),
		    array("label"=>"Cambiar Contrase&ntilde;a:","campo"=>"id_cambio","tipo"=>"select", "opciones"=>$this->opciones()),
		  //array("label"=>"Estado del Registro:","campo"=>"estado","tipo"=>"select","opciones"=>$this->cbo_activo())
		);

		$res = $m_Form->ver();
		return  $res;
	}

	function formulario_modpass()
	{
		$m_Form = new MantixForm();
		$m_Form->atributos=array("texto_submit"=>"Contrase&ntilde;a");
		$m_Form->datos=$this->datos;
		$m_Form->controles=array(
		array(
				"label"=>"Contrase&ntilde;a Actual:",
				"campo"=>"password",
				"obligatorio"=>"1",
				"tipo"=>"password",
				"valor"=>"NULL",
				"max_car"=>"30"
				),
		  array(
				"label"=>"Contrase&ntilde;a Nueva:",
				"campo"=>"nueva",
				"valor"=>"NULL",
				"obligatorio"=>"1",
				"tipo"=>"password",
				"max_car"=>"30"
				),
		  array(
				"label"=>"Reingresar Contrase&ntilde;a:",
				"obligatorio"=>"1",
				"campo"=>"rpass",
				"max_car"=>"30",
				"valor"=>"NULL",
				"tipo"=>"password"
				));
		$res = str_replace("f.submit();","if ( f.rpass.value!=f.nueva.value  ) { alert ('La contraseña nueva no coincide con el reingreso.'); f.nueva.focus(); return; } f.submit();", $m_Form->ver());
		return  $res;
	}
}