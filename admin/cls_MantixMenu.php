<?php
class MantixMenu {
    var $opciones;
	var $niveles;
	var $encuentra = false;

  function getNiveles($cad, $op) {
		$long=count($op);
	  	$base=basename($_SERVER['REQUEST_URI']);
		for ($a=0;$a<$long;$a++) {
			if($this->encuentra) break;
			if($base==$op[$a]["url"] && $op[$a]["sub"]==NULL) {
				$this->encuentra = true;
				return $cad.$op[$a]["titulo"];
			}else 
			    $cad.= $this->getNiveles($op[$a]["titulo"]."||", $op[$a]["sub"]);
		
		}
		
		if(!$this->encuentra) return "";
		
		return $cad;
  }

   function ver() {
		$cad = $this->getNiveles("",$this->opciones);
		$op = explode("||",$cad);
	    $opc = $this->opciones;

		$m="";
		$long=count($op);
        for ($a=0;$a<$long;$a++) {
		  $p = $a+1;
          $m.='<span id="main_menu'.$p.'" align="center">';	
          
		  if($a>0) 	$opc=$opcTmp;
		
		  $long1=count($opc);
	      
		  for ($a1=0;$a1<$long1;$a1++) {

            if($opc[$a1]["titulo"]==$op[$a]) {
                $id_url = str_replace(" ","",$opc[$a1]["titulo"]); 
                $m.='<a href="'.$opc[$a1]["url"].'" class="link_menu'.$p.'over" id="'.$id_url.'">'.$opc[$a1]["titulo"].'</a><a>'.(($a1<$long1-1)?"&nbsp;|&nbsp;":"")."</a>";
				$opcTmp=$opc[$a1]["sub"];
				
			} 
            else 
            {
                $id_url = str_replace(" ","",$opc[$a1]["titulo"]); 
                $m.='<a href="'.$opc[$a1]["url"].'" class="link_menu'.$p.'" id="'.$id_url.'">'.$opc[$a1]["titulo"].'</a>'.(($a1<$long1-1)?"&nbsp;|&nbsp;":"");
			}
		  }
		  
		  if($opc===$opcTmp) $opcTmp = NULL;
		  
		  $m.="</span>";
		}
		return $m;
		
    }
    
    function ordena_menu($array_valores)
    {
        $count = 0;
        $array_axu;
        
        for($i=0;$i<count($array_valores);$i++)
        {
            //$menu->opciones[$i]['titulo'] = $array_axu[$i]['titulo'];
            
            if($array_valores[$i]['titulo']!="")
            {
                $array_axu[$count]['titulo'] = $array_valores[$i]['titulo'];
                $array_axu[$count]['url'] = $array_valores[$i]['url'];
                $array_axu[$count]['sub'] = $array_valores[$i]['sub'];
                $count++;
            }
        }
        
        return $array_axu;
    }
	
}
?>