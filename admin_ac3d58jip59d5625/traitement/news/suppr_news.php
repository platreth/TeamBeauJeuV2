<?php 
include("../../../template/server.php");


$sql = 'DELETE from news WHERE id = ' . $_GET['id'] .'';

mysqli_query($db, $sql);

 header('Location: ../../all_news.php');
