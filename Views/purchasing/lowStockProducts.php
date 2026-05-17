<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();

if(!isset($_SESSION['user_id']))
{

    header("location: ../../login.php");
}

include('../../Config/database.php');

include('../../Controllers/ProductController.php');

$controller = new ProductController($conn);

$result = $controller->lowStockProducts();




?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>

<div class="card">

<h2>Low Stock Products</h2>


<table>

<tr>

<th>Name</th>
<th>SKU</th>
<th>Current Stock</th>
<th>Reorder Level</th>

</tr>

<?php while($row = $result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['sku']; ?></td>

<td><?php echo $row['current_stock']; ?></td>

<td><?php echo $row['reorder_level']; ?></td>

</tr>

<?php } ?>

</table>

</div>

<?php include('footer.php'); 


?>