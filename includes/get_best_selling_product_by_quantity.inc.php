<?php

require_once '../includes/dbh.inc.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT p.product_name, SUM(ili.quantity) AS total_quantity_sold
FROM products p
LEFT JOIN stocks s ON p.product_id = s.product_id
LEFT JOIN invoice_line_items ili ON s.stock_id = ili.stock_id
WHERE p.user_id = ?
GROUP BY p.product_id, p.product_name
ORDER BY total_quantity_sold DESC;";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_profile_details.php?error=stmtFailed');
    exit();
}

mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

// $categories = mysqli_fetch_assoc($resultData);

$products = array(); // Initialize an empty array to store categories

while ($row = mysqli_fetch_assoc($resultData)) {
    $products[] = $row; // Add each row to the categories array
}

mysqli_stmt_close($stmt);