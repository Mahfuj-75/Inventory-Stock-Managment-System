<?php

session_start();

if(!isset($_SESSION['user_id']))
{

    header("location: ../../login.php");
}

include('../../Config/database.php');

$sql1 = "SELECT SUM(total_estimated_value)
         AS total_spend
         FROM purchase_orders";

$result1 = $conn->query($sql1);

$row1 = $result1->fetch_assoc();

$totalSpend = $row1['total_spend'];


$sql2 = "SELECT * FROM purchase_orders";

$result2 = $conn->query($sql2);

$totalPO = $result2->num_rows;


$sql3 = "SELECT * FROM purchase_orders
         WHERE status='approved'";

$result3 = $conn->query($sql3);

$approved = $result3->num_rows;


$sql4 = "SELECT * FROM purchase_orders
         WHERE status='received'";

$result4 = $conn->query($sql4);

$received = $result4->num_rows;


$sql5 = "SELECT * FROM purchase_orders
         WHERE status='cancelled'";

$result5 = $conn->query($sql5);

$cancelled = $result5->num_rows;

?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>

<style>

.analytics-box{

    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.box{

    background:white;
    width:220px;
    padding:20px;
    border-radius:5px;
    box-shadow:0px 0px 5px lightgray;
}

.box h3{

    margin:0;
    margin-bottom:10px;
}

.box p{

    font-size:25px;
    font-weight:bold;
}

</style>

<h2>Analytics Dashboard</h2>

<div class="analytics-box">

<div class="box">

<h3>Total Spend</h3>

<p><?php echo $totalSpend; ?></p>

</div>


<div class="box">

<h3>Total Orders</h3>

<p><?php echo $totalPO; ?></p>

</div>


<div class="box">

<h3>Approved</h3>

<p><?php echo $approved; ?></p>

</div>


<div class="box">

<h3>Received</h3>

<p><?php echo $received; ?></p>

</div>


<div class="box">

<h3>Cancelled</h3>

<p><?php echo $cancelled; ?></p>

</div>

</div>

<?php include('footer.php'); ?>