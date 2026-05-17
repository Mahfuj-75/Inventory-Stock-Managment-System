<?php

session_start();

if(!isset($_SESSION['user_id']))
{

    header("location: ../../login.php");
}
include('../../Config/database.php');

include('../../Controller/PurchaseOrderController.php');

$controller = new PurchaseOrderController($conn);

$id = $_GET['id'];

$message = "";

if(isset($_POST['update'])){

    $date = $_POST['date'];

    $result = $controller->updatePO($id,$date);

    if($result){

        $message = "PO Updated";
    }
}

?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>

<div class="card">

<h2>Edit Purchase Order</h2>

<form method="POST">

Delivery Date:

<input type="date" name="date" required>

<button type="submit" name="update">

Update

</button>

</form>

<?php echo $message; ?>

</div>

<?php include('footer.php'); ?>