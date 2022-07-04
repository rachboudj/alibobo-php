<?php 

function autoInclude(string $file): void {
    $includedFiles = glob("./includes/*.inc.php");
    $file = "./includes/" . $file . ".inc.php";

    if (count($includedFiles) !== 0 && in_array($file, $includedFiles)) {
        require_once $file;
    } else {
        require_once './includes/accueil.inc.php';
    }
}



?>