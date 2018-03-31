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
      		<a class="navbar-brand" href="<?php echo site_url('welcome') ?>">Mongrels Inc.</a>
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
            <?php button_url('btn btn-success', 'Create a new component', 'component/new') ?>
            <?php foreach ($composants as $value): ?>
              <div class="card">
                <div class="card-header"><?php echo $value['c_type'] ?> </div>
                <div class="card-body">
                  <h4><?php echo $value['c_name'] ?></h4>
                  <h6 class="text-muted"><?php echo $value['c_brand'] ?></h6>
                  <p><?php echo "Prix actuel : ".$value['c_price']->p_price." €" ?><br>
                  &nbsp;&nbsp;<?php echo "Prix daté du : ".$value['c_price']->p_date ?><br></p>
                  <p><?php echo "Description :" ?></p>
                  <p>&nbsp;&nbsp;<?php echo $value['c_description'] ?></p>
                  <h6 class="text-muted">Commentaire(s)</h6>
                </div>
                <?php echo form_open('component/get_update') ?>
                  <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                  <input type="submit" value="Modifier"></td>
                <?php echo form_close() ?>
                <?php echo form_open('component/delete') ?>
                  <input type="hidden" name="composant_id" value="<?php echo $value['_id'] ?>">
                  <input type="submit" value="Supprimer"></td>
                <?php echo form_close() ?>
              </div>
              <br>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
 	  <!-- footers -->
  	<div class="text-white bg-primary">
    	<div class="container">
      		<div class="row">
        		<div class="col-md-12 text-center align-self-center">
          			<p> <strong>Mongrels Inc.</strong>
            		<br>2 Rue le Corbusier Aix en Provence, 13100&nbsp;
            		<br>© COPYRIGHT 2018 MONGRELS INC. - ALL RIGHTS RESERVED. </p>
        		</div>
      		</div>
    	</div>
  	</div>
  	<!-- responsive design -->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
