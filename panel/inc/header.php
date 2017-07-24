<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link href="<?php echo $base_url; ?>fontawesome/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>panel/css/stylePanel.css">
</head>
<body>

	<div id="wrapper">
	    <aside class="MenuPrincipal" id="menu">
	      <div class="CuerpoMenu_Elementos">
	        <div class="logo">
	          <img src="img/logo.png" class="img-responsive" alt="">
	        </div>
	        <div class="user">
	          <nav>
	            <ul class="nav metismenu" id="menu">
		            <div class="modulos-menu">
		              <ul class="nav">
		                <li class="titulo-seccion">Panel administración</li>
		                <li><a href="#">Hosting</a></li>
		                <li><a href="#">Dominios</a></li>
		                <li><a href="#">Diseño web</a></li>
		                <li><a href="#">Marketing</a></li>
		              </ul>
		            </div>
		            <div class="modulos-menu">
		              <ul class="nav">
		                <li class="titulo-seccion">Soporte</li>
		                <li><a href="#">Usuarios del Sistema</a></li>
		                <li><a href="#">Configuración de MercadoPago</a></li>
		                <li><a href="#">Correos Electrónicos</a></li>
		                <li><a href="#">Configurar APP</a></li>
		                <li><a href="#">Configuración del Sistema</a></li>
		              </ul>
		            </div>
		          </ul>
	          </nav>
	        </div>
	        <div class="clearfix"></div>
	      </div>
	    </aside>
	    <div class="navegacionSuperior">
	      <div class="row">
	        <div class="col-xs-2 col-xs-2 visible-xs visible-sm menuMovil">
	          <a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars" id="showMenu" aria-hidden="true"></i></a>
	        </div>
	        <div class="col-xs-10 col-sm-10 col-md-12 info-right">
	          <div class="userSup sinEstilo">
	            <div class="dropdown">
	              <div class="avatar">
	                <!-- <img src="http://via.placeholder.com/150x150" class="img-circle img-responsive" alt=""> -->
	                <img src="img/perfil.jpg" width="150px" height="150px" alt="" class="img-circle img-responsive">
	              </div>
	              <button class="dropdown-toggle" type="button" data-toggle="dropdown">
	              <div class="tools">
	                <div class="name">Marco</div>
	                <!-- <div class="level">Súper Administrador</div> -->
	              </div>
	              <span class="caret"></span></button>
	              <ul class="dropdown-menu">
	                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
	                <li><a href="<?php echo $base_url; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Sesión</a></li>
	              </ul>
	            </div>
	          </div>
	          <!-- <div class="soporte sinEstilo hidden-xs">
	            <div class="dropdown">
	              <button class="dropdown-toggle" type="button" data-toggle="dropdown">
	                <i class="fa fa-life-ring" aria-hidden="true"></i> <span class="badge">5</span>
	              </button>
	              <ul class="dropdown-menu">
	                <li><a href="">
	                  <div class="pendiente bloque">
	                    <div class="titulo">Pendiente <i class="fa fa-info-circle pull-right" aria-hidden="true"></i></div>
	                    <div class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, pariatur!</div>
	                  </div>
	                </a></li>
	                <li><a href="">
	                  <div class="aprobado bloque">
	                    <div class="titulo">Aprobado <i class="fa fa-info-circle pull-right" aria-hidden="true"></i></div>
	                    <div class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, pariatur!</div>
	                  </div>
	                </a></li>
	                <li><a href="">
	                  <div class="denegado bloque">
	                    <div class="titulo">Denegado <i class="fa fa-info-circle pull-right" aria-hidden="true"></i></div>
	                    <div class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, pariatur!</div>
	                  </div>
	                </a></li>
	                <li><a href="#" class="verMas text-center">Ver más</a></li>
	              </ul>
	            </div>
	          </div> -->
	        </div>
	      </div>
	    </div>
		<section class="CuerpoGeneral">
			<div class="content">
				<div class="row">
					<div class="col-sm-12">