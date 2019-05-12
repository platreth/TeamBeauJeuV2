<?php include('template/header.php') ?>
<?php include('template/navbar.php') ?>
<?php include('template/sidebar.php') ?>
<?php include('template/breadcrumb.php') ?>


          <!-- Page Content -->
          <h1>Ajout d'évènements</h1>
          <hr>
          	<div class="container">
			<div class="main">
				<div class="main-center">
					<form class="" method="post" action="traitement/traitement_evenement.php?">
						<div class="form-group">
							<label for="numero_jour">Numéro du jour :</label>
								<div class="input-group">
				<input type="text" class="form-control" name="numero_jour" id="numero_jour"  placeholder="Ex: 9"/>
							</div>
						</div>

						<div class="form-group">
							<label for="mois">Mois (en 3 lettres majuscucles) :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="mois" placeholder="Ex: FEV"/>
							</div>
						</div>

						<div class="form-group">
							<label for="titre">Titre de la news :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="titre" placeholder="Ex: Open winter DBS"/>
								</div>
						</div>
						
						<div class="form-group">
							<label for="type">Type de news :</label>
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
									<input type="text" class="form-control" name="heure" placeholder="Ex: 10:00 à 20:00"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Lieu :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="lieu" placeholder="Ex: bruay-la-bussière"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Lien Facebook :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="lien" placeholder="Ex: http://tamèreaussihein "/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Texte :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="texte" placeholder="Ex: Wow wow cet évènement est trop cool ! "/>
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
