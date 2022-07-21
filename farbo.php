<?php

if(!isset($_COOKIE['global_cliente_id'])){
	header("Location:index.php");
}else{
	$url_page="pages/error.php";
	if(isset($_GET['page'])){
		switch ($_GET['page']) {
			case 'inicio':$url_page="pages/home.php";break;
			case 'compras':$url_page="pages/mis_productos.php";break;						
			case 'page':$url_page="pages/page.php";break;						
		}
	}
	require_once "pages/head.php";
	require_once $url_page;
	require_once "pages/foot.php";
}

