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

    if ($message == "Stock Out Successful") {

        header("Location: ../Views/staff/stock_out.php?success=1");
        exit();

    } else {

        header("Location: ../Views/staff/stock_out.php?error=1");
        exit();

    }

}
?>