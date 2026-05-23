<?php

include('../../Model/ProductModel.php');

class ProductController{

    private $productModel;

    function __construct($conn){

        $this->productModel = new ProductModel($conn);
    }

    function allProducts(){

        return $this->productModel->getAllProducts();
    }

    function lowStockProducts(){

        return $this->productModel->lowStockProducts();
    }

    function searchProduct($name){

        return $this->productModel->searchProduct($name);
    }

}

?>