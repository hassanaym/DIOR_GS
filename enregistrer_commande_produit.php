<?php
require_once('Classes.php');

if (isset($_POST['enregistrer_commande_produit'])) {
    $cp = new CommandeProduit();

    $cp->setref($_POST['produit']);
    $cp->setNum($_GET['num']);
    $cp->setQuantite($_POST['quantite']);
    
    $cp->enregistrer();

    header('Location: commande_produit.php?num=' . $_GET['num']);
}
