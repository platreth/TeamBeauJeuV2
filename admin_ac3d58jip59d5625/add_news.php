<?php include('template/header.php') ?>
<?php include('template/navbar.php') ?>
<?php include('template/sidebar.php') ?>
<?php include('template/breadcrumb.php') ?>


          <!-- Page Content -->
          <h1>Ajout de News</h1>
          <hr>
          	<div class="container">
			<div class="main">
				<div class="main-center">
					<form class="" method="post" action="traitement/news/traitement_news.php" enctype="multipart/form-data">
						<div class="form-group">
							<label for="date_news">Date :</label>
								<div class="input-group">
								<input type="date" class="form-control" name="date_news" id="date_news"/>
							</div>
						</div>

						<div class="form-group">
							<label for="titre_news">Titre :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="titre_news" placeholder="Ex: DOTW #15"/>
							</div>
						</div>

						<div class="form-group">
							<label for="description_news">Description :</label>
								<div class="input-group">
									<textarea class="form-control" name="description_news" placeholder="Ex: Je suis une description, bonjour"/></textarea>
								</div>
						</div>
						
						<div class="form-group">
							<label for="image_news">Image :</label>
								<div class="input-group">
									<input type="file" class="form-control" name="image_news"/>
								</div>
						</div>
						
						<div class="form-group">
							<label for="nb_rounds_news">Lien (En entier) :</label>
								<div class="input-group">
									<input type="text" class="form-control" name="lien_news" placeholder="Ex: https://www.cardgame.fr/dbs/decks/details/5166"/>
								</div>
						</div>

				<button type="submit">SUBMIT</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->

<?php include('template/header.php') ?>


<script type="text/javascript">
	document.getElementById('date_news').valueAsDate = new Date();

</script>
