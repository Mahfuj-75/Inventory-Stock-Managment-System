<?php

class SupplierModel{

    private $conn;

    function __construct($conn){

        $this->conn = $conn;
    }

    function getAllSuppliers(){

        $sql = "SELECT * FROM suppliers";

        return $this->conn->query($sql);
    }

    function supplierProducts($id){

        $sql = "SELECT * FROM supplier_products
                WHERE supplier_id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i",$id);

        $stmt->execute();

        return $stmt->get_result();
    }

}

?>