<?php

session_start();

if(!isset($_SESSION['user_id']))
{
    header("location: ../../login.php");
}

include('../../Config/database.php');


// Total Products

$total = $conn->query("SELECT * FROM products");

$totalProducts = $total->num_rows;


// Low Stock Products

$low = $conn->query("SELECT * FROM products
                     WHERE current_stock <= reorder_level");

$lowStock = $low->num_rows;


// Total Suppliers

$supplier = $conn->query("SELECT * FROM suppliers");

$suppliers = $supplier->num_rows;


// Purchase Orders

$purchase = $conn->query("SELECT * FROM purchase_orders");

$po = $purchase->num_rows;

?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>


<h2>Purchasing Dashboard</h2>


<div class="dashboard-box">

    <div class="box">

        <h3>Total Products</h3>

        <p><?php echo $totalProducts; ?></p>

    </div>


    <div class="box">

        <h3>Low Stock</h3>

        <p><?php echo $lowStock; ?></p>

    </div>


    <div class="box">

        <h3>Total Suppliers</h3>

        <p><?php echo $suppliers; ?></p>

    </div>


    <div class="box">

        <h3>Purchase Orders</h3>

        <p><?php echo $po; ?></p>

    </div>

</div>


<?php include('footer.php'); ?>