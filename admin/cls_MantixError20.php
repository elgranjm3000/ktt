<?php
class MantixError
{
function ok($res,$opt=0){

 if($res!="") {
	$f='<div id="main_msg" align=center>'.$res."</div>";
	echo ($f);
 }
	
/*	
if($opt==1) {
$urlTmp = $_SERVER['REQUEST_URI'];
$url = $urlTmp.((!strstr($urlTmp, '?'))?'?opt='.$res:'&opt='.$res);
//echo '<script>window.location="'.$urlTmp.'";</script>'; 
}
else {
 if($_GET["opt"]!="" && $res=="") {  
    $f='<div id="main_msg" align=center>'.$_GET["opt"].'</div>';
	echo ($f);
  }
 if($res!="") {
	$f='<div id="main_msg" align=center>'.$res."</div>";
	echo ($f);
 }
}
*/
}
}
?>