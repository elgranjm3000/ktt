<?php
//$_POST["pagina"]="clubes.php";
//$_POST["paginacion"]=2;

error_reporting(0);

$_POST["tipo"]="ajax";
include("cls_".$_POST["pagina"]);

//echo $_POST['paginacion'];

$u =  explode("-", $_POST["qs"]);

if(count($u)==0) {
  $r=new Registro();
  //$r=new Registro();
  $r=new $u[0];
}
if(count($u)==1) {
  $p1 = explode("=",$u[0]);	
  $p1 = $p1[1];
  //$r=new Registro($p1);
  $r=new $u[0];
}
if(count($u)>1) {
  $p1 = explode("=",$u[0]);	
  $p1 = $p1[1];
  $p2 = explode("=",$u[1]);	
  $p2 = $p2[1];	
  //$r=new Registro($p1,$p2);
  $r=new $u[0];
}
 

if(!$_POST["paginacion"]){
    $_POST["paginacion"]="20";
}
if($_POST["pag"]=="" || !isset($_POST["pag"]))
    $_POST["pag"]=1;

if($_POST["desactivar"])
    $r->datos->desactivar_simple($_POST["idobj"]);
if($_POST["activar"])
    // echo $_POST["idobj"];
    $r->datos->activar_simple($_POST["idobj"]);
if($_POST["eliminar"])
    $r->datos->eliminar_simple($_POST["idobj"]);
echo $r->lista();
?>