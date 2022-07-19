<?php

// Affichage des articles pour les utilisateurs connectés abec les droits admin

if (verifierAdmin()) {

} else {
    echo "<script>setTimeout(function () {
        window.location.href= 'index.php?page=accueil';
        }, 5000)
    </script>";

    $codeJS = "<p>Vous allez être redirigé dans 5 secondes. <br>Si la redirection n'est </p>";
    $codeJS .= "
    <script>
        setTimeout(function() {
            window.location.replace('http://localhost:8886/alibobo/');
        }, 5000);
    </script>
    ";
}

/* Les erreurs http

- 200 : tt se passe bien
- la série des 300 (301 (redirection permanente), 302 (redirection temporaire)...) : redirection
- les 400 (400 (pas les droits), 402, 404, 418 ()) : erreur
- les 500 : 

Important de connaitre les 5 principales.

*/

?>