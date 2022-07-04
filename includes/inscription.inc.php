<h1>Inscription</h1>

<?php 

if (isset($_POST['frmInsccription'])) {
    echo "Je viens du formulaire";
} else {
    echo "Je viens du futur";
}

require_once 'frmInscription.php';