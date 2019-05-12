<?php include('template/header.php') ?>
<?php include('template/navbar.php') ?>
<?php include('template/sidebar.php') ?>
<?php include('template/breadcrumb.php') ?>


          <!-- Page Content -->
          <h1>Tous les èvenements</h1>
          <hr>
          <div class="table-responsive">
 
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
 			<th>ID</th>
 			<th>Date</th>
 			<th>Titre</th>
 			<th>Lieu</th>
 			<th>Type</th>
 			<th>Lien</th>
 			<th>Supprimer</th>
 			<th>Modifier</th>
 			<th>Afficher ?</th>
 		</tr>
 	</thead>

 
<?php
 
include('../template/server.php');

 
$sql = 'SELECT * from evenement';
 
 
$result = mysqli_query($db, $sql);
 
while($row = mysqli_fetch_assoc($result)) { ?>
 
<tbody>
 	<tr>
 		<th>
 			<?php echo $row['id']; ?>
 		</th>
 		<td>
 			<?php echo $row['numero_jour'] . ' ' . $row['mois']; ?>
 		</td>
 		<td>
 			<?php echo $row['titre']; ?>
 		</td>
 		<td>
 			<?php echo $row['lieu'] . ' de ' . $row['heure']; ?>
 		</td>
 		<td>
 			<?php echo $row['type']; ?>
 		</td>
 		<td>
 			<?php echo '<a href=' . $row["lien"] . '>LIEN</a>'; ?>
		</td>
		<td>
			<?php echo '<a href=traitement/suppr_evenement.php?id=' . $row["id"] . '>SUPPRIMER</a>'; ?>
		</td>
		<td>
			<?php echo '<a href=traitement/modif_evenement.php?id=' . $row["id"] . '>MODIFIER</a>'; ?>
		</td>
		<td>
			<?php echo $row['afficher'] . '     '; echo ' <a href=traitement/modif_afficher_evenement.php?id=' . $row["id"] . '&afficher=' . $row['afficher'] . '>CHANGER</a>' ?>
		</td>
 	</tr>
 </tbody> 
 <?php }?>
</table>

<?php include('template/header.php') ?>
