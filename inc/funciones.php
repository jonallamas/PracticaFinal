<?php 
include('config.php');

$base_url = 'http://cloudhub.com/';

$tituloPagina = "Cloudhub";
$descripcionPagina = "Descripción del sitio web";

$infoTelefono = "+549 (260) 4513650";
$infoCorreo = "hola@cloudhub.com";

$moneda = "$ ";

define("ROOT", $_SERVER["DOCUMENT_ROOT"]);

// ----------------------------------------------------
// 		PLANES DE HOSTING
// ----------------------------------------------------
$hosting = array();
$hosting[001] = array(
	'id' => 001,
	'nombre' => 'Plan inicio',
	'precio' => 30,
	'discoDuro' => '50 MB',
	'transferencia' => '10 GB',
	'correos' => '50',
	'baseDatos' => '50',
	'cuentasFTP' => 'Ilimitadas',
	'dominios' => '1',
	'subdominios' => 'Ilimitados'
	);
$hosting[002] = array(
	'id' => 002,
	'nombre' => 'Plan estandar',
	'precio' => 50,
	'discoDuro' => '150 MB',
	'transferencia' => '50 GB',
	'correos' => '100',
	'baseDatos' => '100',
	'cuentasFTP' => 'Ilimitadas',
	'dominios' => 'Ilimitados',
	'subdominios' => 'Ilimitados'
	);
$hosting[003] = array(
	'id' => 003,
	'nombre' => 'Plan avanzado',
	'precio' => 80,
	'discoDuro' => '500 MB',
	'transferencia' => '100 GB',
	'correos' => 'Ilimitados',
	'baseDatos' => 'Ilimitados',
	'cuentasFTP' => 'Ilimitadas',
	'dominios' => 'Ilimitados',
	'subdominios' => 'Ilimitados'
	);

// ----------------------------------------------------
// 		NOTICIAS EN BLOG
// ----------------------------------------------------
$noticias = array();
$noticias[001] = array(
	'id' => 001,
	'url' => 'mejora-velocidad-sitio-web',
	'nombre' => 'Mejora la velocidad de tu sitio web con CloudFlare y Railgun',
	'img' => '',
	'resumen' => 'Con los avances actuales de la tecnología, nuevos algoritmos y otros factores, la velocidad de carga de un sitio web se ha convertido en un punto de suma importancia.',
	'cuerpo' => '',
	'categoria' => '',
	'fecha' => '',
	'comentarios' => ''
	);
$noticias[002] = array(
	'id' => 002,
	'url' => 'como-instalo-wordpress',
	'nombre' => '¿Cómo instalo WordPress en mi cuenta de web hosting?',
	'img' => '',
	'resumen' => '¡Es muy fácil! En Optimidia te brindamos todas las herramientas para que la instalación de tu WordPress en tu cuenta no sea más que unos clics.',
	'cuerpo' => '',
	'categoria' => '',
	'fecha' => '',
	'comentarios' => ''
	);

function articulos($articulo_id, $articulo){
	$salida = "";
	$salida = $salida . '<div class="col-sm-8">';
	$salida = $salida . '<a href="'.$articulo['url_articulo'].'"><h1>'.$articulo["nombre_articulo"].'</h1></a>';
	$salida = $salida . '<div class="imgArticulo marginBottom15" style="background-image: url('.$articulo['img_articulo'].')"></div>';
	// $salida = $salida . '<p>'.$articulo["resumen_articulo"].'</p>';
	$salida = $salida . $articulo["cuerpo_articulo"];
	$salida = $salida . '<p><a class="newBtn btn-primary" href="'.$articulo['url_articulo'].'">Leer más</a></p><hr></div>';

	return $salida;
}

?>