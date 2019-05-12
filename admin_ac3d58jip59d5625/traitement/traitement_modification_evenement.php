<?php 
include("../../template/server.php");





$numero_jour = mysqli_real_escape_string($db, $_POST['numero_jour']);
$mois = mysqli_real_escape_string($db, $_POST['mois']);
$titre = mysqli_real_escape_string($db, $_POST['titre']);
$heure = mysqli_real_escape_string($db, $_POST['heure']);
$type = mysqli_real_escape_string($db, $_POST['type']);
$lieu = mysqli_real_escape_string($db, $_POST['lieu']);
$lien = mysqli_real_escape_string($db, $_POST['lien']);
$texte = mysqli_real_escape_string($db, $_POST['texte']);



$sql = "UPDATE evenement SET numero_jour ='". $numero_jour ."', mois ='". $mois ."', titre ='". $titre ."', heure ='". $heure ."', type ='".$type."', lieu ='". $lieu ."', lien ='". $lien ."', texte ='". $texte ."' WHERE id=".$_POST['id']."  ";


mysqli_query($db, $sql);

 header('Location: ../all_evenements.php');

