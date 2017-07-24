<?php 

include('inc/funciones.php');

$pagina = "host"; // Modificar nombre sección
$tituloApt = "Hosting";
include ('inc/header.php');

?>

	<section class="separacionApt">
		<div class="bgDiagonal bgGrisOscuro"></div>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<div class="textH1">Planes de hosting para cada necesidad</div>
					<p>Podes comenzar con el plan inicio y ampliar en la medida de tus necesidades, sin costo adicional y de forma inmediata.</p>
				</div>
			</div>
			<div class="row planesPrecioPrincipal">
				<?php foreach($hosting as $host){ ?>
				<div class="col-sm-4">
					<div class="panel panel-secundarios">
						<div class="panel-heading">
							<div class="iconoPanel"><i class="fa fa-server" aria-hidden="true"></i></div>
							<div class="nombrePlanPanel"><?php echo $host['nombre']; ?></div>
							<div class="precioPlanPanel"><?php echo $moneda.$host['precio']; ?></div>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled">
								<li>Disco duro: <?php echo $host['discoDuro']; ?></li>
								<li>Transferencia: <?php echo $host['transferencia']; ?></li>
								<li>Cuentas de Email: <?php echo $host['correos']; ?></li>
								<li>Base de datos: <?php echo $host['baseDatos']; ?></li>
								<li>Cuentas FTP: <?php echo $host['cuentasFTP']; ?></li>
								<li>Dominios: <?php echo $host['dominios']; ?></li>
								<li>Subdominios: <?php echo $host['subdominios']; ?></li>
							</ul>
							<a href="#" class="newBtn btn-primary">Comprar</a>
							<p class="textSubtitle">Precio por mes.</p>
						</div>
					</div>
				</div>
				<?php } ?>
				<p class="textSubtitle">Precios expresados en pesos argentinos, IVA incluido.</p>
			</div>
		</div>
	</section>

	<section class="separacionApt">
		<div class="container text-center">
			<div class="row marginBottom50">
		        <div class="col-sm-12">
		        	<div class="textH1">Además, nuestros planes de hosting poseen</div>
		        </div>
		    </div>
		    <div class="row marginBottom50">
		        <div class="col-sm-4">
		        	<div class="icono sombraCont">
		            	<i class="fa fa-truck" aria-hidden="true"></i>
		        	</div>
		        	<div class="textH3 marginBottom10">Migración gratis</div>
		        	<p>Nuestro equipo de migraciones moverá tu sitio web hacia Cloudhub, gratis.</p>
		        </div>
		        <div class="col-sm-4">
		        	<div class="icono sombraCont">
		          		<i class="fa fa-search" aria-hidden="true"></i>
		        	</div>
		        	<div class="textH3 marginBottom10">Alta en Buscadores Gratis</div>
		        	<p>Gestionamos el alta de tu sitio web en Google, Yahoo y Bing, totalmente gratis.</p>
		        </div>
		        <div class="col-sm-4">
		        	<div class="icono sombraCont">
		            	<i class="fa fa-mobile" aria-hidden="true"></i>
		        	</div>
		        	<div class="textH3 marginBottom10">Cloudhub Mobile</div>
		        	<p>Accedé al panel de control de tu sitio a través del celular, a toda hora y desde cualquier lugar.</p>
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
		</div>
	</section>

	<section id="preguntas" class="separacionApt">
		<div class="bgDiagonal bgGris"></div>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<div class="textH1 marginBottom15">Preguntas frecuentes</div>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="preguntaUno">
					      <h4 class="panel-title">
					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
					          <i class="fa fa-angle-right" aria-hidden="true"></i> ¿Cuánto demora el alta del servicio de hosting?
					        </a>
					      </h4>
					    </div>
					    <div id="collapseUno" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="preguntaUno">
					      <div class="panel-body">
					        A partir del momento en que completás el pedido, el alta te llegará en forma inmediata y sin demoras.
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="preguntaDos">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
					          <i class="fa fa-angle-right" aria-hidden="true"></i> ¿Hacen el diseño de mi sitio?
					        </a>
					      </h4>
					    </div>
					    <div id="collapseDos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="preguntaDos">
					      <div class="panel-body">
					        Si, hacemos diseño de sitios pero eso posee un coste aparte, pero desde cPanel podrás instalar muchos CMS (sitios web para gestión de contenidos) populares a través de la aplicación Web Apps, todos ellos personalizables y sencillos de administrar. Los más conocidos son: <span class="negrita">WordPress</span>, <span class="negrita">Joomla</span>, <span class="negrita">PrestaShop</span>, <span class="negrita">MyBB</span> y más.
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="preguntaTres">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
					          <i class="fa fa-angle-right" aria-hidden="true"></i> ¿Registran mi dominio?
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTres" class="panel-collapse collapse" role="tabpanel" aria-labelledby="preguntaTres">
					      <div class="panel-body">
					        Sí, podemos registrar tu dominio. Ingresa a la sección DOMINIOS y realiza el pedido. Una vez recibido tu pago, el mismo quedará registrado y a tu nombre. También desde el proceso de compra de su plan nuestro sistema te consultará si quieres que registremos el dominio.
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('inc/ayuda.php'); ?>

<?php include('inc/footer.php'); ?>

