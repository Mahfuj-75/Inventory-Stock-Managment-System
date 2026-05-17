<?php


session_start();

if(!isset($_SESSION['user_id'])){

    header("location: ../../login.php");
}


include('../../Config/database.php');

include('../../Controller/ProductController.php');

$controller = new ProductController($conn);

$result = $controller->allProducts();

?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>

<div class="card">

<h2>All Products</h2>

<input type="text"
id="search"
placeholder="Search Product">

<div id="result"></div>

<br>

<table>

<tr>

<th>Name</th>
<th>SKU</th>
<th>Stock</th>
<th>Reorder Level</th>

</tr>

<?php while($row = $result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['sku']; ?></td>

<td><?php echo $row['current_stock']; ?></td>

<td><?php echo $row['reorder_level']; ?></td>

</tr>

<?php } ?>

</table>

</div>

<script>

document.getElementById("search")
.addEventListener("keyup", function(){

    let name = this.value;

    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

            document.getElementById("result")
            .innerHTML = this.responseText;
        }
    };

    xhttp.open(
        "GET",
        "../../API/searchProduct.php?name="+name,
        true
    );

    xhttp.send();
});

</script>

<?php include('footer.php'); ?>