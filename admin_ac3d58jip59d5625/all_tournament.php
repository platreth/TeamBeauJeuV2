<?php include('template/header.php') ?>
<?php include('template/navbar.php') ?>
<?php include('template/sidebar.php') ?>
<?php include('template/breadcrumb.php') ?>


          <!-- Page Content -->
          <h1>Tous les tournois</h1>
          <hr>
          <div class="table-responsive">
 
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
 			<th>ID</th>
 			<th>Date</th>
 			<th>Nom</th>
 			<th>Nb joueurs</th>
 			<th>Meta</th>
 			<th>Nb Rounds</th>
 			<th>Voir</th>
 			<th>Modifier</th>
 			<th>Afficher ?</th>
 		</tr>
 	</thead>

 
<?php
 
include('../template/server.php');

 
$sql = 'SELECT * from tournaments';
 
 
$result = mysqli_query($db, $sql);
 
while($row = mysqli_fetch_assoc($result)) { ?>
 
<tbody>
 	<tr>
 		<th>
 			<?php echo $row['id']; ?>
 		</th>
 		<td>
 			<?php echo $row['date']; ?>
 		</td>
 		<td>
 			<?php echo $row['name']; ?>
 		</td>
 		<td>
 			<?php echo $row['nb_players'] . ' - TOP ' . $row['topcut']; ?>
 		</td>
 		<td>
 			<?php echo $row['meta']; ?>
 		</td>
 		<td>
 			<?php echo $row['nb_rounds']; ?>
		</td>
		<td>
			<?php echo '<a href=voir_tournament.php?name_tournament=null&id=' . $row["id"] . '>VOIR</a>'; ?>
		</td>
		<td>
			<?php echo '<a href=traitement/tournament/modif_tournament.php?id=' . $row["id"] . '>MODIFIER</a>'; ?>
		</td>
		<td>
			<?php echo $row['afficher'] . '     '; echo ' <a href=traitement/tournament/modif_afficher_tournament.php?id=' . $row["id"] . '&afficher=' . $row['afficher'] . '>CHANGER</a>' ?>
		</td>
 	</tr>
 </tbody> 
 <?php }?>
</table>

<?php include('template/header.php') ?>
