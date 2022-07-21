<?php 

function suppArticle () {
    if(!empty($_GET['articleId']) && ctype_digit($_GET['articleId'])) {
        $articleId = $_GET['articleId'];
        if ($pdo = pdo()) {
            $sql = "DELETE FROM articles WHERE articles.id_article = '$articleId'";
            $reponse = $pdo->query($sql);
            $reponse->fetch();
        }
    } else {
        die('L\'article n\'a pas été supprimé...');
    }
}