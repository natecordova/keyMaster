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
	function showUsuario($id) {
	$row = self::$db->getRows("SELECT * FROM usuario where idusuario= ?", array("{$id}"));
	$ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'nombreusuario'},$row[0]{'contrasena'});
	return $ObjUsuario;
	}

	function updateUsuario($id, $nombreusuario,$contrasena) {
	$insertRow = self::$db->updateRow
	("Update public.usuario SET nombreusuario = ? contrasena = ? WHERE idusuario = ?", array("{$nombreusuario}", $id,"{$contrasena}"));

	}

	function insertUsuario($nombreusuario,$contrasena) {
	$insertRow = self::$db->insertRow ("Insert INTO public.usuario (nombreusuario,contrasena) VALUES (?,?)", array("{$nombre}","{$contrasena}"));

	}

 }

?>
