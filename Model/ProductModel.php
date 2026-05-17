<?php

require_once(__DIR__ . '/../Config/database.php');

class ProductModel
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Get All Products
    public function getAllProducts()
    {
        $query = "SELECT * FROM products ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result;
    }

    // Get Low Stock Products
    public function getLowStockProducts()
    {
        $query = "SELECT * 
                  FROM products 
                  WHERE current_stock <= reorder_level";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result;
    }

    // Search Product by Name
    public function searchProduct($keyword)
    {
        $query = "SELECT * 
                  FROM products 
                  WHERE name LIKE ? 
                  OR sku LIKE ?";

        $stmt = $this->conn->prepare($query);

        $search = "%" . $keyword . "%";

        $stmt->bind_param("ss", $search, $search);

        $stmt->execute();

        return $stmt->get_result();
    }

    // Get Product By ID
    public function getProductById($id)
    {
        $query = "SELECT * FROM products WHERE id = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("i", $id);

        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }
}

?>