<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();

if(!isset($_SESSION['user_id'])){

    header("location: ../../login.php");
}

include(__DIR__ . '/../../Config/database.php');

include(__DIR__ . '/../../Controller/SupplierController.php');

$controller = new SupplierController($conn);

$result = $controller->allSuppliers();

?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>

<div class="card">

<h2>All Suppliers</h2>

<table>

<tr>

<th>ID</th>
<th>Company Name</th>
<th>Contact Person</th>
<th>Phone</th>
<th>Email</th>

</tr>

<?php while($row = $result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['company_name']; ?></td>

<td><?php echo $row['contact_person']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['email']; ?></td>

</tr>

<?php } ?>

</table>

</div>

<?php include('footer.php'); ?>