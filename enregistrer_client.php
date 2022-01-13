<?php
require_once('Classes.php');

if (isset($_POST['enregistrer_client'])) {
    $prd = new Client();

    $prd->setNum($_POST['num']);
    $prd->setNom($_POST['nom']);
    $prd->setPrenom($_POST['prenom']);
    $prd->setEmail($_POST['email']);
    $prd->setTel($_POST['tel']);
    $prd->setAdresse($_POST['adresse']);
    $prd->enregistrer();
    header('Location: clients.php');
}
