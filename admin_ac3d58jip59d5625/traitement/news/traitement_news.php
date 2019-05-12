<?php 
include("../../../template/server.php");

$uploaddir = '../../../img/news/';
$uploadfile = $uploaddir . basename($_FILES['image_news']['name']);
var_dump($uploadfile);

echo '<pre>';
if (move_uploaded_file($_FILES['image_news']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);

echo '</pre>';



$date = mysqli_real_escape_string($db, $_POST['date_news']);
$titre = mysqli_real_escape_string($db, $_POST['titre_news']);
$description = mysqli_real_escape_string($db, $_POST['description_news']);
$imag = mysqli_real_escape_string($db, $uploadfile);
$image = str_replace('../../..', '', $imag);
$lien = mysqli_real_escape_string($db, $_POST['lien_news']);



$sql = "INSERT INTO news (date, titre, description, image, lien) VALUES ('". $date ."','". $titre ."','". $description ."','". $image ."','". $lien ."')";



mysqli_query($db, $sql);



 header('Location: ../../all_news.php');

