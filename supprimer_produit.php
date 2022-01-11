<?php
require_once('Classes.php');
$prd = new Produit();

$prd->setReference($_GET['ref']);
$prd->supprimer();
header('Location: produits.php');
?>
