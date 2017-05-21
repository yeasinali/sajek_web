<?php 
	session_start();
	
	
	$GLOBALS['config'] = array(
		'mysql' => array(
			'host' => 'localhost',
			'user' => 'root',
			'pass' => '',
			'db'   => 'hitechweb_sajek'
		),
		'site' => array(
			'base_url' => 'http://'.$_SERVER['HTTP_HOST'].'sajek_web/',
			'action' => $_SERVER['PHP_SELF']
		)
	);
	
	function load($class){
		return require_once('class/'.$class.'.php');
		}
	
	spl_autoload_register('load');


?>