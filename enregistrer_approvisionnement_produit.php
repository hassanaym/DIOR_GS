<?php
require_once('Classes.php');

if (isset($_POST['enregistrer_approvisionnement_produit'])) {
    $ap = new ApprovisionnementProduit();

    $ap->setref($_POST['produit']);
    $ap->setNum($_GET['num']);
    $ap->setQuantite($_POST['quantite']);

    $ap->enregistrer();

    header('Location: approvisionnement_produit.php?num=' . $_GET['num']);
}
