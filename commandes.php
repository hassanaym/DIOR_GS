<?php
require_once('Classes.php');

$cmd = new Commande();
$lst = $cmd->getAll();
?>

<?php include_once('header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Toutes les commandes</span>
        </strong>
        <div class="pull-right">
          <a href="ajouter_commande.php" class="btn btn-primary">Ajouter</a>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" style="width: 12px;">Num</th>
              <th class="text-center" style="width: 18%;"> Date</th>
              <th class="text-center" style="width: 18%;"> Client</th>
              <th class="text-center" style="width: 33%;"> Adresse livraison </th>
              <th class="text-center" style="width: 18%;"> Actions </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lst as $c) : ?>
              <tr>
                <td class="text-center"><?php echo $c->num; ?></td>
                <td class="text-center"><?php echo $c->date_commande; ?></td>
                <td class="text-center"><?php echo $c->nom_client; ?></td>
                <td class="text-center"><?php echo $c->adresse_livraison; ?></td>

                <td class="text-center">
                  <div class="btn-group">
                    <a href="edit_sale.php?id=<?php //echo (int)$sale['id']; 
                                              ?>" class="btn btn-warning btn-xs" title="Edit" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="delete_sale.php?id=<?php //echo (int)$sale['id']; 
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