<?php 
include("../../../template/server.php");
$nb_players = $_POST["nb_players"];
$name_tournament = $_POST["name_tournament"];

for ($i=1; $i <= $nb_players; $i++):

//RECUP INFOS FORMULAIRE

$prenom = mysqli_real_escape_string($db, $_POST['prenom_tournament'.$i.'']);
$nom = mysqli_real_escape_string($db, $_POST['nom_tournament'.$i.'']);
$deck_name = mysqli_real_escape_string($db, $_POST['deck_tournament'.$i.'']);
$leader = mysqli_real_escape_string($db, $_POST['leader_tournament'.$i.'']);
$nb_cardgame = mysqli_real_escape_string($db, $_POST['nb_cardgame'.$i.'']);
$classement = mysqli_real_escape_string($db, $_POST['classement_joueur'.$i.'']);

$sql_players = "INSERT INTO players (firstname, lastname) VALUES ('". $prenom ."','". $nom ."')";
mysqli_query($db, $sql_players);


$sql_deck = "INSERT INTO decks (name, leader) VALUES ('". $deck_name ."','". $leader ."')";
mysqli_query($db, $sql_deck);

$sql_result = 'INSERT INTO results (id_player, id_tournament, id_deck, decklist_cardgame, classement) VALUES ((SELECT id FROM players WHERE lastname = "'.$nom.'" and firstname = "'.$prenom.'"),(SELECT id FROM tournaments WHERE name = "'.$name_tournament.'"),(SELECT id FROM decks WHERE name = "'.$deck_name.'" AND leader = "'.$leader.'"),"'.$nb_cardgame.'","'.$classement.'")';
mysqli_query($db, $sql_result);

var_dump($sql_result);

endfor;
die();
 header('Location: ../../voir_tournament.php?name_tournament='.$name_tournament.'&id=null');
