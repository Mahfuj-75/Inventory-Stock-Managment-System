<?php

include('../Config/database.php');

include('../Model/ProductModel.php');

$model = new ProductModel($conn);

$name = $_GET['name'];

$result = $model->searchProduct($name);

while($row = $result->fetch_assoc()){

    echo $row['name']."<br>";
}

?>