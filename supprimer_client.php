<?php
require_once('Classes.php');
$cl = new Client();

$cl->setNum($_GET['num']);
$cl->supprimer();
header('Location: clients.php');
