<?php 
include("../../template/server.php");





$numero_jour = mysqli_real_escape_string($db, $_POST['numero_jour']);
$mois = mysqli_real_escape_string($db, $_POST['mois']);
$titre = mysqli_real_escape_string($db, $_POST['titre']);
$type = mysqli_real_escape_string($db, $_POST['type']);
$heure = mysqli_real_escape_string($db, $_POST['heure']);
$lieu = mysqli_real_escape_string($db, $_POST['lieu']);
$lien = mysqli_real_escape_string($db, $_POST['lien']);
$texte = mysqli_real_escape_string($db, $_POST['texte']);
$afficher = mysqli_real_escape_string($db, $_POST['afficher']);



$sql = "INSERT INTO evenement (numero_jour, mois, titre, type, heure, lieu, lien, texte, afficher) VALUES ('". $numero_jour ."','". $mois ."','". $titre ."','". $type ."','". $heure ."','". $lieu ."','". $lien ."','". $texte ."','" . $afficher . "')";


mysqli_query($db, $sql);

 header('Location: ../all_evenements.php');

