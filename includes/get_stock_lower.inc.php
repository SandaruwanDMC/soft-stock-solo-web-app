<?php

require_once '../includes/dbh.inc.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT DISTINCT p.product_name, (SELECT SUM(s.current_stock) FROM stocks s WHERE s.product_id = p.product_id AND s.user_id = p.user_id) as  current_stock
FROM products p
JOIN stocks s ON p.product_id = s.product_id
WHERE (SELECT SUM(s.current_stock) FROM stocks s WHERE s.product_id = p.product_id AND s.user_id = p.user_id) < p.reorder_point AND (SELECT SUM(s.current_stock) FROM stocks s WHERE s.product_id = p.product_id AND s.user_id = p.user_id) > 0 AND p.user_id = ?;";

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
