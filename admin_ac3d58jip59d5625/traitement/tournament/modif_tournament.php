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
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin.css" rel="stylesheet">

        <!-- Page level plugin JavaScript-->
    <script src="../../../vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../../js/demo/chart-area-demo.js"></script>
    <script src="../../../js/demo/chart-bar-demo.js"></script>
    <script src="../../../js/demo/chart-pie-demo.js"></script>

  </head>

<?php 
 include('../../template/navbar.php') ;
 include('../../template/sidebar.php') ;
 include('../../template/breadcrumb.php') ;
 include("../../../template/server.php");

$sql = 'SELECT * from tournaments WHERE id = ' . $_GET['id'] .'';

$result = mysqli_query($db, $sql);

while($row = mysqli_fetch_assoc($result)) { 

?>
 <!-- Page Content -->
          <h1>Modification de Tournois</h1>
          <hr>
          	<div class="container">
			<div class="main">
				<div class="main-center">
					<form class="" method="post" action="traitement_modification_tournament.php">
						<input id="id" name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
						<div class="form-group">
							<label for="date_tournament">Date :</label>
								<div class="input-group">
								<input type="date" class="form-control" name="date_tournament" value="<?php echo $row['date'] ?>"/>
							</div>
						</div>

						<div class="form-group">
							<label for="name_tournament">Nom :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="name_tournament" value="<?php echo $row['name'] ?>"/>
							</div>
						</div>

						<div class="form-group">
							<label for="nb_players_tournament">Nombre de joueurs :</label>
								<div class="input-group">
									<input type="number" class="form-control" name="nb_players_tournament" value="<?php echo $row['nb_players'] ?>"/>
								</div>
						</div>
						
						<div class="form-group">
							<label for="topcut_tournament">TopCut :</label>
								<div class="input-group">
									<input type="number" class="form-control" name="topcut_tournament" value="<?php echo $row['topcut'] ?>"/>
								</div>
						</div>
						
						<div class="form-group">
							<label for="nb_rounds_tournament">Nombre de rounds :</label>
								<div class="input-group">
									<input type="number" class="form-control" name="nb_rounds_tournament" value="<?php echo $row['nb_rounds'] ?>"/>
								</div>
						</div>

						<div class="form-group">
							<label for="type_tournament">Type :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="type_tournament" value="<?php echo $row['type'] ?>"/>
								</div>
						</div>

						<div class="form-group">
							<label for="type_tournament">Meta :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="meta_tournament" value="<?php echo $row['meta'] ?>"/>
								</div>
						</div>

				<button type="submit">SUBMIT</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->


<?php } ?>
