<?php
require_once('Classes.php');
$ctg = new Categorie();
$lst = $ctg->getAll();
?>


<?php include_once('header.php'); ?>

<div class="row">
  <div class="col-md-12">

  </div>
</div>
<div class="row">
  <div class="col-md-5">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Ajouter nouveau catégorie</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="enregistrer_categorie.php">
          <div class="form-group">
            <input type="text" class="form-control" name="categorie" placeholder="Nom du Catégorie">
          </div>
          <button type="submit" name="enregistrer_categorie" class="btn btn-primary">Enregistrer</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Toutes les catégories</span>
        </strong>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px;">N°</th>
              <th>Catégories</th>
              <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lst as $c) : ?>
              <tr>
                <td class="text-center"><?php echo $c->num; ?></td>
                <td><?php echo $c->categorie; ?></td>
                <td class="text-center">
                  <div class="btn-group">

                    <a href="supprimer_categorie.php?num=<?php echo $c->num;
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