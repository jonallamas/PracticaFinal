<?php 

include('../inc/funciones.php');

$pagina = "blog"; // Modificar nombre sección
$tituloApt = "Blog"; // Modificar nombre apertura
include ('../inc/header.php');

?>

	<section class="separacionApt">
		<div class="bgDiagonal bgGrisOscuro"></div>
		<div class="container">
			<div class="row marginBottom15">
				<div class="col-sm-12">
					<div class="textH1">Blog</div>
					<div class="textBody">Enterate de lo último en tecnología web y la industria del hosting</div>
				</div>
			</div>
			<div class="row">
				<?php foreach($articulos as $articulo_id => $articulo){
					echo articulos($articulo_id, $articulo);
				} ?>
				<div class="col-sm-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut nobis consectetur ratione ab, sint quod eveniet. Commodi, quibusdam eius et hic aperiam, maiores sint, esse laboriosam iusto cumque, fugiat.
				</div>
			</div>
		</div>
	</section>

<?php include('../inc/footer.php'); ?>





