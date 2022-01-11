<?php
require_once('Classes.php');
$ctg = new Categorie();

$ctg->setNum($_GET['num']);
$ctg->supprimer();
header('Location: categorie.php');
