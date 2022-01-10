<?php
require_once('Classes.php');

if (isset($_POST['enregistrer_produit'])) {
    $prd = new Produit();

    $prd->setReference($_POST['reference']);
    $prd->setDescription($_POST['description']);
    $prd->setQuantiteStock($_POST['quantite']);
    $prd->setPrixAchat($_POST['prix_achat']);
    $prd->setCategorie($_POST['categorie']);
    $prd->setPrixVente($_POST['prix_vente']);
    $prd->enregistrer();
    header('Location: produits.php');
}
