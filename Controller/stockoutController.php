<?php
require_once '../Model/StockTransactionModel.php';
if (isset($_POST['stock_out'])) {

    $product_id = $_POST['product_id'];
    $warehouse_id = $_POST['warehouse_id'];
    $user_id = $_POST['user_id'];
    $quantity = $_POST['quantity'];

    $stockModel = new StockTransactionModel();

    $message = $stockModel->removeStock(
        $product_id,
        $warehouse_id,
        $user_id,
        $quantity
    );
    echo $message;
}
?>