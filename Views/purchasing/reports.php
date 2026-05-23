<?php

session_start();

if(!isset($_SESSION['user_id']))
{

    header("location: ../../login.php");
}

include('../../Config/database.php');
$sql = "SELECT * FROM purchase_orders";

$result = $conn->query($sql);

?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>

<div class="card">

<h2>Purchase Order Report</h2>

<table>

<tr>

<th>PO ID</th>
<th>Supplier ID</th>
<th>Total Value</th>
<th>Status</th>
<th>Created Date</th>

</tr>

<?php while($row = $result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['supplier_id']; ?></td>

<td><?php echo $row['total_estimated_value']; ?></td>

<td><?php echo $row['status']; ?></td>

<td><?php echo $row['created_at']; ?></td>

</tr>

<?php } ?>

</table>

</div>

<?php include('footer.php'); ?>