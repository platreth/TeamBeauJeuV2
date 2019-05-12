<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Team Beau Jeu</title>

    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">

        <!-- Page level plugin JavaScript-->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-bar-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>

  </head>

<?php 
 include('../template/navbar.php') ;
 include('../template/sidebar.php') ;
 include('../template/breadcrumb.php') ;
 include("../../template/server.php");

$sql = 'SELECT * from evenement WHERE id = ' . $_GET['id'] .'';

$result = mysqli_query($db, $sql);

while($row = mysqli_fetch_assoc($result)) { 

?>
 <!-- Page Content -->
          <h1>Modification d'évènements</h1>
          <hr>
          	<div class="container">
			<div class="main">
				<div class="main-center">
					<form class="" method="post" action="traitement_modification_evenement.php">	
					<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
						<div class="form-group">
							<label for="numero_jour">Numéro du jour :</label>
								<div class="input-group">
				<input type="text" class="form-control" name="numero_jour" id="numero_jour"  value="<?php echo $row['numero_jour'] ?>"/>
							</div>
						</div>

						<div class="form-group">
							<label for="mois">Mois (en 3 lettres majuscucles) :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="mois" value="<?php echo $row['mois'] ?>"/>
							</div>
						</div>

						<div class="form-group">
							<label for="titre">Titre de la news :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="titre" value="<?php echo $row['titre'] ?>"/>
								</div>
						</div>
						<div class="form-group">
							<label for="type">Type de news : (Type actuel : <?php echo $row['type'] ?>)</label>
								<div class="input-group">
									<label>->Tournoi Open</label><input type="checkbox" class="form-control" value="open" name="type"/>
									<label>->Tournoi BCC</label><input type="checkbox" class="form-control" value="bcc" name="type"/>
									<label>->Tournoi Boutique</label><input type="checkbox" class="form-control" value="boutique" name="type"/>
									<label>->Tournoi Lancement</label><input type="checkbox" class="form-control" value="lancement" name="type"/>
									<label>->Tournoi Avant-Première</label><input type="checkbox" class="form-control" value="avant-Première" name="type"/>
									<label>->Tournoi Special</label><input type="checkbox" class="form-control" value="special" name="type"/>

								</div>
						</div>
						<div class="form-group">
							<label for="confirm">Heure :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="heure" value="<?php echo $row['heure'] ?>"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Lieu :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="lieu" value="<?php echo $row['lieu'] ?>"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Lien Facebook :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="lien" value="<?php echo $row['lien'] ?>"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Texte :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="texte" value="<?php echo $row['numero_jour'] ?>"/>
								</div>
						</div>


				<button type="submit">SUBMIT</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->


<?php } ?>
