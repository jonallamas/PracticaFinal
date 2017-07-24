<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php 
      
      echo $tituloPagina;
      if($tituloApt){
        echo " - $tituloApt";
      }

     ?></title>

    <link href="<?php echo $base_url; ?>fontawesome/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>



  <header class="topHeader">
    <aside class="topAside bgGrisOscuro">
      <div class="container">
        <div class="row">
            <div class="hidden-xs col-sm-2 col-md-6 precioSup">
              <!-- <span class="dropdown-toggle " data-toggle="dropdown">
                $ ARS <span class="caret"></span>
              </span>
                <ul class="dropdown-menu">
                  <li><a href="#">$ USD</a></li>
                  <li><a href="#">€ EUR</a></li>
                </ul> -->
            </div>
            <div class="col-xs-12 col-sm-10 col-md-6 text-right">
              <span class="hidden-xs"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $infoTelefono; ?></span>
              <span class="hidden-xs"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $infoCorreo; ?></span>
              <a class="newBtn clienteAreaIn btn-primary"><i class="fa fa-user" aria-hidden="true"></i> Área de cliente</a>
              <div class="clienteArea text-left">
                <form action="#" method="POST" class="">
                  <div class="closeBtn"><i class="fa fa-times" aria-hidden="true"></i></div>
                  <div class="textH5">Loguarse</div>
                  <div class="username marginBottom10">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" required placeholder="Usuario">
                  </div>
                  <div class="password marginBottom10">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" required placeholder="Contraseña">
                  </div>
                  <!-- <input type="submit" class="newBtn btn-primary btn-block marginBottom10"> -->
                  <a href="<?php echo $base_url; ?>panel/" class="newBtn btn-primary btn-block marginBottom10">Enviar</a>
                  <div class="textH5 marginBottom15">
                    ¡Olvidaste la contraseña? <a href="#">Ingresá aquí</a>
                  </div>
                  <!-- <div class="clienteAreaFooter text-center">
                    <div class="marginBottom10">¿Todavía no estás registrado?</div>
                    <a href="#" class="newBtn btn-success btn-block">Registrarme</a>
                  </div> -->
                </form>
              </div>
            </div>
          </div>
      </div>
    </aside>
    <nav class="navbar navbar-new" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="<?php echo $base_url; ?>">
            <img src="<?php echo $base_url; ?>img/logo.png" class="img-responsive" width="150px" height="60px;" alt="<?php echo $tituloPagina;?>">
          </a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li <?php if($pagina=='inicio'){ echo "class='active'"; } ?>><a href="<?php echo $base_url; ?>">Inicio</a></li>
            <!-- <li <?php if($pagina=='servicio'){ echo "class='active'"; } ?> class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
                <li><a href="host">Hosting</a></li>
                <li><a href="servidores">Servidores</a></li>
                <li><a href="disenow">Diseño web</a></li>
                <li><a href="marketing">Marketing</a></li>
              </ul>
            </li> -->
            <li <?php if($pagina=='host'){ echo "class='active'"; } ?>><a href="<?php echo $base_url; ?>host">Hosting</a></li>
            <li <?php if($pagina=='conocenos'){ echo "class='active'"; } ?>><a href="<?php echo $base_url; ?>conocenos">Conócenos</a></li>
            <li <?php if($pagina=='blog'){ echo "class='active'"; } ?>><a href="<?php echo $base_url; ?>blog/">Blog</a></li>
            <!-- <li <?php if($pagina=='contacto'){ echo "class='active'"; } ?>><a href="contacto">Contacto</a></li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>