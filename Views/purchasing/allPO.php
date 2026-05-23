<?php

session_start();

if(!isset($_SESSION['user_id']))
{

    header("location: ../../login.php");
}

include(__DIR__ . '/../../Config/database.php');

include(__DIR__ . '/../../Controller/PurchaseOrderController.php');

$controller = new PurchaseOrderController($conn);

$result = $controller->allPO();

?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>

<div class="card">

<h2>All Purchase Orders</h2>

<table>

<tr>

<th>ID</th>
<th>Supplier ID</th>
<th>Status</th>
<th>Delivery Date</th>

</tr>

<?php while($row = $result->fetch_assoc())
{ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['supplier_id']; ?></td>

<td><?php echo $row['status']; ?></td>

<td><?php echo $row['expected_delivery_date']; ?></td>

</tr>

<?php } ?>

</table>

</div>

<?php include('footer.php'); ?>