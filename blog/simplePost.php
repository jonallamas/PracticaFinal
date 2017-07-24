<?php 

include('../inc/funciones.php');

$pagina = "seccionCorrespondiente"; // Modificar nombre sección
$tituloApt = "tituloAPT"; // Modificar nombre apertura
include ('../inc/header.php');

if(isset($_GET["id"])){
  $articulo_id = $_GET["id"];
  if(isset($articulos[$articulo_id])){
    $articulo = $articulos[$articulo_id]; 
  }
}else{
  header("Location: blog.php");
  exit();
}

?>

	<section>
		<div class="container">
			<?php echo articuloDetalle($articulo_id,$articulo); ?>
		</div>
	</section>

<?php include('../inc/footer.php'); ?>





