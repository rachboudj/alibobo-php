<?php 

function suppArticle () {
    if(!empty($_GET['id']) && ctype_digit($_GET['id'])) {
        $articleId = $_GET['id'];
        if ($pdo = pdo()) {
            $sql = "DELETE FROM articles WHERE articles.id_article = '$articleId'";
            $reponse = $pdo->query($sql);
            $reponse->fetch();
        }
    } else {
        die('L\'article n\'a pas été supprimé...');
    }
}