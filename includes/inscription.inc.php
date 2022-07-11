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
    
    elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL)))
        array_push($erreurs, "Veuillez saisir une adresse mail conforme");

    if (mb_strlen($mdp1) === 0 || mb_strlen($mdp2) === 0) {
            array_push($erreurs, "Veuillez saisir deux fois votre mot de passe");
    }

    elseif ($mdp1 !== $mdp2) {
        array_push($erreurs, "Vos mots de passe ne sont pas identiques");
    }

    if (count($erreurs) > 0) {
        $messageErreurs = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
        $messageErreurs .= "<li>";
        $messageErreurs .= $erreurs[$i];
        $messageErreurs .= "<li>";
    }
        $messageErreurs .= "</ul>";
        echo $messageErreurs;

        require_once './includes/frmInscription.php';
    } else {
        // $mdp1 = sha1($mdp1);
        // $requeteInscription = "INSERT INTO t_utilisateurs
        // (id_utilisateur, nom, prenom, email, mdp)
        // VALUES (NULL, '$nom', '$prenom', '$email', '$mdp1')
        // ";
        
            $sql = "INSERT INTO utilisateurs (id_utilisateur, nom, prenom, email, mdp) 
            VALUES (NULL, '$nom', '$prenom', '$email', '$mdp1')";
            $query = $pdo->prepare($sql);
            $query->bindValue(':title',$title, PDO::PARAM_STR);
            $query->bindValue(':content',$content, PDO::PARAM_STR);
            $query->bindValue(':auteur',$auteur, PDO::PARAM_STR);
            $query->bindValue(':status',$status, PDO::PARAM_STR);
            $query->execute();
            $last_id = $pdo->lastInsertId();
            // header('Location: index.php');
            // $success = true;
            // die($requeteInscription);
    }

    

    

} else {
    $nom = $prenom = $email = "";
    require_once 'frmInscription.php';
    echo "Je viens du futur";
}