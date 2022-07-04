<form action="index.php?page=inscription" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?=$nom?>"/>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?=$prenom?>"/>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="text" id="email" name="email" value="<?=$email?>"/>
    </div>
    <div>
        <label for="mdp1">Mot de passe :</label>
        <input type="password" id="mdp1" name="mdp1" />
    </div>
    <div>
        <label for="mdp2">Vérification du mots de passe :</label>
        <input type="password" id="mdp2" name="mdp2" />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Soumettre" />
    </div>
    <input type="hidden" name="frmInscription" />
</form>