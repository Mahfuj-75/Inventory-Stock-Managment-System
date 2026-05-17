<?php

class DashboardController{

    private $conn;

    function __construct($conn){

        $this->conn = $conn;
    }

    function lowStockCount(){

        $sql = "SELECT * FROM products
                WHERE current_stock <= reorder_level";

        $result = $this->conn->query($sql);

        return $result->num_rows;
    }

    function totalPO(){

        $sql = "SELECT * FROM purchase_orders";

        $result = $this->conn->query($sql);

        return $result->num_rows;
    }

    function totalSuppliers(){

        $sql = "SELECT * FROM suppliers";

        $result = $this->conn->query($sql);

        return $result->num_rows;
    }

}

?>