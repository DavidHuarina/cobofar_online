<?php
session_start();
if(isset($_SESSION["captcha_text"])&&$_SESSION["captcha_text"]==strtoupper($_GET['cp'])){
	error_reporting(0);
	$codSalida=$_GET['codVenta'];
	$ciudad=$_GET['ciudad'];
	$cuf=$_GET['cuf'];
	require "funciones.php";
	$datos=obtenerXmlPdfFactura($codSalida,$ciudad);
	// print_r($datos);
	$nombreFileXML="temp/F-$codSalida.xml";
	unlink($nombreFileXML);  
	$archivo = fopen($nombreFileXML,'a');    
	fputs($archivo,$datos->lista->xml);
	fclose($archivo);

	header("Content-Type: application/force-download");
	header("Content-Disposition: attachment; filename=\"$cuf.xml\"");
	readfile($nombreFileXML);
}else{	
	?><script type="text/javascript">opener.document.getElementById('mensaje_error_global').innerHTML='No se descargó el documento: El captcha es incorrecto!';window.close();</script><?php	
}





