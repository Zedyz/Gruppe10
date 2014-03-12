<?php 
$config = array(
	'host'		=> 'db host',
	'username' 	=> 'db brukernavn',
	'password' 	=> 'db passord',
	'dbname' 	=> 'db navn'
);

$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);