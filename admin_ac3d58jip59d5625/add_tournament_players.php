<?php include('template/header.php') ?>
<?php include('template/navbar.php') ?>
<?php include('template/sidebar.php') ?>
<?php include('template/breadcrumb.php'); 
$nb_players = $_GET["topcut"];
$name_tournament = $_GET["name"];

?>


          <!-- Page Content -->
          <h1>Ajout des infos de Tournoi</h1>
          <hr>
          	<div class="container">
			<div class="main">
				<div class="main-center">
					<form class="" method="post" action="traitement/tournament/traitement_tournament_players.php">

					<input id="nb_players" name="nb_players" type="hidden" value="<?php echo $nb_players ?>">
					<input id="name_tournament" name="name_tournament" type="hidden" value="<?php echo $name_tournament ?>">

					<!-- BOUCLE SUR LE NOMBRE DE JOUEURS EN TOPCUT -->	
					<?php for ($i=1; $i <= $nb_players; $i++): 
					 ?>
					 <section class="resume-section p-3 p-lg-5 d-flex flex-column">
					 	<h2>Joueur <?php echo $i ?></h2>
					<!-- REQUETE SQL PLAYERS -->					
 						<div class="form-group">
							<label for="prenom_tournament<?php echo $i ?>">Prénom :</label>
								<div class="input-group">
								<input type="text" class="form-control" name="prenom_tournament<?php echo $i ?>" id="date_tournament" placeholder="Ex: George"/>
							</div>
						</div>

						<div class="form-group">
							<label for="nom_tournament<?php echo $i ?>">Nom :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="nom_tournament<?php echo $i ?>" placeholder="Ex: Washington"/>
							</div>
						</div>
						<!-- REQUETE SQL DECK  -->
						<div class="form-group">
							<label for="deck_tournament<?php echo $i ?>">Nom du Deck : (pas d'espaces)</label>
								<div class="input-group">
									<input type="text" class="form-control" name="deck_tournament<?php echo $i ?>" placeholder="Ex: 115"/>
								</div>
						</div>
						
						<div class="form-group">
							<label for="leader_tournament<?php echo $i ?>">Leader :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="leader_tournament<?php echo $i ?>" list="leaders" />
									<datalist id="leaders">
									  <option value="BT1-083">GOLDEN FREEZER</option>
									  <option value="BT1-084">GALACTIC FREEZER</option>
									  <option value="BT2-035">TRUNKS</option>
									  <option value="BT2-070">C17/C18</option>
									  <option value="BT3-001">PAN</option>
									  <option value="BT4-024">HIRUDEGARN</option>
									  <option value="BT5-001">YAMCHA</option>
									  <option value="BT5-054">SUPER C17</option>
									  <option value="EX03-07">VEGETA U7</option>
									  <option value="P-070">BABY PROMO</option>
									  <option value="P-071">KRILLIN</option>
									  <option value="P-086">JANEMBA</option>
									  <option value="P-092">BROLY FILM</option>
									  <option value="SD7-001">SHENRON</option>
									  <option value="TB1-073">FREEZER U7</option>
									  <option value="TB2-001">HERCULE</option>
									  <option value="TB2-065">ANNOUNCER</option>
									  <option value="TB3-001">FREEZER ROUGE</option>

									</datalist>
								</div>
						</div>
						<!-- REQUETE SQL RESULT -->
						<div class="form-group">
							<label for="nb_cardgame<?php echo $i ?>">Numéro decklist Cardgame :</label>
								<div class="input-group">
									<input type="number" class="form-control" name="nb_cardgame<?php echo $i ?>" placeholder="Ex: 2255"/>
								</div>
						</div>

						<div class="form-group">
							<label for="classement_joueur<?php echo $i ?>">Classement Joueur :</label>
								<div class="input-group">
									<input type="number" class="form-control" name="classement_joueur<?php echo $i ?>" value="<?php echo $i ?>"/>
								</div>
						</div>
						</section>

						<?php endfor; ?>
				<button type="submit">SUBMIT</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->

<?php include('template/header.php') ?>
