<?php
require_once('Classes.php');
$clt = new Client();
$lst = $clt->getAll();
?>

<?php include_once('header.php'); ?>

<div class="row">
  <div class="col-md-10">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Ajouter une nouvelle commande</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-12">
          <form method="post" action="enregistrer_commande.php" class="clearfix">

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="numero" placeholder="Numéro de la commande">
                  </div>
                </div>

              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="date" class="form-control" name="date_commande" placeholder="Date de la commande">
                  </div>
                </div>

              </div>
            </div>




            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <select class="form-control" name="client">
                    <option value="">Sélectionner le client</option>
                    <?php foreach ($lst as $c) : ?>
                      <option value="<?php (int)$c->num; ?>">
                        <?php echo $c->nom; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="adresse_livraison" placeholder="Adresse de livraison">
                  </div>
                </div>

              </div>
            </div>

            <button type="submit" name="enregistrer_produit" class="btn btn-danger">Enregistrer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>