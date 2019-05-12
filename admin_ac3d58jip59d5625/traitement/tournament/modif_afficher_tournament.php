<?php 
include("../../../template/server.php");

if ($_GET['afficher'] == 'oui'):
$sql = 'UPDATE tournaments SET afficher = "non" WHERE id = ' . $_GET['id'] .'';
elseif ($_GET['afficher'] == 'non'):
$sql = 'UPDATE tournaments SET afficher = "oui" WHERE id = ' . $_GET['id'] .'';
endif;

mysqli_query($db, $sql);

 header('Location: ../../all_tournament.php');


