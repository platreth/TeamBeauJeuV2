
<section class="resume-section p-3 p-lg-5 d-flex d-column" id="calendar">

<?php include('template/server.php'); 
$sql = 'SELECT * from evenement order by numero_jour ASC';
$result = mysqli_query($db, $sql);
?>	
	<div class="container">
	   <h2 class="mb-5">évènements à venir</h2>
	   <?php while($row = mysqli_fetch_assoc($result)) {  
	   	if ($row['afficher'] == 'oui'): ?>
		<div class="row row-striped tournoi-<?php echo $row['type'] ?>">
			<div class="col-2 text-right">
				<h1 class="display-4"><span class="badge badge-secondary tournoi-<?php echo $row['type'] ?>"><?php echo $row['numero_jour'] ?></span></h1>
				<h2 class='mois'><?php echo $row['mois'] ?></h2>
			</div>
			<div class="col-10">
				<h3 class="text-uppercase"><strong><?php echo $row['titre'] ?></strong></h3><p class="tournoi-<?php echo $row['type'] ?>-text"><strong>Tournoi <?php echo $row['type'] ?></strong></p>
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $row['heure'] ?></li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $row['lieu'] ?></li>
					<li class="list-inline-item"><i class="fa fa-link" aria-hidden="true"></i><a href="<?php echo $row['lien'] ?>"> Lien de l'évènement facebook</a>
				</ul>
				<p><?php echo $row['texte'] ?></p>
			</div>
		</div>
	<?php endif; } ?>
</section>
	