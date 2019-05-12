<?php 
include('template/server.php'); 
$sql = 'SELECT * from news order by date DESC';
$result = mysqli_query($db, $sql);

?>

<section class="resume-section p-3 p-lg-5 d-flex" id="news">
  <?php while($row = mysqli_fetch_assoc($result)):  
    $desc = substr($row['description'], 0, 60);?>
<div class="card" style="width: 18rem; height: 100%; border-color: #f08218; border-width: 5px;">
  <img class="card-img-top" src="<?php echo $row['image'] ?>">
  <div class="card-body">
    <h4 class="card-title" style="color: #f08218;"><?php echo $row['titre'] ?></h4>
    <p class="card-text"><?php echo $desc ?>...</p>
    <a href="/news?id=<?php echo $row['id'] ?>" class="btn btn-primary" style="background-color: #f08218; border-color: #f08218;">Voir la news</a>
  </div>
</div>
<div style="margin-left: 30px;"></div>
<?php endwhile; ?>
</section>