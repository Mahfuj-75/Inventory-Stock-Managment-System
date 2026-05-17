<?php

require_once '../../middleware/auth.php';
require_once '../../middleware/role_check.php';

?>
<!DOCTYPE html>
<html>

<head>

    <title>Warehouse Staff Dashboard</title>

    <link rel="stylesheet" href="../../assets/css/style.css">

</head>

<body>

<h1>Warehouse Staff Dashboard</h1>
<a href="../../logout.php" class="logout-btn">
    Logout
</a>
<div class="container">

    <div class="card">

        <h2>Stock In</h2>

        <a href="stock_in.php">Open</a>

    </div>

    <div class="card">

        <h2>Stock Out</h2>

        <a href="stock_out.php">Open</a>

    </div>

    <div class="card">

        <h2>Product Search</h2>

        <a href="product_search.php">Open</a>

    </div>

    <div class="card">

        <h2>Transaction History</h2>

        <a href="transaction_history.php">Open</a>

    </div>

</div>

</body>
</html>