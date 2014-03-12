<?php 
ob_start(); 
session_start();
require_once 'tilkobling/database.php';
require_once 'classes/users.php';
require_once 'classes/general.php';

$users 		= new Users($db);
$general 	= new General();

$errors = array();