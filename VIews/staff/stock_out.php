<?php

require_once '../../middleware/auth.php';
require_once '../../middleware/role_check.php';

?>

<!DOCTYPE html>
<html>

<head>

    <title>Stock Out</title>

    <link rel="stylesheet" href="../../assets/css/style.css">

</head>

<body>

<a href="dashboard.php" class="back-btn">
    ← Back
</a>

<h2>Stock Out</h2>

<?php if(isset($_GET['success'])) { ?>

<div class="success">

    Stock Out Successful

</div>

<?php } ?>

<?php if(isset($_GET['error'])) { ?>

<div class="error">

    Failed To Stock Out

</div>

<?php } ?>

<form action="../../Controller/StockOutController.php" method="POST">

    <label>Product ID:</label><br>
    <input type="number" name="product_id" required><br><br>

    <label>Warehouse ID:</label><br>
    <input type="number" name="warehouse_id" required><br><br>

    <label>User ID:</label><br>
    <input type="number" name="user_id" required><br><br>

    <label>Quantity:</label><br>
    <input type="number" name="quantity" required><br><br>

    <button type="submit" name="stock_out">Stock Out</button>

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