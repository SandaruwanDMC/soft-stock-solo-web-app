<?php

require_once '../includes/dbh.inc.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT DISTINCT products.barcode_number, products.product_name
        FROM products
        INNER JOIN stocks
        ON products.product_id = stocks.product_id
        WHERE (SELECT SUM(current_stock) FROM stocks WHERE product_id = products.product_id AND user_id = products.user_id) = 0 AND products.user_id = ?";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_stock.php?error=stmtFailed');
    exit();
}

mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

$stocks = array();

while ($row = mysqli_fetch_assoc($resultData)) {
    $stocks[] = $row;
}

mysqli_stmt_close($stmt);
