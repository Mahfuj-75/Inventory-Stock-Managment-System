<?php

session_start();

if(!isset($_SESSION['user_id'])){

    header("location: ../../login.php");
}

include('../../Config/database.php');
include('header.php');
include('navbar.php');

$low = $conn->query("SELECT * FROM products WHERE current_stock <= reorder_level");

$po = $conn->query("SELECT * FROM purchase_orders");

echo "<h3>Dashboard</h3>";

echo "Low Stock Products : ".$low->num_rows."<br><br>";

echo "Total Purchase Orders : ".$po->num_rows;
?>

<?php include('footer.php'); ?>