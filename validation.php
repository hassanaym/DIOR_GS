<?php
require "dbaccess.php";


$_dba = new Dbaccess(); //instanciation
$_dba->query("SELECT * FROM user WHERE login= '" . $_POST['username'] . "'");
$user = $_dba->single();



if ($user) {
    if ($user->pwd != $_POST['password']) {
        header('location:index.php?err=2');
    } else {
        header('location:home.php');
    }
} else {
     header ('location:index.php?err=1');
}
$conn = null;
