<?php 
include("../../../template/server.php");

$id = $_POST['id'];


$date = mysqli_real_escape_string($db, $_POST['date_tournament']);
$nom = mysqli_real_escape_string($db, $_POST['name_tournament']);
$nb_joueurs = mysqli_real_escape_string($db, $_POST['nb_players_tournament']);
$topcut = mysqli_real_escape_string($db, $_POST['topcut_tournament']);
$round = mysqli_real_escape_string($db, $_POST['nb_rounds_tournament']);
$type = mysqli_real_escape_string($db, $_POST['type_tournament']);
$meta = mysqli_real_escape_string($db, $_POST['meta_tournament']);
$afficher = mysqli_real_escape_string($db, $_POST['afficher']);



$sql = "UPDATE tournaments SET date ='". $date ."', name ='". $nom ."', nb_players ='". $nb_joueurs ."', topcut ='". $topcut ."', nb_rounds ='".$round."', type ='". $type ."', meta ='". $meta ."' WHERE id ='". $id ."'";

mysqli_query($db, $sql);

header('Location: ../../all_tournament.php');