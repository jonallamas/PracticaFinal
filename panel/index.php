<?php 

include('../inc/funciones.php');

$pagina = "seccionCorrespondiente"; // Modificar nombre sección
$tituloApt = "tituloAPT"; // Modificar nombre apertura
// include ('inc/header.php');

include('inc/header.php');

?>

<div class="row">
	<div class="col-md-3 datosHost">
		<div class="itemDatosHost dominioDatos text-center">
			<a href="#">dominiodeprueba.com <i class="fa fa-external-link" aria-hidden="true"></i></a>
		</div>
		<ul class="list-unstyled itemDatosHost">
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Dirección IP</span>
				<span class="pull-right">185.28.20.237</span>
			</li>
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Usuario</span>
				<span class="pull-right">u680903503</span>
			</li>
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Contraseña</span>
				<span class="pull-right">•••••••••• <i class="fa fa-external-link" aria-hidden="true"></i></span>
			</li>
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Nodos</span>
				<span class="pull-right">345/20.000</span>
				<div class="cloudBar">
					<div class="cloudBarOcupado" style="width: 1.75%;"></div>
				</div>
			</li>
			<li>
				<span class="negrita">Uso de disco</span>
				<span class="pull-right">2.29 / 50 MB</span>
				<div class="cloudBar">
					<div class="cloudBarOcupado" style="width: 4.58%;"></div>
				</div>
			</li>
			<li>
				<span class="negrita">Ancho de banda</span>
				<span class="pull-right">1.5,4 / 10 GB</span>
				<div class="cloudBar">
					<div class="cloudBarOcupado" style="width: 15.4%;"></div>
				</div>
			</li>
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Dominios</span>
				<span class="pull-right">2/10</span>
				<div class="cloudBar">
					<div class="cloudBarOcupado" style="width: 20%;"></div>
				</div>
			</li>
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Subdominios</span>
				<span class="pull-right">4/10</span>
				<div class="cloudBar">
					<div class="cloudBarOcupado" style="width: 40%;"></div>
				</div>
			</li>
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Cuentas FTP</span>
				<span class="pull-right">6/10</span>
				<div class="cloudBar">
					<div class="cloudBarOcupado" style="width: 60%;"></div>
				</div>
			</li>
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Base de datos</span>
				<span class="pull-right">3/10</span>
				<div class="cloudBar">
					<div class="cloudBarOcupado" style="width: 30%;"></div>
				</div>
			</li>
			<li>
				<span class="negrita">Estado</span>
				<span class="pull-right">Activo</span>
			</li>
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Activación</span>
				<span class="pull-right">14-09-2016</span>
			</li>
			<li class="hidden-xs hidden-sm">
				<span class="negrita">Plan de hosting</span>
				<span class="pull-right">Plan Inicio</span>
			</li>
		</ul>
	</div>
	<div class="col-sm-12 col-md-9">
		<div class="row">
			<div class="col-sm-12">
				<div class="portlet">
					<div class="portletTitulo">
						<div class="textH4">Cuentas</div>
					</div>
					<div class="portletBody">
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-info-circle" aria-hidden="true"></i>
							<div class="nombre">Detalles</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-rocket" aria-hidden="true"></i>
							<div class="nombre">Mejorar plan</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<div class="nombre">Cambiar contraseña</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="portlet">
					<div class="portletTitulo">
						<div class="textH4">Correos</div>
					</div>
					<div class="portletBody">
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<div class="nombre">Casillas de correo</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<div class="nombre">Webmail</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<div class="nombre">Editar registro MX</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<div class="nombre">Respuesta automática</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<div class="nombre">Control de servicio</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="portlet">
					<div class="portletTitulo">
						<div class="textH4">Dominios</div>
					</div>
					<div class="portletBody">
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<div class="nombre">Dominios aparcados</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<div class="nombre">Subdominios</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<div class="nombre">Dominios adicionales</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<div class="nombre">Redirecciones</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="portlet">
					<div class="portletTitulo">
						<div class="textH4">Sitio web</div>
					</div>
					<div class="portletBody">
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<div class="nombre">Creador de sitios</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<div class="nombre">Instalador automático</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-download" aria-hidden="true"></i>
							<div class="nombre">Importar sitio</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							<div class="nombre">Páginas de error</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<div class="nombre">Plantillas</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="portlet">
					<div class="portletTitulo">
						<div class="textH4">Archivos</div>
					</div>
					<div class="portletBody">
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<div class="nombre">Administrador de archivos</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-cloud" aria-hidden="true"></i>
							<div class="nombre">Copia de seguridad</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-file" aria-hidden="true"></i>
							<div class="nombre">Acceso FTP</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-file" aria-hidden="true"></i>
							<div class="nombre">Cuentas FTP</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="portlet">
					<div class="portletTitulo">
						<div class="textH4">Base de datos</div>
					</div>
					<div class="portletBody">
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-database" aria-hidden="true"></i>
							<div class="nombre">Base de datos MySQL</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-table" aria-hidden="true"></i>
							<div class="nombre">phpMyAdmin</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-database" aria-hidden="true"></i>
							<div class="nombre">MySQL remoto</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="portlet">
					<div class="portletTitulo">
						<div class="textH4">Avanzado</div>
					</div>
					<div class="portletBody">
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<div class="nombre">Editor de Zona DNS</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<div class="nombre">Configuración PHP</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<div class="nombre">Tareas programadas</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<div class="nombre">Acceso SSH</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-info-circle" aria-hidden="true"></i>
							<div class="nombre">Info PHP</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<div class="nombre">SSL</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="portlet">
					<div class="portletTitulo">
						<div class="textH4">Otro</div>
					</div>
					<div class="portletBody">
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-folder" aria-hidden="true"></i>
							<div class="nombre">Directorios con contraseña</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<div class="nombre">Bloqueo de IP</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							<div class="nombre">Administrador de permisos IP</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-link" aria-hidden="true"></i>
							<div class="nombre">Protección Hotlink</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-folder-open" aria-hidden="true"></i>
							<div class="nombre">Índice de carpetas</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-file" aria-hidden="true"></i>
							<div class="nombre">Reparar permisos de archivos</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-bar-chart" aria-hidden="true"></i>
							<div class="nombre">Registro de actividad</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-refresh" aria-hidden="true"></i>
							<div class="nombre">Recargar cuenta</div>
						</a>
						<a href="#" class="iconBtnHosting">
							<i class="fa fa-trash-o" aria-hidden="true"></i>
							<div class="nombre">Eliminar cuenta</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
					
<?php include('inc/footer.php'); ?>





