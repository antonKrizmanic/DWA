<?php


// podesite parametre za svoju bazu
ORM::configure('mysql:host=localhost;dbname=fantastic_beasts');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

// iduća linija je potrebna kako bi natjerali konekciju prema MySQL-u u utf8
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

