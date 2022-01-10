<?php
require_once('Classes.php');

if (isset($_POST['enregistrer_fournisseur'])) {
    $fr = new Fournisseur();

    $fr->setNum($_POST['num']);
    $fr->setNom($_POST['nom']);
    $fr->setSpecialite($_POST['specialite']);
    $fr->setEmail($_POST['email']);
    $fr->setTel($_POST['tel']);
    $fr->setAdresse($_POST['adresse']);
    $fr->enregistrer();
    header('Location: fournisseurs.php');
}
