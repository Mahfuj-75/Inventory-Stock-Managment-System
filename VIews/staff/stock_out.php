<!DOCTYPE html>
<html>
<head>
    <title>Stock Out</title>
</head>
<body>

<h2>Stock Out</h2>
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

</body>
</html>