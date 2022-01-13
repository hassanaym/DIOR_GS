<?php


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
<div class="login-page">
  <div class="text-center">
    <h1>Dior GS</h1>
    <p>CONNEXION</p>
  </div>
  <form method="post" action="validation.php" class="clearfix">
    <div class="form-group">
      <label for="username" class="control-label">Nom utilisateur</label>
      <input type="name" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="Password" class="control-label">Mot de passe</label>
      <input type="password" name="password" class="form-control" placeholder="password">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-info  pull-right">Login</button>
    </div>
  </form>

  <div class="erreur">
            <?php
                if (isset($_GET['err'])){
                    if($_GET['err']==1){
                        echo "Veuillez saisir un login correct.";
                    }else{
                        echo "Le mot de passe ne correspond pas au login saisi.";
                    }
                }
            ?>
        </div>
</div>
<?php include_once('footer.php'); ?>
</body>
</html>

