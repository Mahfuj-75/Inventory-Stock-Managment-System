<?php

include('../../Model/PurchaseOrderModel.php');

class PurchaseOrderController
{

    private $poModel;

    function __construct($conn)
    {

        $this->poModel = new PurchaseOrderModel($conn);
    }

    function allPO()
    {

        return $this->poModel->getAllPO();
    }

    function createPO($supplier,$raised_by,$date,$notes)
    {

        return $this->poModel->createPO(
            $supplier,
            $raised_by,
            $date,
            $notes
        );
    }

    function updatePO($id,$date)
    {

        return $this->poModel->updatePO($id,$date);
    }

    function deletePO($id){

        return $this->poModel->deletePO($id);
    }

    function cancelPO($id)
    {

        return $this->poModel->cancelPO($id);
    }

    function receivedPO($id)
    {

        return $this->poModel->receivedPO($id);
    }

}

?>