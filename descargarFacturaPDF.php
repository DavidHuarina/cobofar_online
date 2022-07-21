<?php
session_start();
if(isset($_SESSION["captcha_text"])&&$_SESSION["captcha_text"]==strtoupper($_GET['cp'])){
	error_reporting(0);
	$codSalida=$_GET['codVenta'];
	$ciudad=$_GET['ciudad'];
	$cuf=$_GET['cuf'];
	require "funciones.php";
	$datos=obtenerXmlPdfFactura($codSalida,$ciudad);
	print_r($datos);
	$nombreFilePDF="temp/F-$codSalida.pdf";
	unlink($nombreFilePDF);  
	$archivo = fopen($nombreFilePDF,'a');    
	fputs($archivo,base64_decode($datos->lista->pdf));
	fclose($archivo);
	?><script type="text/javascript">
	var link = document.createElement('a');
	link.href = '<?=$nombreFilePDF?>';
	link.download = '<?=$cuf?>.pdf';
	link.dispatchEvent(new MouseEvent('click'));window.close();</script><?php	
}else{			
	?><script type="text/javascript">opener.document.getElementById('mensaje_error_global').innerHTML='No se descargó el documento: El captcha es incorrecto!';window.close();</script><?php	
}
