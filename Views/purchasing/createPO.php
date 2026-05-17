<?php

session_start();

if(!isset($_SESSION['user_id'])){

    header("location: ../../login.php");
}

include('../../Config/database.php');

include('../../Controller/PurchaseOrderController.php');

$controller = new PurchaseOrderController($conn);

$message = "";

if(isset($_POST['create'])){

    $supplier = $_POST['supplier'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];

    $raised_by = $_SESSION['user_id'];

    $result = $controller->createPO(
        $supplier,
        $raised_by,
        $date,
        $notes
    );

    if($result){

        $message = "Purchase Order Created";
    }
}

?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>

<div class="card">

<h2>Create Purchase Order</h2>

<form method="POST">

Supplier ID:

<input type="number" name="supplier" required>

Expected Delivery Date:

<input type="date" name="date" required>

Notes:

<textarea name="notes"></textarea>

<button type="submit" name="create">

Create PO

</button>

</form>

<?php echo $message; ?>

</div>

<?php include('footer.php'); ?>