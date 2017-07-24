<?php 

include('inc/funciones.php');

$pagina = "inicio";
$tituloApt = "";
include('inc/header.php');

 ?>

  <aside class="container-fluid">
    <div class="bgDiagonal bgAzul"></div>
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
        <li data-target="#carousel-id" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class="imgItem"></div>
          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-6">
                  <div class="textSubtitle">Hosting</div>
                  <div class="textH1">Obtén tu sitio a un precio accesible!</div>
                  <p class="textBody">Todo lo que alguna vez necesitaste para alojar y manejar tu sitio web. Hosting, dominios, constructor de sitios, aplicaciones CMS y servidores</p>
                  <p><a class="newBtn btn-lg btn-primary" href="#" role="button">Comenzá ya</a></p>
                </div>
                <div class="col-sm-5 col-md-6 hidden-xs">
                  <img src="img/pantalla1.png" class="center-block img-responsive" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="imgItem"></div>
          <div class="container">
            <div class="carousel-caption">
              <div class="col-xs-12 col-sm-7 col-md-6">
                  <div class="textSubtitle">Marketing</div>
                  <div class="textH1">Utiliza tu tiempo y energía en tu proyecto</div>
                  <p class="textBody">Administramos tu fanpage y además viralizamos tu contenido con la plataforma de Facebook ADS</p>
                  <p><a class="newBtn btn-lg btn-primary" href="#" role="button">Conocé más</a></p>
                </div>
                <div class="col-sm-5 col-md-6 hidden-xs">
                  <img src="img/pantalla2.png" class="center-block img-responsive sombraCont" alt="">
                </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="imgItem"></div>
          <div class="container">
            <div class="carousel-caption">
              <div class="col-xs-12 col-sm-7 col-md-6">
                  <div class="textSubtitle">Tienda online</div>
                  <div class="textH1">Es el momento de vender más!</div>
                  <p class="textBody">Creamos para ti una tienda online en pocos días y lista para vender.</p>
                  <p><a class="newBtn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
                <div class="col-sm-5 col-md-6 hidden-xs">
                  <img src="img/pantalla.png" class="center-block img-responsive sombraCont" alt="">
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>

  <section class="busquedaDominio separacion">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="textH1">Encuentra tu dominio ideal</div>
          <p class="textH5">Asegúrate que sea simple y fácil de recordar</p>
          <form action="#" class="">
            <div class="buscador">
              <input type="text" placeholder="Introduzca su nombre de dominio aquí..." class="bgGrisOscuro">
            </div>
            <input type="submit" value="Buscar" class="newBtn btn-primary">
          </form>
          <ul class="list-unstyled list-inline listaPrecio textH5">
            <li><strong>.com</strong> $195</li>
            <li><strong>.net</strong> $195</li>
            <li><strong>.org</strong> $195</li>
            <li><strong>.club</strong> $247</li>
            <li><strong>.com.ar</strong> $450</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="aplicacion" class="separacion">
    <div class="container text-center">
    <div class="bgDiagonal bgGrisOscuro"></div>
      <div class="row">
        <div class="col-sm-12">
          <div class="textH1">Todas las aplicaciones a un clic de distancia</div>
          <p class="textBody">Ya sea que desees crear un blog, comenzar un foro o sitio personal, tanto como si tus fines son educacionales, institucionales o comerciales, tenemos la app para cubrir cualquier necesidad!</p>
        </div>
      </div>
      <div class="row imgAplicaciones">
        <div class="col-xs-2"><img src="img/cms/logo_wordpress.svg" class="img-responsive" alt=""></div>
        <div class="col-xs-2"><img src="img/cms/logo_joomla.svg" class="img-responsive" alt=""></div>
        <div class="col-xs-2"><img src="img/cms/logo_drupal.svg" class="img-responsive" alt=""></div>
        <div class="col-xs-2"><img src="img/cms/logo_magento.svg" class="img-responsive" alt=""></div>
        <div class="col-xs-2"><img src="img/cms/moodle-logo.svg" class="img-responsive" alt=""></div>
        <div class="col-xs-2"><img src="img/cms/windows_logo.svg" class="img-responsive" alt=""></div>
      </div>
    </div>
  </section>

  <section id="razones" class="separacion">
    <div class="container text-center">
      <div class="row marginBottom50">
        <div class="col-sm-12">
          <div class="textH1">5 razones para elegirnos</div>
        </div>
      </div>
      <div class="row marginBottom50">
        <div class="col-sm-4">
          <div class="icono sombraCont">
            <i class="fa fa-life-ring" aria-hidden="true"></i>
          </div>
          <div class="textH3 marginBottom10">Soporte Técnico 24x7</div>
          <p>Contamos con personal capacitado para responder sus consultas las 24 horas del día.</p>
        </div>
        <div class="col-sm-4">
          <div class="icono sombraCont">
            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
          </div>
          <div class="textH3 marginBottom10">Compromiso de calidad</div>
          <p>Garantizamos la calidad de los servicios brindados en todas las áreas de nuestra organización.</p>
        </div>
        <div class="col-sm-4">
          <div class="icono sombraCont">
            <i class="fa fa-shield" aria-hidden="true"></i>
          </div>
          <div class="textH3 marginBottom10">Seguridad y Estabilidad</div>
          <p>Contamos con Servidores de última generación que nos permiten garantizar 99.9% de Uptime.</p>
        </div>
      </div>
      <div class="row marginBottom50">
        <div class="col-sm-6">
          <div class="icono sombraCont">
            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
          </div>
          <div class="textH3 marginBottom10">Backups automáticos</div>
          <p>Para su mayor tranquilidad, realizamos backups automáticos para respaldar todos sus datos.</p>
        </div>
        <div class="col-sm-6">
          <div class="icono sombraCont">
            <i class="fa fa-columns" aria-hidden="true"></i>
          </div>
          <div class="textH3 marginBottom10">Panel de Control</div>
          <p>Administre su Web desde un solo lugar. Contamos con licencia CPanel, reconocido como el mejor panel de Hosting mundial.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- <section id="ayuda" class="separacion">
    <div class="container text-center">
    <div class="bgDiagonal bgGris"></div>
      <div class="row">
        <div class="col-sm-12">
          <div class="textH1 marginBottom15">¿Necesitás ayuda eligiendo el mejor plan para vos?</div>
          <a href="#" class="newBtn btn-primary marginBottom15">Envianos un mensaje</a>
          <p class="textH5">Contactate con nosotros!</p>
        </div>
      </div>
    </div>
  </section> -->

  <?php include('inc/ayuda.php'); ?>

<?php include('inc/footer.php'); ?>






