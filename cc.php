<?php
session_start();
if(isset($_SESSION["captcha_text"])&&$_SESSION["captcha_text"]==strtoupper($_POST['captcha'])){	
	$contra = $_POST["contra"];
	$contra2 = $_POST["contra2"];
	if($contra2==$contra){
		require "funciones.php";
		$datos=updateContraNueva($_COOKIE['global_cliente_id'],$contra);
		if(isset($datos->estado)&&$datos->estado==1){
		    setcookie("nuevo", 0,time()+3600*24*30, '/');
			header("Location:farbo.php?page=inicio");
		}else{
			header("Location:farbo.php?page=inicio&e=2");
		}		
	}else{
		header("Location:farbo.php?page=inicio&e=1");
	}	
}else{	
	header("Location:farbo.php?page=inicio&e=0");
}
