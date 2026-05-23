<?php

require_once '../Model/product_Model.php';

if (isset($_GET['search'])) {

    $search = $_GET['search'];

    $productModel = new ProductModel();

    $products = $productModel->searchProducts($search);

    if ($products->num_rows > 0) {

        while ($row = $products->fetch_assoc()) {

            echo "
            
            <div class='product-row'>

                <div class='left'>
                    ID(" . $row['id'] . ")
                </div>

                <div class='center'>
                    " . $row['name'] . "
                </div>

                <div class='right'>
                    Q(" . $row['current_stock'] . ")
                </div>

            </div>

            ";

        }

    } else {

        echo "

        <div class='product-row'>

            <div class='center'>
                No Product Found
            </div>

        </div>

        ";

    }

}

?>