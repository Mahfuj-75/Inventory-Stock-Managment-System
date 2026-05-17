<?php

require_once __DIR__ . '/../config/database.php';

class ProductModel {

    public function searchProducts($search) {

        global $conn;

        $sql = "SELECT * FROM products WHERE name LIKE ?";

        $stmt = $conn->prepare($sql);

        $searchTerm = "%" . $search . "%";

        $stmt->bind_param("s", $searchTerm);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result;
    }
}

?>