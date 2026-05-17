<?php

class ProductModel
{

    private $conn;

    function __construct($conn)
    {

        $this->conn = $conn;
    }

    function getAllProducts()
    {

        $sql = "SELECT * FROM products";

        return $this->conn->query($sql);
    }

    function lowStockProducts()
    {

        $sql = "SELECT * FROM products
                WHERE current_stock <= reorder_level";

        return $this->conn->query($sql);
    }

    function searchProduct($name)
    {

        $sql = "SELECT * FROM products
                WHERE name LIKE ?";

        $search = "%".$name."%";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("s",$search);

        $stmt->execute();

        return $stmt->get_result();
    }

}

?>