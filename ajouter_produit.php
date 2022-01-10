<?php include_once('header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php //echo display_msg($msg); 
    ?>
  </div>
</div>
<div class="row">
  <div class="col-md-10">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Ajouter un nouveau produit</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-12">
          <form method="post" action="enregistrer_produit.php" class="clearfix">

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="reference" placeholder="Référence du produit">
                  </div>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-th-large"></i>
                </span>
                <input type="text" class="form-control" name="description" placeholder="Description du produit">
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <select class="form-control" name="categorie">
                    <option value="">Sélectionner la catégorie du produit</option>
                    <?php foreach ($all_categories as $cat) : ?>
                      <option value="<?php echo (int)$cat['id'] ?>">
                        <?php echo $cat['name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-shopping-cart"></i>
                    </span>
                    <input type="number" class="form-control" name="quantite" placeholder="Quantité">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">
                      DH
                    </span>
                    <input type="number" class="form-control" name="prix_achat" placeholder="Prix d'achat">
                    <span class="input-group-addon">.00</span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">
                      DH
                    </span>
                    <input type="number" class="form-control" name="prix_vente" placeholder="Prix de vente">
                    <span class="input-group-addon">.00</span>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" name="enregistrer_produit" class="btn btn-danger">Ajouter le produit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>