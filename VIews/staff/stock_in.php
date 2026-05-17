<!DOCTYPE html>
<html>
<head>
    <title>Stock In</title>
</head>
<body>

<h2>Stock In</h2>

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

</body>
</html>