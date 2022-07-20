<?php 

session_start();

$_SESSION['message'] = 'Il fait chaud';


require_once './fonctions/autoLoad.php';
autoLoad("*.php");
require __DIR__.'/vendor/autoload.php';

dump($_SESSION);


// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

echo $_SERVER["REQUEST_URI"];

dump($_SERVER["REQUEST_URI"]);

// Définir le fuseau horaire dans lequel le serveur se trouve 
date_default_timezone_set('Europe/Paris');

/* Utiliser include ou require
* include renvoie un avertissement simple en cas d'erreur
* require renvoie une erreur fatale et arrête l'exécution du script
*/

if (verifierAdmin()) 
    require_once './includes/headerAdmin.php';
else 
    require_once './includes/header.php';

require_once './includes/main.php';
require_once './includes/footer.php';

