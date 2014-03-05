<?php 
require_once('mysql.php');
require_once('Producto.php');
	$connection = mysql::factory('mysql');
    $connection->connect();
	$params=array(
					 	
					 	':p_nombre' => "Azucar",
					 	':p_precio' => 4
					 );
	$datos = $connection->EjecutarComando("Producto","insertar",$params);
	echo $datos;
?>