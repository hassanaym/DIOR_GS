<?php
require_once('Classes.php');

if (isset($_POST['enregistrer_approvisionnement'])) {
    $app = new Approvisionnement();

    $app->setNum($_POST['numero']);
    $app->setIdFournisseur($_POST['fournisseur']);
    $app->setDateApp($_POST['date_app']);
    $app->enregistrer();
    header('Location: approvisionnements.php');
}
