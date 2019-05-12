<?php include('template/header.php') ?>
<?php include('template/navbar.php') ?>
<?php include('template/sidebar.php') ?>
<?php include('template/breadcrumb.php');
include ('../functions.php');
$name = $_GET["name_tournament"];
$id = $_GET["id"];

if ($name == "null"):


              $tournoi = mysqli_fetch_assoc(getTournamentById($id));
              $format=('y-m-d'); ?>
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
                  $bite = getTournamentIdById($id);
                  while($result = mysqli_fetch_assoc($bite)):
                    echo '<tr>
                    <th scope="row">'.$result["classement"].'</th>
                    <td>'.$result["firstname"].' '.$result["lastname"].'</td>
                    <td>'.$result["team"].'</td>';
                    if($result["decklist_cardgame"]==0):
                     echo '<td>'.$result["deck"].'</td>';
                   else:
                     echo '<td><a href="https://www.cardgame.fr/decks/details/'.$result["decklist_cardgame"].'">'.$result["deck"].'</a></td>';
                   endif;
                   echo '<td class="mini-leader"><img style="width: 40%;" src="../img/cards/leaders_preview/'.$result["leader"].'.png" /></td>
                   </tr>';
                 endwhile;
                 ?>
               </tbody>
             </table>
         </div>    
          <?php  
elseif ($id == "null"):
	
 
              $tournoi = mysqli_fetch_assoc(getTournamentByName($name));
              $format=('y-m-d'); ?>
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
                  $test = getTournamentIdByName($name);
                  while($result = mysqli_fetch_assoc($test)):
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
        <?php endif; ?>

<?php include('template/header.php') ?>
