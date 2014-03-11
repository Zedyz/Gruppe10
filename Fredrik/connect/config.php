<?php
    ob_start();
    session_start();
    require_once 'connect/config.php';
    require_once 'classes/users.php';
    require_once 'classes/generelt.php';
    
    $brukere = new Brukere($db);
    $generelt = new Generelt();
    $errors = array();
?>