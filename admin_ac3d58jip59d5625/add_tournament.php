<?php include('template/header.php') ?>
<?php include('template/navbar.php') ?>
<?php include('template/sidebar.php') ?>
<?php include('template/breadcrumb.php') ?>


          <!-- Page Content -->
          <h1>Ajout de Tournois</h1>
          <hr>
          	<div class="container">
			<div class="main">
				<div class="main-center">
					<form class="" method="post" action="traitement/tournament/traitement_tournament.php">
						<div class="form-group">
							<label for="date_tournament">Date :</label>
								<div class="input-group">
								<input type="date" class="form-control" name="date_tournament" id="date_tournament"/>
							</div>
						</div>

						<div class="form-group">
							<label for="name_tournament">Nom :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="name_tournament" placeholder="Ex: Championnat de France"/>
							</div>
						</div>

						<div class="form-group">
							<label for="nb_players_tournament">Nombre de joueurs :</label>
								<div class="input-group">
									<input type="number" class="form-control" name="nb_players_tournament" placeholder="Ex: 115"/>
								</div>
						</div>
						
						<div class="form-group">
							<label for="topcut_tournament">TopCut :</label>
								<div class="input-group">
									<input type="number" class="form-control" name="topcut_tournament" placeholder="Ex: 16"/>
								</div>
						</div>
						
						<div class="form-group">
							<label for="nb_rounds_tournament">Nombre de rounds :</label>
								<div class="input-group">
									<input type="number" class="form-control" name="nb_rounds_tournament" placeholder="Ex: 7"/>
								</div>
						</div>

						<div class="form-group">
							<label for="type_tournament">Type :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="type_tournament" placeholder="Ex: NATIONAL / OPEN"/>
								</div>
						</div>

						<div class="form-group">
							<label for="type_tournament">Meta :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="meta_tournament" placeholder="Ex: BT5"/>
								</div>
						</div>

						<div class="form-group">
							<label for="afficher">Afficher ? </label>
								<div class="input-group">
									<label>->Oui</label><input type="checkbox" class="form-control" value="oui" name="afficher"/>
									<label>->Non</label><input type="checkbox" class="form-control" value="non" name="afficher"/>
								</div>
						</div>

				<button type="submit">SUBMIT</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->

<?php include('template/header.php') ?>
