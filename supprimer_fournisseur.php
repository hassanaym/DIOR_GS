<?php
require_once('Classes.php');
$fr = new Fournisseur();

$fr->setNum($_GET['num']);
$fr->supprimer();
header('Location: fournisseurs.php');

?>