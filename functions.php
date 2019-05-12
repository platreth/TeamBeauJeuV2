<?php
function getTournamentBDD($id) {

include('template/server.php');

$bdd = new mysqli($serveur, $user, $pass, $base);
$bdd->set_charset('utf8');

  return mysqli_query($bdd, 'select r.classement, p.firstname, p.lastname, d.name deck, d.leader, t.name team, r.decklist_cardgame
from results r
left join players p on r.id_player = p.id
left join decks d on r.id_deck = d.id
left join teams t on t.id = p.id_team
where id_tournament ='. $id .' order by r.classement;');
}

function getAllTournamentID() {

include('template/server.php');

$bdd = new mysqli($serveur, $user, $pass, $base);
$bdd->set_charset('utf8');

$request =  mysqli_query($bdd,'select id from tournaments');

foreach ($request as $key) {
	$ids[] = $key;
}
return $ids;
 
}

function displayAllTournament() {
	$i=0;
	$id = getAllTournamentID();
	foreach ($id as $item):
		foreach ($item as $items):
		$i++;
		$tournament['Tournoi-'.  $i] = getTournamentBDD($items);
		endforeach;
	endforeach;
	return $tournament;

}

function getTournamentInformation($id) {

include('template/server.php');

$bdd = new mysqli($serveur, $user, $pass, $base);
$bdd->set_charset('utf8');

$requ =  mysqli_query($bdd,'select * from tournaments where id ='.$id.'');
return $requ;

}


function getTournamentByName($name) {
	include('template/server.php');
$bdd = new mysqli($serveur, $user, $pass, $base);
$bdd->set_charset('utf8');
$requ =  mysqli_query($bdd,"select * from tournaments where name ='".$name."'");
return $requ;

}

function getTournamentIdByName($name) {

include('template/server.php');

$bdd = new mysqli($serveur, $user, $pass, $base);
$bdd->set_charset('utf8');

$requ2 = "SELECT id from tournaments where  name ='".$name."'";
$result = mysqli_fetch_assoc(mysqli_query($db, $requ2));
$id = $result['id'];
$tournament = getTournamentBDD($id);

return $tournament;
}

function getTournamentById($id) {
	include('template/server.php');
$bdd = new mysqli($serveur, $user, $pass, $base);
$bdd->set_charset('utf8');
$requ =  mysqli_query($bdd,"select * from tournaments where id =".$id."");
return $requ;

}

function getTournamentIdById($id) {

include('template/server.php');

$bdd = new mysqli($serveur, $user, $pass, $base);
$bdd->set_charset('utf8');
$tournament = getTournamentBDD($id);

return $tournament;
}


function getTournamentByMeta($meta) {

include('template/server.php');

$bdd = new mysqli($serveur, $user, $pass, $base);
$bdd->set_charset('utf8');

$requ2 = "SELECT * from tournaments where  meta ='".$meta."'";
$result = mysqli_fetch_assoc(mysqli_query($db, $requ2));
var_dump($result);

return $result;

}


