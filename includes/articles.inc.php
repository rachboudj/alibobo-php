<?php 

$pdo = pdo();
$sql = "SELECT * FROM articles ORDER BY id_article ASC";
$query = $pdo->prepare($sql);
$query->execute();
$alibobos = $query->fetchAll();

?>

<h1>Les produits Alibobo</h1>
    <a href="nouvelleArticles.php">Ajouter un produit</a>
    <ul>
        <?php foreach($alibobos as $alibobo) {
            //debug($alibobo); ?>
            <li>
                <h2><?php echo ucfirst($alibobo['designation']); ?></h2>
                <a href="detailProduit.php?id=<?php echo $alibobo['id_article']; ?>">Voir plus</a>
            </li>
        <?php } ?>
    </ul>

<?php 
include './includes/footer.php';