<?php

include ('functions.php');
$p=0;

?>

<?php include('template/header.php'); ?>
<?php include('template/navbar-page.php'); ?>

<div class="container-fluid p-0">
  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="tournaments">
    <div class="my-auto">
      <h2 class="mb-5">Tous les tournois et résultats</h2>
      <div class="accordion" id="accordionExample">
        <div class="resume-item">
          <div class="resume-content mr-auto">
            <?php foreach (displayAllTournament() as $tournaments): 
              $p++;
              $tournoi = mysqli_fetch_assoc(getTournamentInformation($p));
              $format=('y-m-d'); 
              $meta = $tournoi['meta']; ?>
              <?php if ($tournoi['afficher'] == 'oui'): ?>
              <div id="heading-<?php echo $p; ?>">
                <h5 class="mb-0">
                  <h3 data-toggle="collapse" data-status='<?php echo $meta; ?>' data-target="#collapse-<?php echo $p; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $p; ?>">
                    <i class="fas fa-angle-double-right"></i> <?php echo $tournoi['name']; ?> | Meta <?php echo $tournoi['meta']; ?>
                  </h3>
                </h5>
              </div>
              <div id="collapse-<?php echo $p; ?>" class="collapse" aria-labelledby="heading-<?php echo $p; ?>" data-parent="#accordionExample">
                <div class="subheading mb-6"><?php echo $tournoi['nb_players']; ?> joueurs · <?php echo utf8_encode(strftime("%A %d %B %G", strtotime($tournoi['date']))); ?></div><br/>

                <div class="row text-md-center">
                  <table class="table">
                   <thead class="thead-dark">
                    <tr>
                     <th scope="col">#</th>
                     <th scope="col">Joueur</th>
                     <th scope="col">Équipe</th>
                     <th scope="col">Decklist</th>
                     <th scope="col">Leader</th>
                   </tr>
                 </thead>
                 <tbody>
                  <?php
                  while($result = mysqli_fetch_assoc($tournaments)):
                    echo '<tr>
                    <th scope="row">'.$result["classement"].'</th>
                    <td>'.$result["firstname"].' '.$result["lastname"].'</td>
                    <td>'.$result["team"].'</td>';
                    if($result["decklist_cardgame"]==0):
                     echo '<td>'.$result["deck"].'</td>';
                   else:
                     echo '<td><a href="https://www.cardgame.fr/decks/details/'.$result["decklist_cardgame"].'">'.$result["deck"].'</a></td>';
                   endif;
                   echo '<td class="mini-leader"><img src="img/cards/leaders_preview/'.$result["leader"].'.png" /></td>
                   </tr>';
                 endwhile;
                 ?>
               </tbody>
             </table>
           </div>
         </div>    
          <?php endif;
        endforeach; ?>
       </div>
   </div>
 </div>
</div>
</section>
</div>

<?php include('template/footer.php'); ?>





