<?php
$user_id = $_SESSION['user_id'];
// Query to get the total number of products
$totalProductsQuery = "SELECT COUNT(product_id) AS total_products FROM products WHERE user_id = ?";

// Query to get the number of products with lower stock (you can adjust the threshold as needed)
// $lowerStockQuery = "SELECT COUNT(DISTINCT p.product_id) AS total_low_stock
// FROM products p
// JOIN stocks s ON p.product_id = s.product_id
// WHERE s.current_stock < p.reorder_point AND p.user_id = ?";
$lowerStockQuery = "SELECT COUNT(DISTINCT p.product_id) AS total_low_stock
FROM products p
JOIN stocks s ON p.product_id = s.product_id
WHERE (SELECT SUM(current_stock) FROM stocks WHERE product_id = p.product_id AND user_id = p.user_id) < p.reorder_point AND p.user_id = ?";

// Query to get the number of products with zero stock
// $zeroStockQuery = "SELECT COUNT(DISTINCT p.product_id) AS total_zero_stock
// FROM products p
// JOIN stocks s ON p.product_id = s.product_id
// WHERE s.current_stock = 0 AND p.user_id = ?";

$zeroStockQuery = "SELECT COUNT(DISTINCT p.product_id) AS total_zero_stock
FROM products p
JOIN stocks s ON p.product_id = s.product_id
WHERE (SELECT SUM(current_stock) FROM stocks WHERE product_id = p.product_id AND user_id = p.user_id) = 0 AND p.user_id = ?";

// Prepare and execute the queries
$stmt1 = mysqli_prepare($conn, $totalProductsQuery);
$stmt2 = mysqli_prepare($conn, $lowerStockQuery);
$stmt3 = mysqli_prepare($conn, $zeroStockQuery);

mysqli_stmt_bind_param($stmt1, "i", $user_id);
mysqli_stmt_bind_param($stmt2, "i", $user_id);
mysqli_stmt_bind_param($stmt3, "i", $user_id);

mysqli_stmt_execute($stmt1);

// Fetch the result for the first query
$totalProductsResult = mysqli_stmt_get_result($stmt1);
$totalProducts = mysqli_fetch_assoc($totalProductsResult)['total_products'];

// Close the result set for the first query
mysqli_stmt_close($stmt1);

mysqli_stmt_execute($stmt2);

// Fetch the result for the second query
$lowerStockResult = mysqli_stmt_get_result($stmt2);
$lowerStock = mysqli_fetch_assoc($lowerStockResult)['total_low_stock'];

// Close the result set for the second query
mysqli_stmt_close($stmt2);

mysqli_stmt_execute($stmt3);

// Fetch the result for the third query
$zeroStockResult = mysqli_stmt_get_result($stmt3);
$zeroStock = mysqli_fetch_assoc($zeroStockResult)['total_zero_stock'];

// Close the result set for the third query
mysqli_stmt_close($stmt3);

