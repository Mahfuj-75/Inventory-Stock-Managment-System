<?php

require_once __DIR__ . '/../config/database.php';
class StockTransactionModel {
    public function addStock($product_id, $warehouse_id, $user_id, $quantity, $unit_price) {
        global $conn;
// insert stock transaction
        $sql = "INSERT INTO stock_transactions 
        (product_id, warehouse_id, user_id, type, quantity, unit_price)
        VALUES (?, ?, ?, 'in', ?, ?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param(
            "iiiid",
            $product_id,
            $warehouse_id,
            $user_id,
            $quantity,
            $unit_price
        );

        $stmt->execute();
        // update product stock
        $updateSql = "UPDATE products 
                    SET current_stock = current_stock + ?
                    WHERE id = ?";

        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("ii", $quantity, $product_id);
        return $updateStmt->execute();
    }

    public function removeStock($product_id, $warehouse_id, $user_id, $quantity) {

        global $conn;

//present stock check kore
        $checkSql = "SELECT current_stock FROM products WHERE id = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("i", $product_id);
        $checkStmt->execute();
        $result = $checkStmt->get_result();
        $product = $result->fetch_assoc();
        if (!$product) {
                    return "Product Not Found";
                    }

        if ($product['current_stock'] < $quantity) {
            return "Insufficient Stock";
        }
//stock ou er transition insert
        $sql = "INSERT INTO stock_transactions
        (product_id, warehouse_id, user_id, type, quantity)
        VALUES (?, ?, ?, 'out', ?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param(
            "iiii",
            $product_id,
            $warehouse_id,
            $user_id,
            $quantity
        );
        $stmt->execute();

        $updateSql = "UPDATE products
                    SET current_stock = current_stock - ?
                    WHERE id = ?";

        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("ii", $quantity, $product_id);
        $updateStmt->execute();
        return "Stock Out Successful";
    }
}
?>