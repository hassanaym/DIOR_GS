<?php
require_once('Classes.php');

$cp = new CommandeProduit();

$cp->setNum($_GET['num']);
$cp->setRef($_GET['ref']);

$cp->supprimer();
header('Location: commande_produit.php?num=' . $_GET['num']);
