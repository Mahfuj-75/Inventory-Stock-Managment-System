<?php

require_once __DIR__ . '/../Model/StockTransactionModel.php';

$stockModel = new StockTransactionModel();
$transactions = $stockModel->getTransactions();

?>