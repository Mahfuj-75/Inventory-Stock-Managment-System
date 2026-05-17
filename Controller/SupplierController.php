<?php

include('../Models/SupplierModel.php');
class SupplierController
{

    private $supplierModel;

    function __construct($conn)
    {

        $this->supplierModel = new SupplierModel($conn);
    }

    function allSuppliers()
    {

        return $this->supplierModel->getAllSuppliers();
    }

    function supplierProducts($id)
    {

        return $this->supplierModel->supplierProducts($id);
    }

}

?>