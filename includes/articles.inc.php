<?php 

$sql = "SELECT * FROM articles ORDER BY created_at ASC";
$query = $pdo->prepare($sql);
$query->execute();
$alibobos = $query->fetchAll();

include './includes/header.php';
?>

<h1>Les produits Alibobo</h1>
    <a href="new-beer.php">Ajouter un produit</a>
    <ul>
        <?php foreach($alibobos as $alibobo) {
            debug($alibobo); ?>
            <li>
                <h2><?php echo ucfirst($alibobo['designation']); ?></h2>
                <a href="detailProduit.php?id=<?php echo $alibobo['id']; ?>">Voir plus</a>
            </li>
        <?php } ?>
    </ul>

<?php 
include './includes/footer.php';