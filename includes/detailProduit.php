<?php

// require('../fonctions/pdo.php');


if(!empty($_GET['id_article']) && is_numeric($_GET['id_article'])) 
{
    $id = $_GET['id_article'];
    $pdo = pdo();
    $sql = "SELECT * FROM articles WHERE id_article = :id_article";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id_article',$id, PDO::PARAM_INT);
    $query->execute();
    $alibobo = $query->fetch();

    if(empty($alibobo)) {
        // header('Location: 404.php');
    }
} else {
    //die('404');
    // header('Location: 404.php');
}

include 'header.php';
?>

<h1>Détails du produit</h1>

<h2><?php echo $alibobo['designation']; ?></h2>
<?php 
include 'footer.php';