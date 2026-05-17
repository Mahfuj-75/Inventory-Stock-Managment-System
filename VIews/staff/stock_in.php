<?php

require_once '../../middleware/auth.php';
require_once '../../middleware/role_check.php';

?>

<!DOCTYPE html>
<html>

<head>

    <title>Stock In</title>

    <link rel="stylesheet" href="../../assets/css/style.css">

</head>

<body>
    <a href="dashboard.php" class="back-btn">
    ← Back
</a>

<h2>Stock In</h2>

<?php if(isset($_GET['success'])) { ?>

<div class="success">

    Stock Added Successfully

</div>

<?php } ?>

<?php if(isset($_GET['error'])) { ?>

<div class="error">

    Failed To Add Stock

</div>

<?php } ?>

<form action="../../Controller/StockInController.php" method="POST">

    <label>Product ID:</label><br>
    <input type="number" name="product_id" required><br><br>

    <label>Warehouse ID:</label><br>
    <input type="number" name="warehouse_id" required><br><br>

    <label>User ID:</label><br>
    <input type="number" name="user_id" required><br><br>

    <label>Quantity:</label><br>
    <input type="number" name="quantity" required><br><br>

    <label>Unit Price:</label><br>
    <input type="number" step="0.01" name="unit_price"><br><br>

    <button type="submit" name="stock_in">Add Stock</button>

</form>
<script>

setTimeout(() => {

    const successBox = document.querySelector(".success");

    if(successBox) {

        successBox.style.display = "none";

    }

    const errorBox = document.querySelector(".error");

    if(errorBox) {

        errorBox.style.display = "none";

    }

}, 2000);

</script>
</body>
</html>