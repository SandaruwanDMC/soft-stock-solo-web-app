<?php
$user_id = $_SESSION['user_id'];
// Query to get the total number of products
$totalProfitQuery = "SELECT SUM(total_profit) AS total_profit_last_30_days FROM invoice WHERE created_at >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND user_id = ?;";

$totalDebtQuery = "SELECT SUM(i.total_amount) AS total_debtor_records_value FROM debtor_record dr JOIN invoice i ON dr.invoice_id = i.invoice_id WHERE dr.user_id = ?;";

$itemCountQuery = "SELECT SUM(ili.quantity) AS total_items_sold FROM invoice_line_items ili JOIN invoice i ON ili.invoice_id = i.invoice_id WHERE i.user_id = ? AND i.created_at >= DATE_SUB(CURDATE(), INTERVAL 30 DAY);";

// Prepare and execute the queries
$stmt1 = mysqli_prepare($conn, $totalProfitQuery);
$stmt2 = mysqli_prepare($conn, $totalDebtQuery);
$stmt3 = mysqli_prepare($conn, $itemCountQuery);

mysqli_stmt_bind_param($stmt1, "i", $user_id);
mysqli_stmt_bind_param($stmt2, "i", $user_id);
mysqli_stmt_bind_param($stmt3, "i", $user_id);

mysqli_stmt_execute($stmt1);

// Fetch the result for the first query
$totalProfitResult = mysqli_stmt_get_result($stmt1);
$totalProfit = mysqli_fetch_assoc($totalProfitResult)['total_profit_last_30_days'];

// Close the result set for the first query
mysqli_stmt_close($stmt1);

mysqli_stmt_execute($stmt2);

// Fetch the result for the second query
$totalDebtResult = mysqli_stmt_get_result($stmt2);
$totalDebt = mysqli_fetch_assoc($totalDebtResult)['total_debtor_records_value'];

// Close the result set for the second query
mysqli_stmt_close($stmt2);

mysqli_stmt_execute($stmt3);

// Fetch the result for the third query
$itemCountResult = mysqli_stmt_get_result($stmt3);
$itemCount = mysqli_fetch_assoc($itemCountResult)['total_items_sold'];

// Close the result set for the third query
mysqli_stmt_close($stmt3);
