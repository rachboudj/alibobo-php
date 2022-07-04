<?php 

require_once './fonctions/autoLoad.php';
autoLoad("*.php");

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

echo $_SERVER["REQUEST_URI"];

// Définir le fuseau horaire dans lequel le serveur se trouve 
date_default_timezone_set('Europe/Paris');

include './includes/header.php';
include './includes/main.php';
include './includes/footer.php';

