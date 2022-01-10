<?php
require_once('Classes.php');

if (isset($_POST['enregistrer_commande'])) {
    $cmd = new Commande();

    $cmd->setNum($_POST['numero']);
    $cmd->setAdresseLivraison($_POST['adresse_livraison']);
    $cmd->setIdClient($_POST['client']);
    $cmd->setDateCommande($_POST['date_commande']);
    //echo $cmd->getDateCommande();
    //echo $_POST['client'];
    $cmd->enregistrer();
    header('Location: commandes.php');
}
