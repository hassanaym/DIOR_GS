<?php
require_once('Classes.php');

$fr = new Fournisseur();
$lst = $fr->getAll();

?>

<?php include_once('header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Tous les fournisseurs</span>
        </strong>
        <div class="pull-right">
          <a href="ajouter_fournisseur.php" class="btn btn-primary">Ajouter</a>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" style="width: 30px;">Num</th>
              <th class="text-center" style="width: 15%;"> Nom</th>
              <th class="text-center" style="width: 15%;"> Spécialite</th>
              <th class="text-center" style="width: 15%;"> Adresse </th>
              <th class="text-center" style="width: 15%;"> Tél </th>
              <th class="text-center" style="width: 16%;"> Email </th>
              <th class="text-center" style="width: 12%;"> Actions </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lst as $c) : ?>
              <tr>
                <td class="text-center"><?php echo $c->num; ?></td>
                <td class="text-center"><?php echo $c->nom; ?></td>
                <td class="text-center"><?php echo $c->specialite; ?></td>
                <td class="text-center"><?php echo $c->adresse; ?></td>
                <td class="text-center"><?php echo $c->tel; ?></td>
                <td class="text-center"><?php echo $c->email; ?></td>
                <td class="text-center">
                  <div class="btn-group">
                    <a href="supprimer_fournisseur.php?num=<?php echo $c->num;
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