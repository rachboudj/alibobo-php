<?php

// Affichage des articles pour les utilisateurs connectés abec les droits admin

if (verifierAdmin()) {
    if ($pdo = pdo()) {
        $requeteArticles = "SELECT * FROM articles ORDER BY designation ASC";

        $tableauResultats = "<table>";
        $tableauResultats .= "<thead>";
        $tableauResultats .= "<tr>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Catégorie";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Référence";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Désignation";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "PUHT";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Taux de TVA";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Masse";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Quantité en stock";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Stocke de sécurité";
        $tableauResultats .= "</th>";
        $tableauResultats .= "</tr>";
        $tableauResultats .= "</thead>";

        $tableauResultats .= "<tbody>";

        foreach ($requeteRequeteArticles as $row) {
            $tableauResultats .= "<tr>";
            $tableauResultats .= "<td>". $row['id_categorie'] ."</td>";
            $tableauResultats .= "<td>". $row['reference'] ."</td>";
            $tableauResultats .= "<td>". $row['designation'] ."</td>";
            $tableauResultats .= "<td>". $row['puht'] ."</td>";
            $tableauResultats .= "<td>". $row['id_tva'] ."</td>";
            $tableauResultats .= "<td>". $row['masse'] ."</td>";
            $tableauResultats .= "<td>". $row['id_categorie'] ."</td>";
            $tableauResultats .= "<td>". $row['qtestock'] ."</td>";
            $tableauResultats .= "<td>". $row['qtestocksecu'] ."</td>";
            $tableauResultats .= "</tbody>";
            $tableauResultats .= "</tr>";
        }

        $tableauResultats .= "</tbody>";

        $tableauResultats .= "</table>";

    } else {
        echo "<p>Erreur PDO</p>";
    }

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
    echo $codeJs;
}

/* Les erreurs http

- 200 : tt se passe bien
- la série des 300 (301 (redirection permanente), 302 (redirection temporaire)...) : redirection
- les 400 (400 (pas les droits), 402, 404, 418 ()) : erreur
- les 500 : 

Important de connaitre les 5 principales.

Le jour où ils mettront les cons en orbite, il y en a bcp qui ne s'arrêteront pas de tourné

*/

?>