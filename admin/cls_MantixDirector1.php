<?php

include("cls_MantixSession.php");
if($_SESSION["user"]["id"]=="") header("location:index.php");
include("cls_MantixIni.php");
include("cls_MantixTop.php");
include("cls_MantixError20.php");
$w_Error= new MantixError();

//die($_POST["accion"]);
switch($_POST["accion"]) {
case 13: echo $w_Error->ok($obj_adm->grid_cambiar_anio()); break;
case 12: echo $w_Error->ok($obj_adm->grid_toggle_estado()); break;
case 11: echo $w_Error->ok($obj_adm->ordenar()); break;
case 1:  echo $w_Error->ok($obj_adm->insertar(),1); break;
case 2:  echo $w_Error->ok($obj_adm->actualizar()); break;
case 3:	 echo $w_Error->ok($obj_adm->eliminar()); break;
case 4:	 echo $w_Error->ok($obj_adm->activar()); break;
case 5:	 echo $w_Error->ok($obj_adm->desactivar()); break;
case 8:	 echo $w_Error->ok($obj_adm->eliminar_simple()); break;
case 9:	 echo $w_Error->ok($obj_adm->activar_simple()); break;
case 10: echo $w_Error->ok($obj_adm->desactivar_simple()); break;
case 20: default: echo $w_Error->ok("");
//case 50:  echo $w_Error->ok($obj_adm->muestra_error_consignacion(),1); break;
case 51:  echo $w_Error->ok($obj_adm->actualizar_actualizar_orden(),1); break;
case 52:  echo $w_Error->ok($obj_adm->eliminar_simple_actualizar_orden(),1); break;  
case 53:  echo $w_Error->ok($obj_adm->actualizar_pedidos()); break;
}

//imprimimos el formulario
echo $obj_adm->formulario();

echo $obj_adm->lista();

if(stristr($_SERVER['REQUEST_URI'], "pagos.php") == TRUE)
{
    //echo $obj_adm->formulario_principal();
    //echo $obj_adm->detalle2();
    //echo $obj_adm->detalle2();    
}

	
include("cls_MantixFoot.php");
?>