
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
        <form method="post" action="categorie.php">
          <div class="form-group">
            <input type="text" class="form-control" name="categorie-name" placeholder="Nom du Catégorie">
          </div>
          <button type="submit" name="add_cat" class="btn btn-primary">Ajouter une Catégorie</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Tous les catégories</span>
        </strong>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px;">#</th>
              <th>Catégories</th>
              <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php //foreach ($all_categories as $cat) : ?>
              <tr>
                <td class="text-center"><?php //echo count_id(); ?></td>
                <td><?php //echo remove_junk(ucfirst($cat['name'])); ?></td>
                <td class="text-center">
                  <div class="btn-group">
                    <a href="edit_categorie.php?id=<?php //echo (int)$cat['id']; ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="delete_categorie.php?id=<?php //echo (int)$cat['id']; ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>

              </tr>
            <?php //endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<?php include_once('footer.php'); ?>