<?php 
include("../../template/server.php");


$sql = 'DELETE from evenement WHERE id = ' . $_GET['id'] .'';

mysqli_query($db, $sql);

 header('Location: ../all_evenements.php');
