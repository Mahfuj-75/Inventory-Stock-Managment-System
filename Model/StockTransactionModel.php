<?php

require_once __DIR__ . '/../config/database.php';
class StockTransactionModel {
    public function addStock($product_id, $warehouse_id, $user_id, $quantity, $unit_price) {
        global $conn;
//stocke er transiction  add korar jonno table
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

//  stock a product update korar jonno table
        $updateSql = "UPDATE products 
                    SET current_stock = current_stock + ?
                    WHERE id = ?";

        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("ii", $quantity, $product_id);

        return $updateStmt->execute();
    }
}

?>