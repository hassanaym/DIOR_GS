<?php
require_once('Classes.php');
$fr = new Fournisseur();
$lst = $fr->getAll();
?>

<?php include_once('header.php'); ?>

<div class="row">
  <div class="col-md-10">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Ajouter un nouveau approvisionnement</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-12">
          <form method="post" action="enregistrer_approvisionnement.php" class="clearfix">

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="numero" placeholder="Numéro de l'approvisionnement">
                  </div>
                </div>

              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" name="date_app" placeholder="Date de l'approvisionnement'">
                  </div>
                </div>

              </div>
            </div>




            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <select class="form-control" name="fournisseur">
                    <option value="">Sélectionner le fournisseur</option>
                    <?php foreach ($lst as $f) : ?>
                      <option value="<?php echo (int)$f->num; ?>">
                        <?php echo $f->nom; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

              </div>
            </div>

            <button type="submit" name="enregistrer_approvisionnement" class="btn btn-success">Enregistrer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>