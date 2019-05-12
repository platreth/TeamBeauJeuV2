<?php 
include("../../../template/server.php");





$date = mysqli_real_escape_string($db, $_POST['date_tournament']);
$nom = mysqli_real_escape_string($db, $_POST['name_tournament']);
$nb_joueurs = mysqli_real_escape_string($db, $_POST['nb_players_tournament']);
$topcut = mysqli_real_escape_string($db, $_POST['topcut_tournament']);
$round = mysqli_real_escape_string($db, $_POST['nb_rounds_tournament']);
$type = mysqli_real_escape_string($db, $_POST['type_tournament']);
$meta = mysqli_real_escape_string($db, $_POST['meta_tournament']);
$afficher = mysqli_real_escape_string($db, $_POST['afficher']);



$sql = "INSERT INTO tournaments (date, name, nb_players, topcut, nb_rounds, type, meta, afficher) VALUES ('". $date ."','". $nom ."','". $nb_joueurs ."','". $topcut ."','". $round ."','". $type ."','". $meta ."','". $afficher ."')";

mysqli_query($db, $sql);

 header('Location: ../../add_tournament_players.php?topcut='.$topcut.'&name='.$nom.'');

