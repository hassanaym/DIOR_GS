<?php
require_once('Classes.php');
$ctg = new Approvisionnement();

$ctg->setNum($_GET['num']);
$ctg->supprimer();
header('Location: approvisionnements.php');
