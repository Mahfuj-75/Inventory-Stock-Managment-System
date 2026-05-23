<?php

class PurchaseOrderModel
{

    private $conn;

    function __construct($conn)
    {

        $this->conn = $conn;
    }

    function getAllPO()
    {

        $sql = "SELECT * FROM purchase_orders";

        return $this->conn->query($sql);
    }

    function createPO($supplier,$raised_by,$date,$notes)
    {

        $status = "draft";

        $sql = "INSERT INTO purchase_orders
                (supplier_id,raised_by,status,
                expected_delivery_date,notes)

                VALUES (?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "iisss",
            $supplier,
            $raised_by,
            $status,
            $date,
            $notes
        );

        return $stmt->execute();
    }

    function updatePO($id,$date)
    {

        $sql = "UPDATE purchase_orders
                SET expected_delivery_date=?
                WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("si",$date,$id);

        return $stmt->execute();
    }

    function deletePO($id)
    {

        $sql = "DELETE FROM purchase_orders
                WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i",$id);

        return $stmt->execute();
    }

    function cancelPO($id)
    {

        $status = "cancelled";

        $sql = "UPDATE purchase_orders
                SET status=?
                WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("si",$status,$id);

        return $stmt->execute();
    }

    function receivedPO($id)
    {

        $status = "received";

        $sql = "UPDATE purchase_orders
                SET status=?
                WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("si",$status,$id);

        return $stmt->execute();
    }

}

?>