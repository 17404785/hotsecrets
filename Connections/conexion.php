<?php
$con=mysql_connect("localhost","root","eresmias");
mysql_select_db("hotsecrets");
//*************************************************************

//Convierto los acentos a HTML

function chao_tilde($entra)

{

$traduce=array( '�' => '&aacute;' , '�' => '&eacute;' , '�' => '&iacute;' , '�' => '&oacute;' , '�' => '&uacute;' , '�' => '&ntilde;' , '�' => '&Ntilde;' , '�' => '&auml;' , '�' => '&euml;' , '�' => '&iuml;' , '�' => '&ouml;' , '�' => '&uuml;');

$sale=strtr( $entra , $traduce );

return $sale;

}
?>