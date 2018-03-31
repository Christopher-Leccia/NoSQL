<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="<?php echo base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  	<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/Perso.css" type="text/css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.css">
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
        <div class="card">
          <div class="card-body">
            <?php echo form_open('component/create') ?>
              <input type="text" name="c_brand" placeholder="Brand"> <br>
              <input type="text" name="c_name" placeholder="Name"> <br>
              <input type="text" name="c_type" placeholder="Type"> <br>
              <input type="text" name="c_code" placeholder="Code"> <br>
              <input type="text" name="c_price->p_price" placeholder="Price"> <br>
              <input type="text" name="c_compatibility->c_type" placeholder="Compatibility"> <br>
              <textarea name="c_description" rows="4" cols="60" placeholder="Description"></textarea> <br>
              <input type="submit" name="" value="Create">
            <?php echo form_close() ?>
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
