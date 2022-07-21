<?php
session_start();
if(isset($_SESSION["captcha_text"])&&$_SESSION["captcha_text"]==strtoupper($_POST['captcha'])){

	require "funciones.php";

	$usuario_adm = $_POST["username"];
	$contrasena = $_POST["password"];
	$datos=loginClienteDatosRecuperar($usuario_adm,$contrasena);
	if(isset($datos->estado)&&$datos->estado==1){
	    setcookie("global_cliente_id", $datos->lista[0]->cod_cliente,time()+3600*24*30, '/');
	    setcookie("global_cliente", $datos->lista[0]->nombre_cliente." ".$datos->lista[0]->paterno,time()+3600*24*30, '/');
	    setcookie("nuevo", $datos->lista[0]->nuevo,time()+3600*24*30, '/');
	    header("Location:farbo.php?page=inicio");
	}else{
		header("Location:recu.php?e=2");
	}
}else{	
	header("Location:recu.php?e=1");
}
