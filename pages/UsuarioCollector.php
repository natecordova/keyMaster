<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{

function showUsuarios() {
	$rows = self::$db->getRows("SELECT * FROM usuario ");
	echo "Usuarios Registrados";
	$arrayUsuarios= array();
	foreach ($rows as $c){

	$aux = new Usuario($c{'idusuario'},$c{'nombreusuario'},$c{'contrasena'});
	array_push($arrayUsuarios, $aux);
	}
	return $arrayUsuarios;
     }
 }

?>
