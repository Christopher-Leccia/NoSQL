<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="asset/css/perso.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
</head>

<body>
  	<!-- Navbar -->
  	<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    	<div class="container">
      		<a class="navbar-brand" href="#">Mongrels Inc.</a>
      		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		        <ul class="navbar-nav mr-auto">
		          <li class="nav-item">
		            <a class="nav-link" href="<?php echo site_url('welcome') ?>">Accueil</a>
		          </li>
		        </ul>
          <?php echo form_open('component/search') ?>
            <input class="form-control mr-2" type="text" placeholder="Recherche" name="search">
            <input class="btn btn-primary" type="submit" value="Rechercher"></button>
          <?php echo form_close() ?>
        </div>
      </div>
    </nav>
    <div class="py-5 cover filter-gradient">
      <div class="container">
        <div class="row">
          <?php
            if ($this->session->flashdata('success')) {
                echo "<div class='alert alert-success textalign-center'>";
                echo $this->session->flashdata('success');
                echo "</div>";
            }
          ?>
          <div class="col-md-12">
            <h1>Research Results</h1>
            <h2>Corresponding Brands</h2>
           <?php foreach ($c_brand as $value): ?>
            <div class="card">
              <div class="card-header"><?php echo $value['c_type'] ?> </div>
              <div class="card-body">
                <h4><?php echo $value['c_name'] ?></h4>
                <h6 class="text-muted"><?php echo $value['c_brand'] ?></h6>
                <p><?php echo "Prix actuel : ".$value['c_price']->p_price." €" ?><br>
                &nbsp;&nbsp;<?php echo "Prix daté du : ".$value['c_price']->p_date ?><br></p>

                <p><?php echo $value['c_description'] ?></p>

                </p>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <?php echo form_open('component/view') ?>
                    <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                    <input class="btn btn-success col-md-12" type="submit" value="Voir la fiche produit"></td>
                  <?php echo form_close() ?>
                </div>
                <div class="col-md-4">
                  <?php echo form_open('component/get_update') ?>
                    <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                    <input class="btn btn-dark col-md-12" type="submit" value="Modifier"></td>
                  <?php echo form_close() ?>
                </div>
                <div class="col-md-4">
                  <?php echo form_open('component/delete') ?>
                    <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                    <input class="btn btn-primary col-md-12" type="submit" value="Supprimer"></td>
                  <?php echo form_close() ?>
                </div>
              </div>
            </div>
            <br>
            <?php endforeach; ?>

            <h2>Corresponding Names</h2>
            <?php foreach ($c_name as $value): ?>
             <div class="card">
               <div class="card-header"><?php echo $value['c_type'] ?> </div>
               <div class="card-body">
                 <h4><?php echo $value['c_name'] ?></h4>
                 <h6 class="text-muted"><?php echo $value['c_brand'] ?></h6>
                 <p><?php echo "Prix actuel : ".$value['c_price']->p_price." €" ?><br>
                 &nbsp;&nbsp;<?php echo "Prix daté du : ".$value['c_price']->p_date ?><br></p>

                 <p><?php echo $value['c_description'] ?></p>

                 </p>
               </div>
               <div class="row">
                 <div class="col-md-4">
                   <?php echo form_open('component/view') ?>
                     <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                     <input class="btn btn-success col-md-12" type="submit" value="Voir la fiche produit"></td>
                   <?php echo form_close() ?>
                 </div>
                 <div class="col-md-4">
                   <?php echo form_open('component/get_update') ?>
                     <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                     <input class="btn btn-dark col-md-12" type="submit" value="Modifier"></td>
                   <?php echo form_close() ?>
                 </div>
                 <div class="col-md-4">
                   <?php echo form_open('component/delete') ?>
                     <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                     <input class="btn btn-primary col-md-12" type="submit" value="Supprimer"></td>
                   <?php echo form_close() ?>
                 </div>
               </div>
             </div>
             <br>
             <?php endforeach; ?>

             <h2>Corresponding Types</h2>

             <?php foreach ($c_type as $value): ?>
              <div class="card">
                <div class="card-header"><?php echo $value['c_type'] ?> </div>
                <div class="card-body">
                  <h4><?php echo $value['c_name'] ?></h4>
                  <h6 class="text-muted"><?php echo $value['c_brand'] ?></h6>
                  <p><?php echo "Prix actuel : ".$value['c_price']->p_price." €" ?><br>
                  &nbsp;&nbsp;<?php echo "Prix daté du : ".$value['c_price']->p_date ?><br></p>

                  <p><?php echo $value['c_description'] ?></p>

                  </p>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <?php echo form_open('component/view') ?>
                      <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                      <input class="btn btn-success col-md-12" type="submit" value="Voir la fiche produit"></td>
                    <?php echo form_close() ?>
                  </div>
                  <div class="col-md-4">
                    <?php echo form_open('component/get_update') ?>
                      <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                      <input class="btn btn-dark col-md-12" type="submit" value="Modifier"></td>
                    <?php echo form_close() ?>
                  </div>
                  <div class="col-md-4">
                    <?php echo form_open('component/delete') ?>
                      <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                      <input class="btn btn-primary col-md-12" type="submit" value="Supprimer"></td>
                    <?php echo form_close() ?>
                  </div>
                </div>
              </div>
              <br>
              <?php endforeach; ?>


          </div>
        </div>
      </div>
    </div>
  </body>
</html>
