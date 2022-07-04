<main>
    <h1>Main</h1>
    <?php 
    dumb($_GET);
    // lien url pour afficher le $_GET : http://localhost:8888/alibobo/?page=accueil 


    // if(isset($_GET['page'])) {
    //     $page = $_GET['page'];
    //     dumb($page);
    // } else 
    //     echo "Pas de paramètre 'page' dans l'URL";

    // // Opérateur ternaire
    // $page = isset($_GET['page']) ? $_GET['page'] : "accueil";

    // Null coalescent operator
    $page = $_GET['page'] ?? "accueil";

    autoInclude($page);
    
    ?>
</main>