<?php include('template/header.php') ?>
<?php include('template/navbar.php') ?>
<?php include('template/sidebar.php') ?>
<?php include('template/breadcrumb.php') ?>


          <!-- Page Content -->
          <h1>Toutes les news</h1>
          <hr>
          <div class="table-responsive">
 
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
 			<th>ID</th>
 			<th>Date</th>
 			<th>Titre</th>
 			<th>Description</th>
 			<th>Image</th>
 			<th>Lien</th>
 			<th>Modifier</th>
 			<th>Supprimer</th>
 		</tr>
 	</thead>

 
<?php
 
include('../template/server.php');

 
$sql = 'SELECT * from news';
 
 
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
 			<?php echo $row['titre']; ?>
 		</td>
 		<td>
 			<?php echo $row['description'] ?>
 		</td>
 		<td>
 			<img style="width: 200px;" src="<?php echo $row['image']; ?>">
 		</td>
 		<td>
 			<a href="<?php echo $row['lien']; ?>">lien</a>
		</td>
		 <td>
 			<?php echo '<a href=traitement/news/modif_news.php?id=' . $row["id"] . '>MODIFIER</a>'; ?>
		</td>
		 <td>
 			<?php echo '<a href=traitement/news/suppr_news.php?id=' . $row["id"] . '>SUPPRIMER</a>'; ?>
		</td>
 	</tr>
 </tbody> 
 <?php }?>
</table>

<?php include('template/header.php') ?>
