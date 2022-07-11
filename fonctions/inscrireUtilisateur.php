<?php

function inscrireUtilisateur(string $nom, string $prenom, string $email, string $mdp): bool {
    $mdp = sha1($mdp);

    if ($pdo = pdo()) {
        $requeteInscription = "INSERT INTO utilisateurs
        (nom, prenom, email, mdp)
        VALUES (:nom, :prenom, :email, :mdp)";
        $query = $pdo->prepare($requeteInscription);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $query->execute();
        return true;
    } else {
        return false;
    }
}