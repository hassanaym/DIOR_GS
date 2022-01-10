<?php
require_once('Classes.php');   //require    //include

if (isset($_POST['enregistrer_client'])) {
    $prd = new Client(); //Instantiation  //Appel d'un constructeur

    $prd->setNum($_POST['numero']); //Appel du setter du nom
    $prd->setNom($_POST['nom']); //Appel du setter du titre
    $prd->setPrenom($_POST['prenom']); //Appel du setter du message
    $prd->setEmail($_POST['email']); //Appel du setter du email
    $prd->setTel($_POST['tel']); //Appel du setter du email
    $prd->setAdresse($_POST['adresse']); //Appel du setter du email
    $prd->enregistrer(); //Appel de la methode save
    header('Location: clients.php');
}
