<?php

require_once '../../Controller/TransactionController.php';

?>

<!DOCTYPE html>
<html>
<head>

    <title>Transaction History</title>

    <style>

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

    </style>

</head>
<body>

<h1>Transaction History</h1>

<table>

    <tr>

        <th>ID</th>
        <th>Product ID</th>
        <th>Warehouse ID</th>
        <th>User ID</th>
        <th>Type</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Date</th>

    </tr>

    <?php while($row = $transactions->fetch_assoc()) { ?>

    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['product_id']; ?></td>
        <td><?= $row['warehouse_id']; ?></td>
        <td><?= $row['user_id']; ?></td>
        <td><?= $row['type']; ?></td>
        <td><?= $row['quantity']; ?></td>
        <td>
        <?php
            if($row['type'] == 'out') {
                echo "Stock Out";
            } else { echo $row['unit_price'];
            }?>
        </td>
        <td><?= $row['created_at']; ?></td>
    </tr>

    <?php } ?>
</table>

</body>
</html>