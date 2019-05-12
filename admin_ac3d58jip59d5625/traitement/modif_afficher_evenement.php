<?php 
include("../../template/server.php");

if ($_GET['afficher'] == 'oui'):
$sql = 'UPDATE evenement SET afficher = "non" WHERE id = ' . $_GET['id'] .'';
elseif ($_GET['afficher'] == 'non'):
$sql = 'UPDATE evenement SET afficher = "oui" WHERE id = ' . $_GET['id'] .'';
endif;

mysqli_query($db, $sql);

 header('Location: ../all_evenements.php');


