
<?php include_once('header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php //echo display_msg($msg); ?>
  </div>
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <div class="pull-right">
          <a href="add_product.php" class="btn btn-primary">Ajouter Nouveau</a>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px;">#</th>
              <th>Titre du produit </th>
              <th class="text-center" style="width: 10%;"> Catégorie </th>
              <th class="text-center" style="width: 10%;"> En stock </th>
              <th class="text-center" style="width: 10%;"> Prix d'achat </th>
              <th class="text-center" style="width: 10%;"> Prix de vente </th>
              <th class="text-center" style="width: 10%;"> Produit Ajouté </th>
              <th class="text-center" style="width: 100px;"> Actions </th>
            </tr>
          </thead>
          <tbody>
            <?php //foreach ($products as $product) : ?>
              <tr>
                <td class="text-center"><?php //echo count_id(); ?></td>
                <td> <?php //echo remove_junk($product['name']); ?></td>
                <td class="text-center"> <?php //echo remove_junk($product['categorie']); ?></td>
                <td class="text-center"> <?php //echo remove_junk($product['quantity']); ?></td>
                <td class="text-center"> <?php //echo remove_junk($product['buy_price']); ?></td>
                <td class="text-center"> <?php //echo remove_junk($product['sale_price']); ?></td>
                <td class="text-center"> <?php //echo read_date($product['date']); ?></td>
                <td class="text-center">
                  <div class="btn-group">
                    <a href="edit_product.php?id=<?php //echo (int)$product['id']; ?>" class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="delete_product.php?id=<?php //echo (int)$product['id']; ?>" class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
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
<?php include_once('footer.php'); ?>