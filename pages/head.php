<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <link rel="icon" type="image/png" href="assets/img/favicon.ico">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

   <title>COBOFAR ONLINE</title>

   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="cobofar" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.farmaciasbolivia.com.bo" class="simple-text">                    
                    <img src="fb.gif" width="200px">
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="farbo.php?page=inicio">
                        <i class="pe-7s-news-paper"></i>
                        <p>Mis Facturas</p>
                    </a>
                </li>
                <li>
                    <a href="farbo.php?page=compras">
                        <i class="pe-7s-news-paper"></i>
                        <p>Mis Productos</p>
                    </a>
                </li>
                <li class="nav-item active active-pro">
                    <a class="nav-link active" href="farbo.php?page=page">
                        <i class="nc-icon nc-alien-33"></i>
                        <p>Más Cerca de Tí...</p>
                    </a>
                </li>    
            </ul>
      </div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span class="fa fa-user" style="font-size: 40px;margin-top: -10px;margin-right: 15px;"></span> <?=ucwords(strtolower(($_COOKIE["global_cliente"])))?> <label style="color:#3FC511">ID:<?=$_COOKIE["global_cliente_id"]?></label></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="salir.php">
                                <p><span class="fa fa-sign-out"></span> Salir</p>
                            </a>
                        </li>
                  <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>