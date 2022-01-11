


<?php
require_once('Classes.php');


$cmd = new Commande();

$cmd->setNum($_GET['num']);
echo $_GET['num'];
$cmd->supprimer();
header('Location: commandes.php');
?>
