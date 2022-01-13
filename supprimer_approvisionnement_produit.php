<?php
require_once('Classes.php');

$ap = new ApprovisionnementProduit();

$ap->setNum($_GET['num']);
$ap->setRef($_GET['ref']);

$ap->supprimer();
header('Location: approvisionnement_produit.php?num=' . $_GET['num']);
