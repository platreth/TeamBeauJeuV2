<div class="table-responsive">
 
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 
<thead>
 
<tr>
 
<th>ID</th>
 
<th>Name of Product</th>
 
<th>Price of Product</th>
 
<th>Product Catrogy</th>
 
<th>Product Details</th>
 
</tr>
 
</thead>
 
<tfoot>
 
<tr>
 
<th>ID</th>
 
<th>Name of Product</th>
 
<th>Price of Product</th>
 
<th>Product Catrogy</th>
 
<th>Product Details</th>
 
</tr>
 
</tfoot>
 
<?php
 
include('../server.php');
 
// Create connection
 
 
$sql = 'SELECT * from products';
 
if (mysqli_query($db, $sql)) {
 
echo "";
 
} else {
 
echo "Error: " . $sql . "<br>" . mysqli_error($db);
 
}
 
$count=1;
 
$result = mysqli_query($db, $sql);
 
if (mysqli_num_rows($result) > 0) {
 
// output data of each row
 
while($row = mysqli_fetch_assoc($result)) { ?>
 
<tbody>
 
<tr>
 
<th>
 
<?php echo $row['product_id']; ?>
 
</th>
 
<td>
 
<?php echo $row['product_name']; ?>
 
</td>
 
<td>
 
<?php echo $row['product_price']; ?>
 
</td>
 
<td>
 
<?php echo $row['product_cat']; ?>
 
</td>
 
<td>
 
<?php echo $row['product_details']; ?>
 
</td>
 
</tr>
 
</tbody>
 
<?php
 
$count++;
 
}
 
} else {
 
echo '0 results';
 
}
 
?>
 
</table>