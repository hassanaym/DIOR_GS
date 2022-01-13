<?php //$user = current_user(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>GS DIOR
  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>

  <header id="header">
    <div class="logo pull-left"> DIOR GS </div>
    <div class="header-content">
      <div class="header-date pull-left">
        <strong>Gestion stock</strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <span><?php
                    ?> <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">

              <li class="last">
                <a href="logout.php">
                  <i class="glyphicon glyphicon-off"></i>
                  Logout
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <div class="sidebar">

    <?php include_once('admin_menu.php'); ?>

  </div>


  <div class="page">
    <div class="container-fluid">