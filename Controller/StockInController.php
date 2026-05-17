<?php

require_once '../Model/StockTransactionModel.php';

if (isset($_POST['stock_in'])) {

    $product_id = $_POST['product_id'];

    $warehouse_id = $_POST['warehouse_id'];

    $user_id = $_POST['user_id'];

    $quantity = $_POST['quantity'];

    $unit_price = $_POST['unit_price'];

    $stockModel = new StockTransactionModel();

    $result = $stockModel->addStock(
        $product_id,
        $warehouse_id,
        $user_id,
        $quantity,
        $unit_price
    );

    if ($result) {

        header("Location: ../Views/staff/stock_in.php?success=1");
        exit();

    } else {

        header("Location: ../Views/staff/stock_in.php?error=1");
        exit();

    }
}
?>