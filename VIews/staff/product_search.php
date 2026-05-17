<?php

require_once '../../middleware/auth.php';
require_once '../../middleware/role_check.php';

?>
<!DOCTYPE html>
<html>

<head>

    <title>Product Search</title>

    <link rel="stylesheet" href="../../assets/css/style.css">

</head>

<body>
    <a href="dashboard.php" class="back-btn">
    ← Back
</a>

<h1>Product Search</h1>

<form>

    <input 
        type="text" 
        id="search" 
        placeholder="Enter Product Name"
    >

</form>

<br>

<div id="result"></div>

<script src="../../assets/js/product_search.js"></script>

</body>
</html>