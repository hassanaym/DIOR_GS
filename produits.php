<?php
require_once('Classes.php');

$prd = new Produit();
$lst = $prd->getAll();
?>

<?php include_once('header.php'); ?>
<div class="row">

  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Tous les produits</span>
        </strong>
        <div class="pull-right">
          <a href="ajouter_produit.php" class="btn btn-primary">Ajouter</a>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center" style="width: 10%;">Réf</th>
              <th class="text-center" style="width: 15%;"> Description </th>
              <th class="text-center" style="width: 15%;"> Catégorie </th>
              <th class="text-center" style="width: 15%;"> En stock </th>
              <th class="text-center" style="width: 10%;"> Prix achat </th>
              <th class="text-center" style="width: 10%;"> Prix vente </th>
              <th class="text-center" style="width: 10%;"> Actions </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lst as $p) : ?>
              <tr>
                <td class="text-center"><?php echo $p->reference; ?></td>
                <td class="text-center"> <?php echo $p->description; ?></td>
                <td class="text-center"> <?php echo $p->nom_categorie; ?></td>
                <td class="text-center"> <?php echo $p->quantite_stock; ?></td>
                <td class="text-center"> <?php echo $p->prix_achat; ?></td>
                <td class="text-center"> <?php echo $p->prix_vente; ?></td>
                <td class="text-center">
                  <div class="btn-group">
                    <!-- <a href="edit_product.php?id=<?php //echo (int)$product['id']; 
                                                  ?>" class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a> -->
                    <a href="supprimer_produit.php?ref=<?php echo (int)$p->reference; 
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