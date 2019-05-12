<?php
include ('functions.php');
?>

<?php include('template/header.php'); ?>
<?php include('template/navbar-page.php'); ?>
<?php
include('template/server.php'); 
$sql = "SELECT * from news WHERE id=" . $_GET['id'] ."";
$result = mysqli_query($db, $sql);
?>
  <?php while($row = mysqli_fetch_assoc($result)):  ?>
<div class="flex flex-wrap -m-3"> 
  <div class="w-full sm:w-1/2 md:w-1/3 flex flex-col p-3">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex-1 flex flex-col">
      <div class="p-4 flex-1 flex flex-col" style="">
        <h3 class="mb-4 text-2xl"><?php echo $row['titre'] ?></h3>
        <img class="rounded mx-auto d-block" style="width: 100%;" src="<?php echo $row['image'] ?>">
        <div class="mb-4 text-grey-darker text-sm flex-1">
          <p class='text-article' style="color: #343a40;"><?php echo $row['description'] ?></p>
        </div>
        <h3><a href="<?php echo $row['lien'] ?>" class="border-t border-grey-light pt-2 text-xs text-grey hover:text-red uppercase no-underline tracking-wide" style="
">Decklist sur Cardgame</a></h3>
    </div>  
  </div>
    
</div>
<?php endwhile; ?>

<?php include('template/footer.php'); ?>