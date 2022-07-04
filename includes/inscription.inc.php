<h1>Inscription</h1>

<?php 

if (isset($_POST['frmInscription'])) {
    echo "Je viens du formulaire";

    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : "";
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $mdp1 = isset($_POST['mdp1']) ? trim($_POST['mdp1']) : "";
    $mdp2 = isset($_POST['mdp2']) ? trim($_POST['mdp2']) : "";

} else {
    echo "Je viens du futur";
}

// dumb($_POST);

require_once 'frmInscription.php';