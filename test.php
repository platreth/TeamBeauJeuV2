<?php

$serveur = "91.216.107.162";
$base = "comme980316_2fvya3";
$user = "comme980316_2fvya3";
$pass = "ysnk34wz2s";

// $bdd = new mysqli($serveur, $user, $pass, $base);
// $bdd->set_charset('utf8');
// #$bdd = mysqli_connect($serveur, $user, $pass, $base);
//
// $cdf2018 = mysqli_query($bdd, 'select r.classement, p.firstname, p.lastname, d.name deck, d.leader, t.name team, r.decklist_cardgame
// from results r
// left join players p on r.id_player = p.id
// left join decks d on r.id_deck = d.id
// left join teams t on t.id = p.id_team
// where id_tournament = 1;');

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Team Beau Jeu · Dragon Ball Super Card Game</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Team Beau Jeu</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid mx-auto mb-2" src="img/logo_teambeaujeu.png" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#teammates">L'équipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#tournaments">Tournois</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#sponsors">Sponsors</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li> -->
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Team
            <span class="text-primary">Beau Jeu</span>
          </h1>
          <div class="subheading mb-5">Équipe compétitive de Dragon Ball Super Card Game ·
            <a href="mailto:contact@teambeaujeu.com">contact@teambeaujeu.com</a>
          </div>
          <p class="lead mb-5">Joueurs de la première heure, passionnés par la licence Dragon Ball et par les TCG en général, la <strong>Team</strong> <strong class="text-primary">Beau Jeu</strong> est le résultat logique d'un amour profond de la compétition, et de <strong>Dragon ball Super </strong> <strong class="text-primary">Card Game</strong>. </p>
          <div class="social-icons">
            <a href="https://twitter.com/TeamBeauJeu">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.facebook.com/TEAMBEAUJEU/">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.twitch.tv/aubeaujeu">
              <i class="fab fa-twitch"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCWaFLyLkfo780IQw8M2Vg4w">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </section>

      <hr class="m-0">
<div class="chart-container" style="position: relative; height:40vh; width:80vw">
<canvas id="graphique_test"></canvas>
</div>


      <!-- <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="contact">
        <div class="my-auto">
          <h2 class="mb-5">Nous contacter</h2>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fab fa-facebook-square" style="font-size: 25px;"></i>
              Page Facebook de l'équipe
            </li>
            <li>
              <i class="fab fa-twitter-square" style="font-size: 25px;"></i>
              Compte Twitter
            </li>
            <li>
              <i class="fab fa-facebook-square" style="font-size: 25px;"></i>
              Page Facebook de l'équipe
            </li>
            <li>
              <i class="fab fa-facebook-square" style="font-size: 25px;"></i>
              Page Facebook de l'équipe
            </li>
          </ul>
        </div>
      </section> -->

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

    <!-- Chart js  -->
    <script src="js/graphique/graphique.js"></script>


    <script>
      (function() {

        $('.resume-image').click(function() {
          $(".resume-details").hide();
          $(".resume-image").removeClass('resume-image-open');
          $(".resume-name").removeClass('resume-name-open');
          $(this).addClass('resume-image-open');
          $("#"+$(this).attr('title')).addClass('resume-name-open');
          $("#resume-"+$(this).attr('title')).fadeToggle();
        })

        $('.resume-name').click(function() {
          $(".resume-details").hide();
          $(".resume-image").removeClass('resume-image-open');
          $(".resume-name").removeClass('resume-name-open');
          $(this).addClass('resume-name-open');
          $("#"+$(this).attr('id')+"-image").addClass('resume-image-open');
          $("#resume-"+$(this).attr('id')).fadeToggle();
        })

        new Chart(document.getElementById("charts"), {
            "type": "doughnut",
            "data": {
                "labels": ["Red", "Blue", "Yellow"],
                "datasets": [{
                    "label": "My First Dataset",
                    "data": [300, 50, 100],
                    "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                }]
            }
        });

      })();
    </script>

  </body>

</html>
