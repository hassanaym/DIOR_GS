<?php
require_once('Classes.php');

$cl = new Client();
$lst = $cl->getAll(); //Array
?>

<?php include_once('header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php //echo display_msg($msg); 
    ?>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Tous les clients</span>
        </strong>
        <div class="pull-right">
          <a href="ajouter_client.php" class="btn btn-primary">Ajouter</a>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" style="width: 30px;">Num</th>
              <th class="text-center" style="width: 15%;"> Nom</th>
              <th class="text-center" style="width: 15%;"> Prénom</th>
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
                <td class="text-center"><?php echo $c->prenom; ?></td>
                <td class="text-center"><?php echo $c->adresse; ?></td>
                <td class="text-center"><?php echo $c->tel; ?></td>
                <td class="text-center"><?php echo $c->email; ?></td>
                <td class="text-center">
                  <div class="btn-group">

                    <a href="supprimer_client.php?num=<?php echo $c->num;
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