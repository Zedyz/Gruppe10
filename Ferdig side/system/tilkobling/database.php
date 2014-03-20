<?php 
$config = array(
	'host'		=> 'informasjonsteknologi.org.mysql',
	'username' 	=> 'informasjonstek',
	'password' 	=> 'SgwhJa8H',
	'dbname' 	=> 'informasjonstek'
);

$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);