<?php 
include("../../../template/server.php");

$id = $_POST['id'];


$date = mysqli_real_escape_string($db, $_POST['date_news']);
$titre = mysqli_real_escape_string($db, $_POST['titre_news']);
$description = mysqli_real_escape_string($db, $_POST['description_news']);
$lien = mysqli_real_escape_string($db, $_POST['lien_news']);


$sql = "UPDATE news SET date ='". $date ."', titre ='". $titre ."', description ='". $description ."', lien ='". $lien ."' WHERE id ='". $id ."'";

mysqli_query($db, $sql);

header('Location: ../../all_news.php');