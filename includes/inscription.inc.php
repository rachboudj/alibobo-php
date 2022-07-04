<h1>Inscription</h1>

<?php 

if (isset($_POST['frmInscription'])) {
    echo "Je viens du formulaire";

    $nom = isset($_POST['nom']) ? htmlentities(trim($_POST['nom'])) : "";
    $prenom = isset($_POST['prenom']) ? htmlentities(trim($_POST['prenom'])) : "";
    $email = isset($_POST['email']) ? htmlentities(trim($_POST['email'])) : "";
    $mdp1 = isset($_POST['mdp1']) ? htmlentities(trim($_POST['mdp1'])) : "";
    $mdp2 = isset($_POST['mdp2']) ? htmlentities(trim($_POST['mdp2'])) : "";

    $erreurs = array();

    if (mb_strlen($nom) === 0)
        array_push($erreurs, "Veuillez saisir votre nom");
    
    if (mb_strlen($prenom) === 0)
        array_push($erreurs, "Veuillez saisir votre prénom");
    
    if (mb_strlen($email) === 0)
        array_push($erreurs, "Veuillez saisir une adresse mail");

    $messageErreurs = "<ul>";
    for ($i = 0; $i < count($erreurs); $i++) {
        $messageErreurs .= "<li>";
        $messageErreurs .= $erreurs[$i];
        $messageErreurs .= "<li>";
    }

    $messageErreurs .= "</ul>";

} else {
    require_once 'frmInscription.php';
    echo "Je viens du futur";
}
