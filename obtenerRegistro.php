<?php 
require_once('mysql.php');
require_once('Producto.php');
	$connection = mysql::factory('mysql');
    $connection->connect();
	$params=array(
					 	':p_idproducto' => 1		
					 );
	$datos = $connection->EjecutarRegistro("Producto","ObtenerRegistro",$params);
	
	$dtresultado=new clsProducto($datos);

	var_dump($dtresultado);
?>