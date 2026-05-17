<?php

require_once '../Model/product_Model.php';

if (isset($_GET['search'])) {

    $search = $_GET['search'];

    $productModel = new ProductModel();

    $products = $productModel->searchProducts($search);

    if ($products->num_rows > 0) {

        while ($row = $products->fetch_assoc()) {

            echo "<p>" . $row['name'] . "</p>";

        }

    } else {

        echo "<p>No Product Found</p>";

    }

}
?>