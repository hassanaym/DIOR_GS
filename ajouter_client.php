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
          <form method="post" action="enregistrer_client.php" class="clearfix">



            <div class="form-group">
              <div class="row">

                <div class="col-md-6">
                  <div class="input-group ">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="num" placeholder="Numéro">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group ">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="tel" placeholder="Téléphone">
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">

                <div class="col-md-6">
                  <div class="input-group ">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group ">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">

                <div class="col-md-6">
                  <div class="input-group ">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group ">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-th-large"></i>
                    </span>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <button type="submit" name="enregistrer_client" class="btn btn-danger">Ajouter le client</button>
                </div>
              </div>
            </div>





          </form>
        </div>


      </div>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>