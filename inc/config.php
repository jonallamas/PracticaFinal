<?php 

	try{
		// Si estamos en MAC, a continuación (dentro de las comillas) de dbname, agregamos port=8888
		$bd = new PDO("mysql:host=localhost;dbname=cloudhub;","root"); // Conectándose sin contraseña
		$bd->query("SET NAMES 'utf8'");
	} catch (Exception $e){
		echo "No se ha podido conectar";
		exit;
	}

	try{
		$resultado = $bd->query("SELECT id_articulo, nombre_articulo, url_articulo, img_articulo, resumen_articulo, cuerpo_articulo, fecha_articulo, categoria_id_categoria FROM articulo ORDER BY id_articulo");
	} catch (Exception $e){
		echo "La consulta no se ha realizado";
		exit;
	}

	$articulos = $resultado->fetchAll(PDO::FETCH_ASSOC);

 ?>