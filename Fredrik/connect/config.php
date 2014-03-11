<?php
    $config = array(
        'host' => 'hostnavn', 
        'brukernavn' => 'db brukernavn', 
        'passord' => 'db passord', 
        'dbnavn' => ' navnet på db');

    $db = new PDO('mysql:host=' . $config['host'] . ';dbnavn=' . $config['dbnavn'], $config['brukernavn'], $config['passord']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>