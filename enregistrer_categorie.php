<?php
require_once('Classes.php');

if (isset($_POST['enregistrer_categorie'])) {
    $ctg = new Categorie();

    $ctg->setCategorie($_POST['categorie']);

    $ctg->enregistrer();

    header('Location: categorie.php');
}
