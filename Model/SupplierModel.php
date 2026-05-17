<?php

require_once(__DIR__ . '/../Config/database.php');

class SupplierModel
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }
    public function getAllSuppliers()
    {
        $query = "SELECT * FROM suppliers ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt->get_result();
    }

    public function searchSupplier($keyword)
    {
        $query = "SELECT * 
                  FROM suppliers
                  WHERE company_name LIKE ?";

        $stmt = $this->conn->prepare($query);

        $search = "%" . $keyword . "%";

        $stmt->bind_param("s", $search);

        $stmt->execute();

        return $stmt->get_result();
    }

    public function getSupplierProducts($productId)
    {
        $query = "SELECT 
                    suppliers.company_name,
                    supplier_products.unit_price,
                    supplier_products.lead_time_days,
                    supplier_products.is_preffered_supplier
                  FROM supplier_products
                  JOIN suppliers
                  ON supplier_products.supplier_id = suppliers.id
                  WHERE supplier_products.product_id = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("i", $productId);

        $stmt->execute();

        return $stmt->get_result();
    }
}

?>