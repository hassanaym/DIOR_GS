<?php
require_once('Classes.php');
$prd = new Produit();
$lstp = $prd->getAll();

$cmdapp = new ApprovisionnementProduit();
$lst = $cmdapp->getAll();

$app = new Approvisionnement();
$app->setNum($_GET['num']);
$app = $app->trouverApprovisionnement();
?>


<?php include_once('header.php'); ?>

<div class="row" style="margin-bottom:15px">
  <div class="col-md-4">
    <input type="text" class="form-control" name="num_commande" value="Approvisionnement numéro : <?php echo $app->num ?>" disabled>
  </div>

  <div class="col-md-4">
    <input type="text" class="form-control" name="num_commande" value="Date approvisionnement : <?php echo $app->date_app ?>" disabled>
  </div>

  <div class="col-md-4">
    <input type="text" class="form-control" name="num_commande" value="Fournisseur : <?php echo $app->id_fournisseur ?>" disabled>
  </div>
</div>

<div class="row">
  <div class="col-md-5">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Ajouter produit</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="enregistrer_approvisionnement_produit.php?num=<?php echo $app->num ?>">

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <select class="form-control" name="produit">
                  <option value="">Sélectionner le produit</option>
                  <?php foreach ($lstp as $p) : ?>
                    <option value="<?php echo (int)$p->reference; ?>">
                      <?php echo $p->description; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

            </div>
          </div>

          <div class="form-group">
            <input type="number" class="form-control" name="quantite" placeholder="Quantité">
          </div>
          <button type="submit" name="enregistrer_approvisionnement_produit" class="btn btn-primary">Enregistrer</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Les produits de l'approvisionnement</span>
        </strong>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="text-center" style="width: 25%;">Réf</th>
              <th class="text-center" style="width: 35%;">Produit</th>
              <th class="text-center" style="width: 25%;">Quantité</th>
              <th class="text-center" style="width: 20%;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lst as $c) : ?>
              <tr>
                <td class="text-center"><?php echo $c->ref; ?></td>
                <td class="text-center"><?php echo $c->description; ?></td>
                <td class="text-center"><?php echo $c->quantite; ?></td>

                <td class="text-center">
                  <div class="btn-group">

                    <a href="supprimer_approvisionnement_produit.php?num=<?php echo $app->num;
                                                                        ?>&ref=<?php echo $c->ref
                                                              ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<?php include_once('footer.php'); ?>