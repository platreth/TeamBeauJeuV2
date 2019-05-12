<?php include('template/header.php') ?>
<?php include('template/navbar.php') ?>
<?php include('template/sidebar.php') ?>
<?php include('template/breadcrumb.php') ?>
<?php include('../template/server.php');
$bdd = new mysqli($serveur, $user, $pass, $base);
$bdd->set_charset('utf8');


$requete = mysqli_query($bdd, 'select * from tournaments');?>


          <!-- Page Content -->
  		<div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
            	<h2>Import de tournoi</h2>
            	<form method="POST" action="upload.php" enctype="multipart/form-data">	
            		<input type="file" name="tournoi">
            		<input type="hidden" name="MAX_FILE_SIZE" value="100000">
            		<input type="submit" name="envoyer" value="Envoyer le fichier">
				</form> 
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
            	<h2>Les tournois en BDD</h2>
            	<?php
            	foreach (mysqli_fetch_assoc($requete) as $key):
            	 echo $key;
            	endforeach;
            	?>
            </div>
        </div>

<?php include('template/header.php') ?>
