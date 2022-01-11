<?php


?>
<?php include_once('header.php'); ?>
<div class="login-page">
  <div class="text-center">
    <h1>Dior GS</h1>
    <p>CONNEXION</p>
  </div>
  <form method="post" action="auth.php" class="clearfix">
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
</div>
<?php include_once('footer.php'); ?>