<?php
require_once('Classes.php');

$app = new Approvisionnement();
$lst = $app->getAll();

?>

<?php include_once('header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Tous les approvisionnements</span>
        </strong>
        <div class="pull-right">
          <a href="ajouter_approvisionnement.php" class="btn btn-primary">Ajouter</a>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" style="width: 15%;">Num</th>
              <th class="text-center" style="width: 23%;"> Date</th>
              <th class="text-center" style="width: 25%;"> Fournisseur</th>
              <th class="text-center" style="width: 18%;"> Actions </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lst as $c) : ?>
              <tr>
                <td class="text-center"><?php echo $c->num; ?></td>
                <td class="text-center"><?php echo $c->date_app; ?></td>
                <td class="text-center"><?php echo $c->nom_fournisseur; ?></td>

                <td class="text-center">
                  <div class="btn-group">
                    <a href="approvisionnement_produit.php?num=<?php echo $c->num; 
                                              ?>" class="btn btn-warning btn-xs" title="Edit" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="supprimer_approvisionnement.php?num=<?php echo $c->num;
                                                ?>" class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
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
<?php include_once('footer.php'); ?>