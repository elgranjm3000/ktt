<?php

//obtenemos el email adonde se enviara la consulta
include_once ('../admin/cls_MantixOaD.php');
include_once '../admin/recursos/php/phpmailer.php';


$c = new MantixOaD();

$c->listaSP("select nombre_contactenos_productos, correo_contactenos_productos from ktz_varios where id = 1","","");

while($c->no_vacio())
{
    $nombre_contacto = $c->valor("nombre_contactenos_productos");
    //$email_contacto = "contacto@ktzperu.com";
    $email_contacto = $c->valor("correo_contactenos_productos");
}


// definimos los parametros para enviar el email
$msg='<style> #contCorreo td {font-family:BaskervilleSSiRegular, Arial; font-size:13px: color:#010101;}';
$msg.="</style>";
$mail = new phpmailer();

//quien envia el email
$mail->From = $_POST['email'];

//adonde llegara el email
$correo_llegada = $email_contacto;

$mail->FromName = utf8_decode($_POST["nombre"]." - ".$_POST["empresa"]);
$mail->Subject = utf8_decode("KTZPeru: Contacto desde la web");
$mail->AltBody = utf8_decode("Para ver el mensaje debe habilitar la opción HTML en su correo.");
        $mail->IsHTML(true);

// mensaje
$mensaje = "<style type=\"text/css\">.titulo { font-family: 'OpenSans-Regular',Arial,sans-serif; font-size:13px; font-weight:bold; color:#B163A3 } \n .label { font-family: 'OpenSans-Regular',Arial,sans-serif; font-size:13px; color:#464648 } \n .datos { font-family: 'OpenSans-Regular',Arial,sans-serif; font-size:13px; color:#464648; background-color:#F4F3F0; }</style>";

$mensaje .= "<table width=478 border=0 cellspacing=0 cellpadding=0>";

$mensaje .= "<tr><td colspan=2 align=center class=\"titulo\" width=200>KTZ Per&uacute;: Contacto desde la web</td></tr><tr><td width=159></td><td width=319>&nbsp;</td></tr>";

$mensaje .= "<tr><td align=left class=\"label\">Producto:</td><td class=\"datos\" align=left>".$_POST["producto"]  . "</td></tr><tr><td height=20></td></tr>";
$mensaje .= "<tr><td align=left class=\"label\">C&oacute;digo:</td><td class=\"datos\" align=left>".$_POST["codigo"]  . "</td></tr><tr><td height=20></td></tr>";
$mensaje .= "<tr><td align=left class=\"label\">Color:</td><td class=\"datos\" align=left>".$_POST["color"]  . "</td></tr><tr><td height=20></td></tr>";
$mensaje .= "<tr><td align=left class=\"label\">Cantidad:</td><td class=\"datos\" align=left>".$_POST["cantidad"]  . "</td></tr><tr><td height=20></td></tr>";
$mensaje .= "<tr><td align=left class=\"label\">Tama&ntilde;o:</td><td class=\"datos\" align=left>".$_POST["tamanio"]  . "</td></tr><tr><td height=20></td></tr>";
$mensaje .= "<tr><td align=left class=\"label\">Nombre:</td><td class=\"datos\" align=left>".$_POST["nombre"]  . "</td></tr><tr><td height=20></td></tr>";
$mensaje .= "<tr><td align=left class=\"label\">E-mail:</td><td class=\"datos\" align=left>".$_POST["email"]  . "</td></tr><tr><td height=20></td></tr>";
$mensaje .= "<tr><td align=left class=\"label\">Direcci&oacute;n:</td><td class=\"datos\" align=left>".$_POST["direccion"]  . "</td></tr><tr><td height=20></td></tr>";
$mensaje .= "<tr><td align=left class=\"label\">Tel&eacute;fono:</td><td class=\"datos\" align=left>".$_POST["telefono"]  . "</td></tr><tr><td height=20></td></tr>";
$mensaje .= "<tr><td align=left class=\"label\">Consulta:</td><td class=\"datos\" align=left>".$_POST["consulta"]  . "</td></tr><tr><td height=20></td></tr>";

$mensaje .= "</table>";



$mail->Body = $mensaje;
$mail->AddAddress($correo_llegada,$correo_llegada);
if($mail->Send())
{
    //echo '>Error al enviar el correo. Por favor, int&eacute;ntelo nuevamente.';
    echo 0;
}
else
{
    //echo '<p style="text-align:center; font-size:13px; color: white;">Su pedido se ha relizado correctamente,<br/>en breve recibir&aacute; un email con la confirmaci&oacute;n del pedido<br/>y las instrucciones para realizar el pago. Gracias.</p>';
    echo 1;
}